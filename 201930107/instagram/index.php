<?php
include "theme.conf.php";
include "../dbInfo.php"; // db 접속 정보

// db 접속
$db0 = new mysqli(
    $dbInfo['master']['dbHost'], 
    $dbInfo['master']['dbUser'], 
    $dbInfo['master']['dbPass'], 
    $dbInfo['master']['dbSchema'], 
    $dbInfo['master']['dbPort']
);

if($db0) {
    // echo "DB 접속 성공.<br>";
    $tablename = "instagram";
    $query = "select * from phpdaelim5.$tablename order by id desc limit 10;"; // SQL 쿼리문
    
    // 쿼리 정보 전송,
    // 결과값
    $result = mysqli_query($db0, $query); // DB서버로 전송
    
    if($result) {
        $rows = getRowData($result); // 데이터 읽어오기
        
    } else {
        echo "<script>alert('데이터 읽기 실패');</script>";
    }

    $layout = file_get_contents($theme['layout']);
    $contents = file_get_contents($theme['list']);

    $contents = str_replace("{{dataTable}}", viewTable($rows), $contents);

    $layout = str_replace("{{contents}}", $contents, $layout);

    echo $layout;
} else {
    echo "접속 실패";
}

function getRowData($result) {
    // 데이터 갯수
    $cnt = mysqli_num_rows($result);
    // echo "데이터의 갯수는 = $cnt<br><br>";

    $rows = [];
    for ($i=0; $i < $cnt; $i++) {
        $rows []= mysqli_fetch_object($result);
    }

    return $rows;
}

// 2차원 배열 => 테이블로 출력
function viewTable($rows) {
    $str = "";
    $str .= "<table class=\"table table-striped table-hover\">";

    $str .= "<tr class=\"thead-dark\">";
    foreach ($rows[0] as $field => $value) {
        $str .= "<th scope=\"col\">$field</th>";
    }
    $str .= "</tr>";

    // index 배열 갯수 확인 -> 반복
    for ($i=0; $i < count($rows); $i++) { 
        $str .= "<tr>";

        // 각각의 index배열 선택
        // 안에 있는 연상배열 반복
        foreach ($rows[$i] as $field => $value) {
            if ($field == "title") {
                $str .= "<td><a href='edit.php?id=".$rows[$i]->id."'>$value</a></td>";
            } else {
                $str .= "<td>$value</td>";
            }
        }
        $str .= "</tr>";
    }

    $str .= "</table>";

    return $str;
}
