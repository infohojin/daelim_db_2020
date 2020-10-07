<?php

if(!function_exists("html_get_contents")){

 
    function html_get_contents($theme, $path="layout.html")
    {
        $filename = "../resource/".$theme."/".$path;
      //$filename = "../resource/layout02/layout.html";
       $body = file_get_contents($filename);
       return $body;
    }
}

if(!function_exists("resource")){
function resource($file, $vars=[]):string
    {
        // 파일 존재??
        if(\file_exists($file)) {

            extract($vars); // 키명으로 변수화
            // 배열 => 연상배열
            // 키=>값

            // 배열 => 키값을 변수명으로 전환

            ob_start(); // 출력 버퍼링
            
            include($file); // PHP 형태로 코드를 읽어 옵니다.
            // 코드 실행
            
            return ob_get_clean(); // 버퍼를 반환합니다.
        
        } else {
            echo __FUNCTION__." ";
            echo $file."을 읽을 수 없습니다.";
            exit;
        }
    }}