<?php
//소스코드
//MVC => C(controller)
#echo "여기가 시작";
$filename = "../"; //상위폴더
$filename .= "resource/layout.html";

#echo $filename;
$body = file_get_contents($filename); // 합수값을 대입
// 전달받은 문자열과 동일한 파일을 찾아서

$header = file_get_contents("../resource/header.html");
#echo $header;
$body = str_replace("{{header}}",$header,$body); //문자열을 찾아서 치환해 주세요

$footer = file_get_contents("../resource/footer.html");
$body = str_replace("{{footer}}",$footer,$body);

// 함수 선언
function main($filename, $body) // 2개의 값을 받음
{
//코드를 함수로 만들것임
//코드를 묶어줘야함
$footer = file_get_contents($filename);
$body = str_replace("{{main}}", $footer, $body);

return $body;
}

//함수사용
$body = main("../resource/main.html", $body);

echo $body;