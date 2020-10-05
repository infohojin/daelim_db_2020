<?php
if(!function_exists("html_get_resource")){
      
    function html_get_resource($layout, $path="layout.html")
    {

        $filename="../resource/".$layout."/".$path;
        //$filename = "../resource/layout02/layout.html";
        $body = file_get_contents($filename);
        return $body;
    }
}

//echo "함수가 선언되었습니다"