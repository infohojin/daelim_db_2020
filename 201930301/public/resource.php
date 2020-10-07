<?php
/*
//함수를 호출해서 사용
//값을 전달해주면, 문자열을 전달. 파일 주소
$filename = "../"; //상위폴더(학번)
$filename .=  "resource/layout.html"; //복합연산자
// .은 문자열을 더하는 연산자
// = 대입

//file_get_contents 함수는 파일을 읽어서 내용을 결과값으로 반환
$body = file_get_contents($filename);
$header = file_get_contents("../resource/header.html");

//body에 str_replace 함수의 결과값을 대입
//string 치환
$body = str_replace("{{header}}", $header, $body);

$footer = file_get_contents("../resource/footer.html");
$body = str_replace("<<푸터에요>>", $footer, $body);

echo $body;
*/
//조건제어문 값은 -> 논리값(참/거짓)
//참 -> 0보다 큰 값
//거짓 -> 0 또는 null 또는 없는 값

//논리값, 논리 연산
//! -> not 의미, 참 -> 거짓 / 거짓 -> 참
if(!function_exists("html_get_resource")){
    //있다 -> 없다
    //함수 선언
    function html_get_resource($layout, $path="layout.html"){
        $filename = "../resource/".$layout."/".$path;
        //리소스 파일을 읽어옴
        // $filename = "../resource/layout02/layout.html";
        $body = file_get_contents($filename);
        return $body;
    }
}
//echo "함수가 선언되었습니다.";