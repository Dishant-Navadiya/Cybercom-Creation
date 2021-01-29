<?php 

    $string = "This is DisHant a.";

    $srtlen = strlen($string);
    $match = preg_match('/Dishant/',$string);
    $lowerCaseString = strtolower($string);
    $upperCaseString = strtoupper($string);
    $strpos = strpos($string,"is",7);
    // $subStrReplace = substr_replace($string,"Keval",8,7);
    // echo "$srtlen"."<br/>";
    // echo "$match"."<br/>";
    // echo "$upperCaseString"."<br/>";
    // echo "$upperCaseString"."<br/>";
    // echo $strpos;
    
    // $first = ["This","is","Dharmik"];
    // $second = ["THIS","IS","DHARMIK"];

    // $outPut =  str_replace($first,$second,$string);
    // $outPut2 =  str_ireplace("dishant","keval",$string);
    // echo $outPut;
    // echo $subStrReplace;
?>