<?php
if (!function_exists("html_get_resource")) {
    function html_get_resource($layout, $path="layout.html") 
    {
        $fileName = "../resource/$layout/$path";
        // 리소스 파일 읽어옴
        // $fileName = "../resource/layout02/layout.html";
        $body = file_get_contents($fileName);
        return $body;
    }
}

// echo '함수 선언';