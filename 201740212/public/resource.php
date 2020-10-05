<?php
/*
//함수를 호출해서 사용
//값을 전달해주면, 문자열을 전달한다. 파일주소
$filename = "../"; //상위폴더(학번)
$filename .= "resource/layout.html"; //복합연산자
// . 문자열을 더하는 연산자 
// = 대입


// file_get_contents 함수는 파일을 읽어서 내용을 결과값으로 반환한다.
$body = file_get_contents($filename);
$header = file_get_contents("../resource/header.html");


// body에 str_replace 함수의 결과값을 대입
// 스트링을 치환
$body = str_replace("{{header}}",$header,$body);

$footer = file_get_contents("../resource/footer.html");
$body = str_replace("<<푸터에요>>",$footer,$body);

echo $body;
*/

//조건제어문 값은 => 논리값
// 논리값 => 참/거짓
// 참 => 0보다 큰값
// 거짓 => 0 또는  null 없는 값

//논리값, 논리 연산
//! => not 의미, 참->거짓, 거짓->참
if(!function_exists("html_get_resource"))
{
    function html_get_resource($layout, $path="layout.html")
    {
        $filename = "../resource/".$layout."/".$path;
        //리소스 파일을 읽어옵니다
       // $filename = "../resource/layout02/layout.html";
        $body = file_get_contents($filename);
        return $body;
    }
}

// echo html_get_resource();