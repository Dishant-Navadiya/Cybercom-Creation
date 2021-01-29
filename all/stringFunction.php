<?php 
    $string = "Hello i'm Dishant .";
    $result = str_word_count($string,2,'.');
    
    print_r($result) ;
    echo "-------------<br/>";

    $string2 = "This is string shuffle";

    $shuffle = str_shuffle($string2);
    echo $shuffle;
    echo "-------------<br/>";
    $string3 = "Sub string example";
    $subString = substr($string3,0,3);

    echo $subString;

    $str1= "This is a laptop";
    $str2 ="This is a pc";
    echo "-------------<br/>";

    similar_text($str1,$str2,$similarText);

    echo $similarText;

    echo "-------------<br/>";
    $string3 = "This is for find strlen";

    echo strlen($string3);
    echo "-------------<br/>";

    $string4 = "This is for find strlen   ";
    echo trim(string4);

?>