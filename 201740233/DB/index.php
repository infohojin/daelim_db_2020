<?php
include "../dbData/dbinfo.php";
// $dbHost = "localhost";
// $dbUser = "root";
// $dbPass = "911059";
// $dbSchema = "phpdaelim5";
// $db = new mysqli($dbHost, $dbUser, $dbPass, $dbSchema);
$db = new mysqli(
    $dbInfo['master']['dbHost'],
    $dbInfo['master']['dbUser'],
    $dbInfo['master']['dbPass'],
    $dbInfo['master']['dbSchema']
);

if ($db) {
    echo "DB 접속 성공 <br>";

    $query = "select * from phpdaelim5.members";
    $result = mysqli_query($db, $query);

    if ($result) {
        $rows = getRowData($result);
        viewTable($rows);
    } else {
        echo "데이터 읽기 실패";
    }
    
} else {
    echo "접속 실패";
}

function getRowData($result) {
    $cnt = mysqli_num_rows($result); // 데이터 갯수
    echo "데이터의 갯수는 = ".$cnt."<br>";

    $rows = [];
    for ($i=0; $i < $cnt; $i++) {
        $rows [] = mysqli_fetch_object($result);
    }

    echo "<pre>";
    print_r($rows);
    
    return $rows;
}

function viewTable($rows) {
    echo "<table border=1'>";
    for ($i=0; $i<count($rows); $i++) {
        echo "<tr>";
        foreach ($rows[$i] as $value) {
            echo "<td>".$value."</td>";
        }
        echo "</tr>";
    }    
    echo "</table>";
}