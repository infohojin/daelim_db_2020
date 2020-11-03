<?php
// 조건제어문 값은 => 논리값
// 논리값 => 참/거짓

if (!file_exists("html_get_resource")) {
    function html_get_resource($layout = "layout1", $html = "layout.html") {
        $file_name = "../resource/" . $layout . "/" . $html;
        $body = file_get_contents($file_name);
        return $body;
    }
}

