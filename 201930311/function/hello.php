<?php

// $funcs = get_defined_functions();
// echo "<pre>";
// print_r($funcs);
// echo "</pre>";

if(function_exists("hello")){
    echo "hello 함수가 있네";}
else{
    echo "hello가 뭐냐";

function hello($name="아무개"){

    $text = "";
    $text .= "하이. <br>";
    $text .= "날이 좋다<br>";
    $text .= "대림대 <b>$name</b> 이다 <br>";

    return $text;
}
}