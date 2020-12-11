<?php

echo "대림대학교"."<br>";

$dbinfo = include "../dbinfo.php";

$db = new mysqli(
    $dbinfo['master']['dbhost'],
    $dbinfo['master']['dbuser'],
    $dbinfo['master']['dbpass'],
    $dbinfo['master']['dbschema'],
);

if ($db) {
    echo "DB 접속 성공"."<br>";
    $query = "SELECT * FROM phpdaelim4.members;"; // SQL 쿼리문
    $result = mysqli_query($db, $query); // DB서버로 전송
    if ($result) {

        $rows = getRowData($result);
        viewTable($rows);
    } else {
    echo "접속 실패";
    }
}

function getRowData($result) {
    // 데이터 개수
    $cnt = mysqli_num_rows($result);
    echo "데이터의 개수는 = ".$cnt."<br>";

    $rows = []; // 배열을 초기화
        for( $i=0; $i<$cnt; $i++) {
            // 여러개의 데이터가 들어가있는 2차원 배열
            $rows [] = mysqli_fetch_object($result);
        }
        return $rows;
}

function viewTable($rows) {
    echo "<table border=1>";

        for ($i=0; $i<count($rows); $i++) {
            echo "<tr>";
            foreach($rows[$i] as $value) {
                echo "<td>".$value."</td>";    
            }
            echo "</tr>";
        }
        echo "</table>";
}
