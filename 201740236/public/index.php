<?php

/* $filename = "../";
$filename .= "resource/layout.html";//복합연산자
// . 문자열을 더하는 연산자
// = 대입

$body = file_get_contents($filename);
$header = file_get_contents("../resource/header.html");
$body = str_replace("{{header}}",$header,$body);

$footer = file_get_contents("../resource/footer.html");
$body = str_replace("{{footer}}",$footer,$body);
echo $body; 
*/

//resource 파일로 점프
//include "resource.php"; 함수 중복선언
//include vs require 
// include > 파일이 존재하지 않으면 경고 계속실행
// requirce > 파일이 없으면 프로그램 중단

require_once "resource.php";


$layout = "layout03";
$layout = html_get_resource($layout);
$content = html_get_resource("layout02", "hello.html");

$layout = str_replace("{{contents}}", $content, $layout);
echo $layout;