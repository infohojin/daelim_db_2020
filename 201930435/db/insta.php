<?php

echo "대림대학교 ";

$dbinfo = include "../dbinfo.php";

$db0 = new mysqli(
    $dbinfo['master']['dbhost'], // mysql 서버 주소
    $dbinfo['master']['dbuser'], // 사용자 아이디
    $dbinfo['master']['dbpass'], // 패스워드
    $dbinfo['master']['dbschema'] // 스키마
);

if($db0){
    echo "DB 접속 성공"."<br>";
    $query = "select * from phpdaelim4.instagram;"; // SQL 쿼리문
    $result = mysqli_query($db0, $query); // DB서버로 전송
    if($result){          
        $rows = getRowData($result);                  
        viewTable($rows);
    }

    echo "<a href='new.php'>New</a>";
} else{
    echo "접속 실패";
}

function getRowData($result){
    // 데이터 갯수    
    $cnt = mysqli_num_rows($result);
    echo "데이터의 갯수는 = ".$cnt."<br>";

    $rows = [];
    // 반복문
    for($i=0; $i<$cnt; $i++)
    {       
        // 여러개의 데이터가 들어가 있는 2차원 배열
        $rows [] = mysqli_fetch_object($result);
    } 
    return $rows;
}

function viewTable($rows){
    echo "<table border=1>";

    for($i=0; $i<count($rows); $i++)
    {
        echo "<tr>";
        foreach($rows[$i] as $value)
        {
            echo "<td>".$value."</td>";
        }       
        echo "</tr>";
    }
    echo "</table>";
}