<?php 
    class Database {
       
        private $host = "localhost";
        private $user = "root";
        private $password = "";
        private $database = "blog";
        public $con;
       
        function __construct() {
            $this->con = new mysqli($this->host,$this->user,$this->password,$this->database);
            if ($this->con -> connect_errno) {
                echo "Failed to connect to MySQL: " . $this->con -> connect_error;
                exit();
              }
        }

        function FindOne($email,$password){
            $hashpassword = md5($password);
            $sql = "SELECT * FROM register where email LIKE '$email' AND password LIKE '$hashpassword'";
            $response = $this->con->query($sql);
            if($response->num_rows>0){
                $user = mysqli_fetch_array($response);
                return ["status"=>TRUE,"uid"=>$user['uid']];
            }else{
                echo "<h1>Invalid Username and Password</h1>";   
            }
        }

        function Insert($prefix,$firstName,$lastName,$mobile,$email,$password,$information){
            $find = "SELECT * FROM register WHERE email LIKE '$email'";
            $response = $this->con->query($find);
            if($response->num_rows>0) {
                return "Email already taken. try new one.";
            }else{
                $hashPassword = md5($password);
                $sql = "INSERT INTO register (prefix,firstName,lastName,mobile,email,password,information)
                        VALUES ('$prefix', '$firstName', '$lastName','$mobile','$email','$hashPassword','$information')";
                if($this->con->query($sql)===TRUE){
                    return "Inserted Successfully";
                }else{
                    exit("not inserted");    
                }
            }
        }

        function Update($cid,$name,$email,$phone,$title,$created){
            $sql = "UPDATE contacts set name='$name',email='$email',phone='$phone',title='$title',created='$created'
                                          WHERE cid=$cid";
            if($this->con->query($sql)===TRUE){
                return TRUE;
            }else{
                exit("not inserted");    
            }
        }
       
        function Find(){
            $sql = "SELECT * FROM contacts";
            $response = $this->con->query($sql);
            if($response->num_rows>0){
                return $response;
            }else{
                echo "<h1>No Records Found</h1>";   
            }
        }

        function Delete($cid){
            $sql = "DELETE FROM contacts WHERE cid=$cid";
            if($this->con->query($sql)===TRUE){
                echo TRUE;
            }
        } 

        function DeleteCategory($cid) {
            $sql = "DELETE FROM category WHERE cid=$cid";
            if($this->con->query($sql)===TRUE){
                echo TRUE;
            }
        }

        function AddCategory($title,$content,$metaTitle,$pid,$image){
            $imageFileType = strtolower(pathinfo($image["name"],PATHINFO_EXTENSION));
            $targetPath = "./upload/";
            if($image["size"] > 5000000) {   
                return ["status"=>FALSE,"msg"=>"File is too large"];
            }
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
                 return ["status"=>FALSE,"msg"=>"Sorry, only JPG, JPEG, PNG files are allowed."];
                
            }
            $url = $targetPath.time().".".$imageFileType;
            if(move_uploaded_file($image["tmp_name"], $url)) {
                
                $sql = "INSERT INTO category (parentId,title,metaTitle,url,content)
                VALUES ('$pid', '$title', '$metaTitle','$url','$content')";
                if($this->con->query($sql)===TRUE){
                     return ["status"=>TRUE,"msg"=>"Inserted Successfully"];
                }else{
                    exit("not inserted");    
                }
            }
        }

        function AddBlog($title,$content,$date,$pid,$image){
            $imageFileType = strtolower(pathinfo($image["name"],PATHINFO_EXTENSION));
            $targetPath = "./upload/";
            if($image["size"] > 5000000) {   
                return ["status"=>FALSE,"msg"=>"File is too large"];
            }
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
                 return ["status"=>FALSE,"msg"=>"Sorry, only JPG, JPEG, PNG files are allowed."];
                
            }
            $url = $targetPath.time().".".$imageFileType;
            if(move_uploaded_file($image["tmp_name"], $url)) {
                $uid = $_SESSION['uid'];
                $sql = "INSERT INTO blogpost (uid,title,url,content,publishAt)
                VALUES ($uid, '$title','$url','$content','$date')";
                if($this->con->query($sql)===TRUE){
                     $bid = $this->con->insert_id;
                     foreach($pid as $id){
                        $sql = "INSERT INTO postcategory(bid,cid)
                                    VALUES ($bid,$id)";
                        $this->con->query($sql);
                    }
                    return ["status"=>TRUE,"msg"=>"Inserted Successfully"];
                }else{
                    exit("not inserted");    
                }
            }
        }

        function CategoryFind() {
            $sql = "SELECT * FROM category";
            $response = $this->con->query($sql);
            if($response->num_rows>0){
                return $response;
            }else{
                echo "<h1>No Records Found</h1>";   
            }
        }

        function BlogFind() {
            $sql = "SELECT DISTINCT b.bid,uid,title,url,content,publishAt,concat('cat...') as categories
            FROM blogpost as b, postcategory as pc
            where pc.bid = b.bid";
            $response = $this->con->query($sql);
            if($response->num_rows>0){
                return $response;
            }else{
                echo "<h1>No Records Found</h1>";   
            }
        }
        
        function LogoutEntry($uid){
            $currentTime = date("Y-m-d h:i:sa",time());
            $sql = "UPDATE register set lastLogin='$currentTime' WHERE uid=$uid";
            $this->con->query($sql);
        }

    }


    if(isset($_POST['category']) and isset($_POST['cid'])) {
        if($_POST['category']=="delete"){

            $obj = new Database();
            $obj->DeleteCategory($_POST['cid']);
        }
    }
?>