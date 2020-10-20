<?php
// 객체를 생성
// () <== 값을 전달해주는 역할
// 객체를 생성 하는데... (객체를 만드는 과정중...)
// 인자값을 전달...

$db = new mysql("localhost","daelim5","123456","phpdaelim5");
if ($db) {
    echo "DB 접속 성공";

    $query = "select * from members"; // SQL 쿼리문
    $result = mysqli_query($db, $query); // DB 서버로 전송
    if ($result) {
        $row = mysqli_fetch_object($result);
        print_r($row);
    } else {
        echo "데이터 읽기 실패";
    }

} else {
    echo "접속 실패";
}