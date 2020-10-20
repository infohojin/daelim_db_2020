<?php

// 객체 생성 
// () <== 값 전달
// 객체 생성 과정
// 인자값 전달
$db = new mysqli("localhost", "daelim5", "123456", "phpdaelim5");

if($db->connect_error) {
    echo "DB 접속 성공";
    $query = "select * from memebers"; // SQL 쿼리문
    $result = mysqli_query($query); // DB서버로 전송
    if($result) {
        $row = mysqli_fetch_object($result);
        print_r($row);
    } else {
        echo "데이터 읽기 실패";
    }
} else {
    echo "접속 실패";
}