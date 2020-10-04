<?php

// 함수 중복검사
// 조건제어문 값 => 논리값 => 참/거짓
// 참 => 0보다 큰값 / 거짓 => 0 또는 null 등 없는 값

// 논리값, 논리 연산
// ! => not 의미, 참 => 거짓 / 거짓 => 참
if (!function_exists("html_get_resource")) {
    // ! 사용 => 있다면->없다면 => else문 삭제
    function html_get_resource($layout, $path="layout.html")
    {
        $filename = "../resource/".$layout."/".$path;
        // 리소스 파일을 읽어 옵니다.
        //$filename = "../resource/layout02/layout.html";
        $body = file_get_contents($filename);
        return $body;
    }
}

//echo "함수가 선언되었습니다.";