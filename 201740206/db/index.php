<?php

// 객체를 생성
// () <== 값을 전달해 주는 역할
// 객체를 생성을 하는데...(객체를  만드는 과정중...)
// 인자값을 전달...
$db = new mysqli("localhost", "daelim5", "123456", "phpdaelim5");
if ($db) {
    echo "DB 접속 성공"."<br />";

    $query = "select * from phpdaelim5.members";
    $result = mysqli_query($db, $query);
    if ($result) {
        $row = mysqli_fetch_object($result);
        print_r($row);
    } else {
        echo "데이터 읽기 실패";
    }
} else {
    echo "접속 실패";
}