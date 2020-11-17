<?php

echo "대림대";

$dbinfo = include "../dbinfo.php";
//객체 생성
$db0 = new mysqli(
        $dbinfo['master']['dbhost'],
        $dbinfo['master']['dbuser'],
        $dbinfo['master']['dbpass'],
        $dbinfo['master']['dbschema']
);

if($db0) {
    echo " DB 접속 성공 ";
    $query = "SELECT * FROM phpdaelim3.members;"; //sql 쿼리 문자
    $result = mysqli_query($db0,  $query);
    if ($result) {
            $rows = getRowData($result);
            viewTable($rows);
    }

} else {
    echo " DB 접속 실패";
}

function getRowData($result){
    
    $cnt = mysqli_num_rows($result);
    echo "데이터의 개수는 = ".$cnt."<br>";

    
    $rows = [];//배열 초기화

    for($i=0;$i<$cnt;$i++){ 
        $rows [] = mysqli_fetch_object($result);
        //2차원 배열 생성
    }

    return $rows;
}

function viewTable($rows){
    
    echo "<table border=1>";
    for( $i=0; $i<count($rows); $i++)
    {
    echo "<tr>";
    foreach($rows[$i] as $value){
        echo "<td>".$value. "</td>";     
     }
    echo "</tr>";
}  
echo "</table>";
}