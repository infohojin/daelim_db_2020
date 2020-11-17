<?php

// 객체 생성 
// () <== 값 전달
// 객체 생성 과정
// 인자값 전달

// $dbHost = "localhost";
// $dbUser = "daelim5";
// $dbPass = "123456";
// $dbSchema = "phpdaelim5";
// $dbPort = "3306";

include "../dbInfo.php";

$db0 = new mysqli(
    $dbInfo['master']['dbHost'], 
    $dbInfo['master']['dbUser'], 
    $dbInfo['master']['dbPass'], 
    $dbInfo['master']['dbSchema'], 
    $dbInfo['master']['dbPort']
);

if($db0) {
    echo "DB 접속 성공.<br>";
    $tablename = "instagram";
    $query = "select * from phpdaelim5.$tablename;"; // SQL 쿼리문
    
    // 쿼리 정보 전송,
    // 결과값
    $result = mysqli_query($db0, $query); // DB서버로 전송

    
    if($result) {
        $rows = getRowData($result); // 데이터 읽어오기
        // echo "<h3>";
        // echo "<pre>";
        // print_r($rows);
        // echo "</pre>";
        // echo "</h3>";
        viewTable($rows); // 읽은 데이터 테이블로 출력
    } else {
        echo "데이터 읽기 실패";
    }

    $title = "대숙이";
    echo "<a href='add.php'>추가</a>  ";
    echo "<a href='new.php'>New</a>";
} else {
    echo "접속 실패";
}

function getRowData($result) {
    // 데이터 갯수
    $cnt = mysqli_num_rows($result);
    echo "데이터의 갯수는 = $cnt<br><br>";

    $rows = [];
    for ($i=0; $i < $cnt; $i++) {
        $rows []= mysqli_fetch_object($result);
    }

    return $rows;
}

// 2차원 배열 => 테이블로 출력
function viewTable($rows) {
    echo "<table border=1>";

    echo "<tr>";
    foreach ($rows[0] as $key => $value) {
        echo "<th>$key</th>";
    }
    echo "</tr>";

    // index 배열 갯수 확인 -> 반복
    for ($i=0; $i < count($rows); $i++) { 
        echo "<tr>";

        // 각각의 index배열 선택
        // 안에 있는 연상배열 반복
        foreach ($rows[$i] as $value) {
            echo "<td>$value</td>";
        }
        echo "</tr>";
    }

    echo "</table>";
}
