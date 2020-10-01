<?php
/*
$file_name = "../"; 
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
*/

// 파일 import
// require & include : 동일 파일을 여러번 불러올 수 있다
// require_once & include_once : 동일 파일을 한번만 불러온다.
// [ 차이점] include => 파일이 존재하지 않다면 경고를 표시 후 계속 실행 | require => 파일이 존재하지 않는다면 프로그램 종료

require_once "resource.php";

$layout = html_get_resource("layout/layout03.html");
$content = html_get_resource("hello.html");
$layout = str_replace("{{contents}}", $content, $layout);

echo $layout;