<?php
include "../dbinfo.php";

$db0 = new mysqli(
    $dbinfo['master']['dbhost'], 
    $dbinfo['master']['dbuser'],
    $dbinfo['master']['dbpass'], 
    $dbinfo['master']['dbschema'] 
);


if($db0) {
    echo "DB 접속 성공"."<br>";
    $tablename = "instagram";
    /*
    $query = "select * from ".$tablename.";"; // SQL 쿼리문
    //쿼리 정보를 전송해서,
    // 결과값.
    $result = mysqli_query($db0, $query); // DB 서버로 전송
    
    
    if ($result) {
        $rows = getRowData($result); // 데이터 읽어오기
        viewTable($rows); // 테이블로 출력하기
    } else {
        echo "데이터 읽기 실패";
    }
    */
    $title = $_GET['title'];
    $url = "insta.php";
    $query = "INSERT INTO ".$tablename."(title) values('".$title."');";
    echo $query;
    $result = mysqli_query($db0, $query);
    //header("HTTP/1.1 301 Moved Paramently");
    header("location:".$url);
} else {
    echo "DB 접속 실패";
}

function getRowData($result) {
    $cnt = mysqli_num_rows($result);
    echo "데이터의 갯수는 = ".$cnt."<br>";

    $rows = []; 
    for($i=0; $i<$cnt; $i++) {
        $rows [] = mysqli_fetch_object($result);
    }
    echo "<pre>";
    print_r($rows);
    return $rows;
}

function viewTable($rows) {
    echo "<table border=1>";
    for($i=0; $i<count($rows); $i++){
        echo "<tr>";
        foreach($rows[$i] as $value) {
            echo "<td>".$value."</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}