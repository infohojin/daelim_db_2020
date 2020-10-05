<?php
$name1= hello("대림이");
echo $name1;
echo hello("대숙이");

print hello();
function hello($name="아무게")
{
$text ="";
// 복합 연산자
// 문자열을 결합합니다.(.)
$text .= "안녕하세요." ."<br>";
$text .="날씨가 참 좋네요." ."<br>";
$text .= " 저는 대림대학교 <b>$name</b> 입니다.<br> ";

return $text;
}