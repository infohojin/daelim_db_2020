<?php

if (!file_exists("html_get_resource")) {
    // 리소스 파일을 읽어온다.
    function html_get_resource($layout) {
        $file_name ="../resource/".$layout;
        $body = file_get_contents($file_name);
        return $body;
    }
}
