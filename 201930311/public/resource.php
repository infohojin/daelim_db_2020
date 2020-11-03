<?php
// 함수 이름 중복 x
// 조건문, 조건 => 논리값
// 논리값 참/겇=짓
// 논리값 => 논리연사
// ! not 연산 참-> 거짓
// 거짓 ->참




if(!function_exists("html_get_contents")){



    function html_get_contents($theme,$path="layout.html")
    {
        $filename ="../resource/".$theme."/".$path;
        //$filename ="../resource/layout02/layout.html";
        $body =  file_get_contents($filename);
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