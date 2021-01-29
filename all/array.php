<?php 

    $food = ["hey","bro","whats up"];
    $food = array(
                    "first"=>array("hey","This","is","first"),
                    "second"=>array("hey","This","is","second"),
                    "Third"=>array("hey","This","is","Third")
                 );
    
    print_r($food);

    echo $food['first'][0];
    foreach($food as $ele=>$inner_array){
        echo $ele."<br/>";
        print_r($inner_array);
        
    }   

    foreach($food as $ele=>$inner_array){
        echo $ele."<br/>";
       foreach($inner_array as $key=>$value){   
            echo $key."=>".$value."<br/>";
       }
       echo "<br/>";
        
    } 

    $usingSquare = [
                    ["First name"=>"Dishant","Last name"=>"Navadiya"]
                   ];
    $likeObject = [
                    ["name"=>"Dishant","age"=>22],
                    ["name"=>"Keval","age"=>21]
                  ];               

    print_r($usingSquare);
?>