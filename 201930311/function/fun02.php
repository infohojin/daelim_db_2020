<?php
$name1 = hello("박세훈");
echo $name1;
echo hello("뭐요");

print hello();
function hello($name="아무개"){

    $text = "";
    $text .= "하이. <br>";
    $text .= "날이 좋다<br>";
    $text .= "대림대 <b>$name</b> 이다 <br>";

    return $text;
}