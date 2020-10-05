<?php
//함수 이름 중복 X
//논리값 -> 논리연산이 되는값
// ! not 연산
// 참 -> 거짓 , 거짓 -> 참
if(!function_exists("html_get_contents")){
    function html_get_contents($theme,$path="layout.html"){
        //$filename = "../resource/layout02/layout.html";
        $filename = "../resource/".$theme."/".$path;
        $body = file_get_contents($filename);
        return $body;
    }
} 
if(!function_exists('resource')){

    function resource($file, $vars=[]):string
    {
        if(\file_exists($file)){
            extract($vars);
            ob_start();
            include($file);
            return ob_get_clean();
        }else{
            echo __FUNCTION__." "; 
            echo $file."을 읽을 수 없습니다.";
            exit;
        }
    }
}