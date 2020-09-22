<?php
// 함수를 호출해서 사용할거야
// 값을 전달해주면 문자열 전달할거야. 파일 주소.
$filename = "../";  // 상위 폴더(학번)
$filename .= "resource/layout.html";    // 복합연산자
// . 문자열을 더하는 연산자
// = 대입

// file_get contents 함수는
// 파일을 읽어서 내용을 결과값으로 반환
//echo file_get_contents($filename);

$body = file_get_contents($filename);
// echo $body;

$header = file_get_contents("../resource/header.html");
// echo $header;

// body에 str_replace 함수의 결과값을 대입
// 스트링을 치환
$body = str_replace("{{header}}", $header, $body);

$footer = file_get_contents("../resource/footer.html");
$body = str_replace("<<푸터영역>>", $footer, $body);

echo $body;