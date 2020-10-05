<?php
// 함수 이름은 중복 되면 X


if(!function_exists("html_get_contents")){
    // 거짓 동작 부분

// 없는 경우에만 함수를 선언
function html_get_contents($theme,$path="layout.html")
{
    $filename = "../resource/".$theme."/" .$path;
// $filename = "../resource/layout02/layout.html";
$body = file_get_contents($filename);
return $body;
}
}

/*
 else {
     //
 }
 */

 // resource 라는 함수가 있는지?
if (!function_exists('resource')) {

    // 함수를 선언
    // 파일,배열 매개변수
    // 반환값 : 문자열

    /*
    C언어
    반환값 함수명(인자값)

    PHP
    함수명(인자값) :반환값
    */
    

function resource($file, $vars=[]):string
{
  
    if(\file_exists($file)) {

        extract($vars); // 키명으로 변수화
        ob_start(); // 출력 버퍼링
         include($file); // PHP 형태로 코드를 읽어 옵니다.
         return ob_get_clean(); // 버퍼를 반환합니다.
       } else {
        echo __FUNCTION__." ";
        echo $file."을 읽을 수 없습니다.";
        exit;
    }
}

}