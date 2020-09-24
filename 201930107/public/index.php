<?php
$fileName = "../";
$fileName .= "resource/layout.html"; // 복합연산자
// . 문자열을 더하는 연산자

$body = file_get_contents($fileName);
$header = file_get_contents("../resource/header.html");
$footer = file_get_contents("../resource/footer.html");

// body에 str_replace 함수의 결과값을 대입
// 스트링을 치환
$body = str_replace("{{header}}", $header, $body);
$body = str_replace("{{footer}}", $footer, $body);

echo $body;
// 해당 경로 파일 내용 반환