<?php
// 객체를 생성
// () <== 값을 전달해 주는 역할
// 객체를 생성을 하는데...(개체를 만드는 과정중..)
// 인자값을 전달..
$dbhost = "localhost";
$dbuser = "daelim5";
$dbpass = "123456";
$dbschema = "phpdaelim5";
$dbport = "3306";
$db = new mysqli($dbhost,$dbuser,$dbpass,$dbschema,$dbport);
if($db) {
    echo "DB 접속 성공"."<br>";
    $query = "select * from phpdaelim5.members"; // sql 쿼리문
    $result = mysqli_query($db, $query); // db서버로 전송
    if($result) {
        $row = mysqli_fetch_object($result);
        print_r($row);
    }
 else {

    echo "데이터 읽기 실패";
}

} else{
    echo "접속 실패";
}