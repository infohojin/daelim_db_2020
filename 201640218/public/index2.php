<?php
//소스코드
//MVC 
echo"여기가 시작";
$filename = "../";
$filename .= "resource/layout.html";

//echo $filename;
$body = file_get_contents($filename);
// 함수의 값을 대입
$header = file_get_contents("../resource/header.html");
$body = str_replace("{{header}}",$header,$body); // 문자열을 찾아서 치환해주세요

function footer($filename,$body){
    //코드를 함수로 만들것 -> 중괄호로 묶는다.

    $footer = file_get_contents($filename);
    $body = str_replace("{{footer}}",$footer,$body); 

    return $body;
}
//함수 사용
$body = footer("../resource/footer.html",$body);
    

$main = file_get_contents("../resource/main.html");
$body = str_replace("{{main}}",$main,$body); 

echo $body;