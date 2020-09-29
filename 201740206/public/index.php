<?php

/*
// 함수를 호출해서 사용할거야
// 값을 전달해주면, 문자열 전달할거야 (파일주소)
$filename = "../";  // 상위폴더 (학번)
$filename .= "resource/layout.html";  // 복합연산자
// .은 문자열을 더하는 연산자
// =은 대입연산자

// file_get_contents 함수는 파일을 읽어서 내용을 결과값으로 반환 후 출력
// echo file_get_contents($filename);
$body = file_get_contents($filename);
$header = file_get_contents("../resource/header.html");

// body에 str_replace() 함수의 결과값을 대입
// 스트링을 치환
$body = str_replace("{{header}}",$header,$body);

$footer = file_get_contents("../resource/footer.html");
$body = str_replace("<<푸터에요>>",$footer,$body);
echo $body;
*/



// resource 파일로 점프
// include "resource.php";
require "resource.php";

$layout = "layout03";
$layout = html_get_resource($layout);
$content = html_get_resource("layout02", "hello.html");

$layout = str_replace("{{contents}}", $content, $layout);
echo $layout;