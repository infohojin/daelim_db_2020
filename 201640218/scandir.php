<?php
$dir = scandir(".");
function showDir($path)
{
    $dir = scandir($path); // $path 경로명의 파일 목록을 읽어옴
    echo "<ul>";
    // 목록 출력
    foreach($dir as $name)
    {
        if ($name == "." || $name == "..") continue;// . .. 은 생략

        if(is_dir($name))
        {
            //디렉토리
            echo "<li>" . showDir($path. "/" .$name). "</li>";    
        }
        else
        {
            //파일
            echo "<li>" . $name . "</li>";    
        }
    }
    echo "</ul>";    
}
showDir(".");
