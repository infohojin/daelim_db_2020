<?php

echo "대림대학교";

$dbinfo =  include "../dbinfo.php";
// 객체 생성
$db = new mysqli(
    $dbinfo['master']['dbhost'], // mysql 서버주소
    $dbinfo['master']['dbuser'], // 사용자아이디
    $dbinfo['master']['dbpass'], // 패스워드
    $dbinfo['master']['dbschema'] // 스키마
);

if ($db) {
    echo "DB 접속 성공"."<br>";
    $query = "SELECT * FROM phpdaelim4.members;";
    $result = mysqli_query($db,$query);
    if($result){
        $rows = getRowData($result);
        viewTable($rows);
    }
} else {
    echo "접속실패";
}

function viewTable($rows){
    echo "<table border=1>";

    for($i=0;$i<count($rows);$i++)
        {
            echo "<TR>";

            foreach($rows[$i] as $value){
                echo "<TD>".$value."</TD>";
            }

            //echo "<TD>".$row->username."</TD>";
            //echo "<TD>".$row->usernum."</TD>";
            echo "</tr>";
        }
    echo "</TABLE>";
}

function getRowData($result){
    $cnt = mysqli_num_rows($result);
    echo "데이터의 갯수는 = " .$cnt. "<BR>";
    $rows = [];
    for($i=0;$i<$cnt;$i++){
        $rows []= mysqli_fetch_object($result);
    }
    return $rows;
} 