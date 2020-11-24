<?php

echo "대림대학교";

$dbinfo = include "../dbinfo.php";

$db = new mysqli(
    $dbinfo['master']['dbhost'],//서버주소
    $dbinfo['master']['dbuser'], //사용자아이디
    $dbinfo['master']['dbpass'], //패스워드
    $dbinfo['master']['dbschema'] //스키마
);

if ($db) {
    echo "DB 접속 성공", "<br>";
    $query = "select * from phpdaelim4.instargram;";
    $result = mysqli_query($db, $query);
    if ($result) {
        $rows = getRowData($result);
        viewTable($rows);
    
    }
    echo "<a href='new.php'>New</a>";
} else {
    echo "DB 접속 실패";
}
function getRowData($result){

    $cnt = mysqli_num_rows($result);
    echo "데이터의 갯수는 =".$cnt."<br>";

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

        $row = mysqli_fetch_object($result);
        //print_r($row);
            foreach($rows[$i] as $value){
                echo "<td>".$value."</td>";
            }
        //echo "<td>".$row->username."</td>";
        //echo "<td>".$row->usernum."</td>";

        echo "<tr>";
    }
    echo "</table>";
}