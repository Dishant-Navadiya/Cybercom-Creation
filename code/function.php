<?php
    $array = [1,2,3,4,5,6];

    function findIndex($ele,$arr) {
        $findEle = $ele;
        $array = $arr;
     
        for($i=0;$i<count($array);$i++){
            if($findEle == $array[$i]){
               return $i;
            }
        }
       
        return false;
    }
    
    $ans = findIndex(5,$array);
    if($ans) {
        echo $ans;
    }
   echo $_SERVER['REMOTE_ADDR'];

   echo "<br/>";
   $before = 1;
   echo ++$before;

   $after = 2;
   $after++;
   echo "<br/>";
   echo $after;
?>