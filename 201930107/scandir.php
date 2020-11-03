<?php

// print_r($dir);

function showDir($path) {
    $dir = scandir($path);
    echo "<ul>";
    foreach ($dir as $k => $v) {
        if ($v == '.' || $v == '..') {
            continue;
        }
        if(is_dir($v)) {
            // 디렉토리
            echo "<li>" . $v . "</li>";
            showDir("./".$v);
            echo "<br>";
        } else {
            // 파일
            echo "<li><a href='" . $path . "/" . $v . "'>" . $v . "</a></li>";
        }
    }
    echo "</ul>";
}

showDir(".");