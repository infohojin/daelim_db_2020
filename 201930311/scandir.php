<?php
// $dir = scandir(".");
// print_r($dir);

function showDir($path){
    $dir = scandir($path); // $path 경로명의 파일목록 읽어옴
    echo '<ul>';
    foreach($dir as $name){
        // . ..생략
        if($name =="." || $name =="..")continue;

        if(is_dir($name)){
            echo "<li>".showDir($path. "/" . $name) . "</li>";
        }
        else
            echo "<li>".$name . "</li>";
    }
    echo '</ul>';
}
showDir(".");
