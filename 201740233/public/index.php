<?php

$file_name = "../"; // 상위폴더
$file_name .= "resource/layout.html"; // 복합연산자 - .은 문자열을 연결

//함수를 호출해서 값을 전달
// file_get_contents()는 파일을 읽어서 내용을 결과값으로 반환
$body = file_get_contents($file_name);
$header = file_get_contents("../resource/header.html");
$footer = file_get_contents("../resource/footer.html");

// 스트링을 치환
// {{header}} 문자열을 $header로 변환
$body = str_replace("{{header}}", "$header", $body);
$body = str_replace("{{footer}}", "$footer", $body);

echo $body;