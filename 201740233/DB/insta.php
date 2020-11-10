<?php

$dbinfo = include "../dbData/dbinfo.php";

$db0 = new mysqli(
    $dbinfo['master']['dbhost'], 
    $dbinfo['master']['dbuser'], 
    $dbinfo['master']['dbpass'], 
    $dbinfo['master']['dbschema']
);

if ($db0) {
    echo "DB 접속 성공"."<br>";
    $query = "select * from instagram;"; 
    $result = mysqli_query($db0, $query);
    if ($result) {
        $rows = getRowData($result);
        viewTable($rows); 
    }

    echo "<a href='add.php'>추가</a>";
    echo "<a href='new.php'>NEW</a>";
} else {
    echo "접속실패";
}

function getRowData($result) {
    $cnt = mysqli_num_rows($result);
    echo "데이터의 갯수는 = ".$cnt."<br>";

    $rows = []; 
    for( $i=0; $i<$cnt; $i++) {
        $rows []= mysqli_fetch_object($result);
    }
    return $rows;
}

function viewTable($rows) {
    echo "<table border=1>";
    for( $i=0; $i<count($rows); $i++)
    {
        echo "<tr>";
        foreach ($rows[$i] as $value) {
            echo "<td>".$value."</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}