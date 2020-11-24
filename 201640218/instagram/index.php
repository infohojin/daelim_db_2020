<?php

// echo "대림대학교";
include "theme.conf.php";
$dbinfo = include "../dbinfo.php";
include "desc.php";

// 객체 생성
$db = new mysqli(
    $dbinfo['master']['dbhost'], // mysql 서버주소
    $dbinfo['master']['dbuser'], // 사용자아이디
    $dbinfo['master']['dbpass'], // 패스워드
    $dbinfo['master']['dbschema'] // 스키마
);

if ($db) {
    // echo "DB 접속 성공"."<br>";
    $query = "SELECT * FROM phpdaelim4.".$tablename.";"; // SQL 쿼리문
    $result = mysqli_query($db, $query); // DB서버로 전송
    if ($result) {
        $rows = getRowData($result);
        
    }
    //echo "<a href='new.php'>NEW</a>";
    
    $layout = file_get_contents($theme['layout']); // 파일을 읽고 변수에 넣음 \
    
        $contents = file_get_contents($theme['list']);
        $contents = str_replace("{{datatable}}", viewTable($rows), $contents);

    $layout = str_replace("{{contents}}", $contents, $layout); 
    echo $layout; // 출력 
    
} else {
    echo "접속실패";
}

function getRowData($result) {
    // 데이터 갯수
    $cnt = mysqli_num_rows($result);
    // echo "데이터의 갯수는 = ".$cnt."<br>";

    $rows = []; // 배열을 초기화
    for( $i=0; $i<$cnt; $i++) {
        // 여러개의 데이터가 들어가 있는 2차원 배열
        $rows []= mysqli_fetch_object($result);
    }
    // 2차원 배열 반환
    return $rows;
}

function viewTable($rows) {
    global $db,$tablename;

    $str = "<table class=\"table table-striped\">"; // 변수 초기화
    $fields = desc($db, $tablename);
    $str .= "<tr>";
    foreach($fields as $name) {
        $str .= "<td>".$name."</td>";
    }
    $str .= "</tr>";

    // 반복문
    for( $i=0; $i<count($rows); $i++)
    {
        $str .= "<tr>";

        foreach ($rows[$i] as $field => $value) {
            if($field == "title") {
                $str .= "<td>"."<a href='edit.php?id=".$rows[$i]->id."'>".$value."</a>"."</td>";
            } else {
                $str .= "<td>".$value."</td>";
            }
        }
        $str .= "</tr>";
    }
    $str .= "</table>";
    return $str;
}