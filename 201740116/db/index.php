<?php
echo "대림대학교";

$dbinfo = include "../dbinfo.php";  // 암호 보안 기법 

// 객체 생성
$db0 = new mysqli(
    $dbinfo['master']['dbhost'],  // mysql 서버 주소
    $dbinfo['master']['dbuser'],  // 사용자 아이디
    $dbinfo['master']['dbpass'],  // 사용자 비밀번호
    $dbinfo['master']['dbschema']  // 스키마
);

if($db0) {
    echo "DB 접속 성공"."<br>"; 
    $query = "SELECT * FROM phpdaelim4.members;";  // SQL QUERY문
    $result = mysqli_query($db0, $query);  //DB서버로 전송
    if($result){
        // echo "<pre>";
        // print_r($rows);
        $rows = getRowData($result);
        viewTable($rows);
    }
} else {
    echo "DB 접속 실패"."<br>";
}

function getRowData($result) {
    $cnt = mysqli_num_rows($result);
    echo "데이터의 갯수는 = ".$cnt."<br>";

    $rows = [];  // 배열을 초기화
        for($i = 0; $i < $cnt; $i++) {
            // 여러 개의 데이터가 들어가 있는 2차원 배열
            $rows [] = mysqli_fetch_object($result);
        }
        // 2차원 배열 반환
        return $rows;
}

function viewTable($rows) {
    echo "<table border=1px>";
    // 반복문
    for($i = 0; $i < count($rows); $i++) {
        echo "<tr>";

        foreach($rows[$i] as $value) {
            echo "<td>".$value."</td>";
        }



        echo "</tr>";
    }
    echo "</table>";
}