<?php
// 함수 이름은 중복 되면 안되요.

// 조건문 , 조건 => 논리값
// 논리값 참 / 거짓
// 논리값 => 논리 연산
// ! not 연산,
// 참 -> 거짓
// 거짓 -> 참
if(!function_exists("html_get_contents")){
     //거짓 동작 부분

    // 없는 경우에만 함수를 선언
function html_get_contents($theme,$path ="layout.html")
{
    $filename = "../resource/".$theme."/".$path;
    //$filename = "../resource/layout02/".$path;
    $body = file_get_contents("$filename");
    return $body;
    }
}

/*
else {
    //참동작 부분
}
*/
if(!function_exists('resource')){
function resource($file, $vars=[]):string
    {
        // 파일 존재??
        if(\file_exists($file)) {
            extract($vars);
            ob_start(); 
            include($file);
            return ob_get_clean(); 
        } else {
            echo __FUNCTION__." ";
            echo $file."을 읽을 수 없습니다.";
            exit;
        }
    }
}