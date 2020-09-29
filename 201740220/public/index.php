<?php
// 함수를 호출해서 사용
// 값을 전달해주면, 문자열 전달. 파일주소
$filename = "../"; // 상위폴더(학번)
$filename .= "resource/layout.html"; //복합연산자
// . 문자열을 더하는 연산자
// = 대입

// file_get_contents 함수는
//파일을 읽어서 결과값으로 반환
$body = file_get_contents($filename);
$header = file_get_contents("../resource/header.html");

// body에 str.replace 함수의 결과값을 대입
// 스트림을 치환
$body = str_replace("{{header}}", $header, $body);

$footer = file_get_contents("../resource/footer.html");
$body = str_replace("<<푸터에요>>", $footer, $body);

echo $body;