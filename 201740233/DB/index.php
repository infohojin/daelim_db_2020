<?php

// 객체 생성
$db = new mysqli("localhost","root", "911059","phpdaelim5");

if ($db) {
    echo "DB 접속 성공"."<br>";

    $query = "select * from members";
    $result = mysqli_query($db, $query);
    if ($result) {
        $row = mysqli_fetch_object($result);
        print_r($row);
    } 
} else {
    echo "접속실패";
}