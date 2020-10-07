<?php
/*// 함수를 호출해서 사용할꺼야
// 값을 전달해주면, 문자열 전달할거야 파일주소
$filename = "../"; //상위폴더 학번
$filename .= "resource/layout.html"; // 복합연산자
// . 문자열을 더하는 연산자
// = 대입


//file_get_contents 함수는 파일을 읽어서 내용을 결과값으로 반환

$body = file_get_contents($filename);
$header = file_get_contents("../resource/header.html");


//body에 str_replace 함수의 결과값을 대입
//스트링을 치환
$body = str_replace("{{header}}",$header,$body);
$footer = file_get_contents("../resource/footer.html");

$body = str_replace("<<푸터에요>>",$footer,$body);

echo $body;

여기가 이전에 공부했던 부분. 이후가 나중에 했던 것.*/


//시작이 여기.
//echo"여기가 시작";

//resource 파일로 점프
//inclue 사용한 만큼 파일을 결합하여 실행
//11장
//_once => 동일한 파일이 include 되었을때, 한번만 동작
#include_once "resource.php"; //함수 한번 선언
#include_once "resource.php";
//함수 중복 선언->에러나기때문에 리소스php의 if문 사용

require "resource.php";
//require_once "resource.php";
#include VS require
//include => 파일이 존재하지 않으면 경고. 계속실행
//require => 파일이 존재하지 않으면 프로그램 중단


//되돌아와서 프로그램 계속 실행
$layout =  html_get_resource("layout02");
$content = html_get_resource("layout02","hello.html");

$layout =str_replace("{{contents}}", $content, $layout);
echo $layout;