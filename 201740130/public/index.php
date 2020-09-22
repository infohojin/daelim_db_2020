<?php
//함수를 호출하여 사용
//값을 전달해주면 문자열에 전달
$filename = "../";
$filename .= "resource/layout.html";
// . 문자열을 더하는 연산자
// = 대입


// file_get_contents 함수는 파일을 읽어서 내용을 결과값으로 반환
$body = file_get_contents($filename);
$header = file_get_contents("../resource/header.html");

$body = str_replace("{{header}}", $header,$body);
$footer = file_get_contents("../resource/footer.html");
$body = str_replace("<<푸터>>", $footer,$body);
echo $body;