<?php

#print_r($dir);

function showDir($path)
{
    $dir = scandir($path);//$path 경로명의 파일목록 읽어옴
    echo "<ul>";
    // 목록을 출력
    foreach($dir as $name){
        // . ..은 생략
        if($name == "." || $name =="..")continue;

        // 여기 부분 종료 조건
        if(is_dir($name)){
            //디렉토리
            echo "<li>".showDir($path. "/".$name) . "</li>";
        }else{
            //파일
            echo "<li>".$name . "</li>";
        }
        
    }
    echo "</ul>";
}

showDir(".");