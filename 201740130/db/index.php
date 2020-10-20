<?php
// 객체를 생성
// () <== 값을 전달해 주는 역할
// 객체를 생성 하는 과정中
// 인자값을 전달
$db = new mysqli("localhost","daelim5","0000","phpdaelim5");
if($db) {
    echo "DB 접속 성공"."<br>";
    $query = "select * from members"; // SQL 쿼리문
    $result = mysqli_query($db, $query); // DB 서버로 전송
    if ($result) {
        $row = mysqli_fetch_object($result);
        print_r($row);
    } else {
        echo "데이터 읽기 실패";
    }
} else {
    echo "DB 접속 실패";
}