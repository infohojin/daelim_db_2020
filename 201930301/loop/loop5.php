<?php
$d = scandir("./"); //현재 디렉토리있는 파일 목록

//배열로 반환
//print_r($d);
foreach($d as $v){
    if($v == "."|| $v == "..") continue;
    echo $v;
    echo "<br>";
}