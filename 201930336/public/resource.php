<?php

/*
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
*/

// 조건제어문 값은 => 논리값
// 논리값 => 참/거짓
// 참 => 0보다 큰 값
// 거짓 => 0 또는 null. 없는 값

// 논리값 , 논리 연산을 할 수 있음
// ! => not의 의미. 참을 거짓으로 변하고 거짓이면 참으로 변경. 서로 뒤집는것.
if (!file_exists("html_get_resource")) {
    // 있다 없다 변경
    function html_get_resource($layout, $path = "layout.html") {
        $filename = "../resource/".$layout."/".$path;
        // 리소스 파일을 읽어줍니다.
        //$filename = "../resource/layout02/layout.html";
        $body = file_get_contents($filename);
        return $body;
    }
}

//echo "함수가 선언되었습니다.";