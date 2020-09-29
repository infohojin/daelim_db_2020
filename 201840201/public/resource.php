<?php
if (!function_exists("html_get_resource")){
    // 있다 -> 없다 변경
    //함수가 있어요

    //함수를 선언합니다.
    function html_get_resource($layout,$path="layout.html")
    {
        $filename = "../resource/".$layout."/".$path;
        //리소스 파일을 읽어옵니다.
        //$filename = "../resource/layout02/layout.html";
        $body = file_get_contents($filename);
        return $body;
    }
}

//echo "함수가 선언되었습니다.";