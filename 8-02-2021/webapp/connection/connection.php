<?php 
    class Database {
       
        private $host = "localhost";
        private $user = "root";
        private $password = "";
        private $database = "test";
        public $con;
       
        function __construct() {
            $this->con = new mysqli($this->host,$this->user,$this->password,$this->database);
            if ($this->con -> connect_errno) {
                echo "Failed to connect to MySQL: " . $this->con -> connect_error;
                exit();
              }
        }

        function FindOne($cid){
            $sql = "SELECT * FROM contacts where cid=$cid";
            $response = $this->con->query($sql);
            if($response->num_rows>0){
                return $response;
            }else{
                echo "<h1>No Records Found</h1>";   
            }
        }

        function Insert($name,$email,$phone,$title,$created){
            $sql = "INSERT INTO contacts (name, email, phone,title,created)
                    VALUES ('$name', '$email', '$phone','$title','$created')";
            if($this->con->query($sql)===TRUE){
                $success="Inserted Successfully";
                return $success;
            }else{
                exit("not inserted");    
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
        /*
        function Delete($cid){
            $sql = "DELETE FROM contacts WHERE cid=$cid";
            if($this->con->query($sql)===TRUE){
                $response = $this->Find();
                if($response->num_rows>0) {
                    foreach($response as $single){
                        ?>
                            <tr>
                                <td><?php echo $single['cid']; ?></td>
                                <td><?php echo $single['name']; ?></td>
                                <td><?php echo $single['email']; ?></td>
                                <td><?php echo $single['phone']; ?></td>
                                <td><?php echo $single['title']; ?></td>
                                <td><?php echo $single['created']; ?></td>
                                <td><a href="./update.php?cid=<?php echo $single['cid']; ?>" class="btn btn-light"><i class="bi bi-pencil"></i></a></td>
                                <td><button type="button" class="btn btn-light" onclick="handleDelete(<?php echo $single['cid']; ?>)"><i class="bi bi-trash"></i></button></td>
                            </tr>
                        <?php
                    }
                }
            }else{
                echo "<h1>No Records Found</h1>";    
            }
        }
        */

    }


    if(isset($_POST['action']) and isset($_POST['cid'])) {
        if($_POST['action']=="delete"){

            $obj = new Database();
            $obj->Delete($_POST['cid']);
        }
    }
?>