<?php

function html_get_resource(){
    $filename = "..\resource\layout02\layout.html";
    $body = file_get_contents($filename);
    return $body;
}

echo html_get_resource();