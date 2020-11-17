<?php
include "theme.conf.php";
include "../dbinfo.php";  // DB접속 정보

// DB접속
$db0 = new mysqli($dbinfo['master']['dbhost'],
                 $dbinfo['master']['dbuser'],
                 $dbinfo['master']['dbpass'],
                 $dbinfo['master']['dbschema'],
                 $dbinfo['master']['dbport']
);

if ($db0) {
    // echo "DB 접속 성공"."<br />";

    $tablename = "instagram";
    $query = "SELECT * FROM phpdaelim5." . $tablename . ";";

    $result = mysqli_query($db0, $query);
    if ($result) {
        $rows = getRowDAta($result);
        // viewTable($rows);

    } else {
        // echo "데이터 읽기 실패";
    }

    $layout = file_get_contents($theme['layout']);
    $contents = file_get_contents($theme['list']);
    $contents = str_replace("{{datatable}}", viewTable($rows), $contents);

    $layout = str_replace("{{contents}}", $contents, $layout);

    echo $layout;

    // echo "<a href='add.php'>추가</a>";
    // echo "<a href='new.php'>New</a>";
} else {
    echo "접속 실패";
}

function getRowData($result){
    $cnt = mysqli_num_rows($result);
    // echo "데이터의 개수는 = ".$cnt."<br />";
    
    $rows=[];

    for($i=0; $i<$cnt; $i++) {
        $rows [] = mysqli_fetch_object($result);
        
    }

    // echo "<pre>";
    // print_r($rows);
    return $rows;

}

// 프로그래밍, html코드를 생성
function viewTable($rows){
    // 부트스트랩 클래스 이름 추가
    $str = "";

    $str = "<table class=\"table table-striped\">";  // 이스케이프 삽입

    //$str .= "<tr><td>번호</td><td>이름</td><td>학번</td><td>성별</td><td>etc</td><td>picture</td><td>bbb</td></tr>";
    $str .= "<tr>";
    foreach($rows[0] as $field => $value) {
        $str .= "<td>".$field."</td>";
    }
    $str .= "</tr>";

    for($i=0; $i<count($rows); $i++){
        $str .= "<tr>";

        foreach($rows[$i] as $field => $value){
            // 행 출력
            if ($field == "title") {
                // 수정링크
                // GET 방식 id값을 전달, queryString 전달
                $str .=  "<td>"."<a href='edit.php?id=".$rows[$i]->id."'>".$value."</a>/"."</td>";
            } else {
                $str .=  "<td>".$value."</td>";
            }
        }

        $str .=  "</tr>";
    }
    
    $str .=  "</table>";
    return $str;
}