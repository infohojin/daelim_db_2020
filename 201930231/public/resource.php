<?php
// 함수 이름은 중복되면 안됨

// 조건문, 조건 => 논리값
// 논리값 참/거짓
// 논리값 => 논리연산
// ! not 연산
// 참 -> 거짓
// 거짓 -> 참
if(!function_exists("html_get_contents")) {
    function html_get_contents($theme, $path="layout.html")
    {
        $filename = "../resource/".$theme."/".$path;
        // $filename = "../resource/layout02/layout.html";
        $body = file_get_contents($filename);
        return $body;
    }
}

// resource라는 함수가 있는가?
if(!function_exists("resource")) {
    // 함수를 선언
    // 파일, 배열 매개변수
    // 반환값 : 문자열 

    /*
    C언어
    반환값 함수명(인자값)
    
    PHP
    함수명(인자값) : 반환값
     */
    function resource($file, $vars=[]):string
    {
        // 파일 존재??
        if(\file_exists($file)) {
            extract($vars);  // 키명으로 변수화
            // 배열 => 연상배열
            // 키=>값

            // 배열 => 키값을 변수명으로 전환

            ob_start();  // 출력 버퍼링
            
            include($file);  // PHP 형태로 코드를 읽어 옵니다.
            // 코드 실행
            
            return ob_get_clean();  // 버퍼를 반환합니다.
        
        } else {
            echo __FUNCTION__." ";
            echo $file."을 읽을 수 없습니다.";
            exit;
        }
    }
}