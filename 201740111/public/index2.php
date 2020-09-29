<?php
//소스코드
//MVC => C(controller)
$filename ="../"; //상위폴터
$filename .= "resource/layout.html";
//함수
$body = file_get_contents($filename);

$header = file_get_contents("../resource/header.html");
$body = str_replace("{{header}}",$header,$body);// 문자열을 찾아서 치환해 주세요.

$footer = file_get_contents("../resource/footer.html");
$body = str_replace("{{footer}}",$footer,$body);// 문자열을 찾아서 치환해 주세요.

// $main = file_get_contents("../resource/main.html");
// $body = str_replace("{{main}}",$main,$body);// 문자열을 찾아서 치환해 주세요.

function main($filename, $body)
{
    $main = file_get_contents($filename);
    $body = str_replace("{{main}}",$main,$body);

    return $body;
}
$body = main("../resource/main.html",$body);
  

echo $body;


