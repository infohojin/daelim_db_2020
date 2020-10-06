<?php
$d = scandir("./");//현재 디렉토리에 있는 파일목록
//배열로변환
// print_r($d);

foreach ($d as $v) {
    if($v == "."|| $v == "..") continue;
   // if($v == "..") continue;
   echo $v;
   echo "<br>";
}