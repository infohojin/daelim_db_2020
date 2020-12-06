<?php
include "themeconf.php";
include "../dbinfo.php";    // DB 접속 정보

// DB접속
$db0 = new mysqli(
    $dbinfo['master']['dbhost'],
    $dbinfo['master']['dbuser'],
    $dbinfo['master']['dbpass'],
    $dbinfo['master']['dbschema'],
    $dbinfo['master']['dbport']
);

if($db0) {
    //echo "DB 접속 성공"."<br>";

    // 쿼리 스키마.테이블
    $tablename = "instagram";
    $query = "SELECT * FROM phpdaelim5." . $tablename . ";";   // SQL 쿼리문

    // 쿼리 정보를 전송해서 결과값을 받는 것
    $result = mysqli_query($db0, $query);     // DB서버로 전송

    
    if($result){
        $rows = getRowData($result);    // 데이터 읽어오기
        //viewTable($rows);   // 읽어온 데이터 테이블 출력하기       
    }
    else {
        //echo "데이터 읽기 실패";
    }
    //echo "<a href='add.php'>추가</a>";
    //echo "<a href='new.php'>new</a>";
    
    $layout = file_get_contents($theme['layout']);

    $contents = file_get_contents($theme['list']);
    $contents = str_replace("{{datatable}}", viewTable($rows), $contents);

    $layout = str_replace("{{contents}}", $contents, $layout);

    echo $layout;
} else {
    echo "접속 실패";
}

function getRowData($result) {
    // 받아온 데이터 갯수 값을 확인
    $cnt = mysqli_num_rows($result);
    //echo "데이터의 갯수는 = ".$cnt."<br>";
    
    $rows = []; // 배열 변수 초기화

    for($i=0; $i<$cnt; $i++){
        $rows [] = mysqli_fetch_object($result);     // 대괄호 넣으면 값을 하나하나 스택처럼 쌓을 수 있음
    }
    //echo "<pre>";
    //print_r($rows);
    return $rows;
}

// 생성한 2차원 배열을 테이블로 출력하는 역할
function viewTable($rows) {
    $str="";
    // 부트스트랩 클래스 이름 추가
    $str = "<table class=\"table table-striped\">";   // 이스케이프 삽입


    // $str .= "<tr><td>번호</td><td>이름</td><td>학번</td><td>성별</td></tr>";

    $str.= "<tr>";
    foreach($rows[0] as $field=> $value) {
        $str .= "<td>".$field."</td>";
    }
    $str .= "</tr>";
    
    // 인덱스 배열의 갯수를 확인해서 반복함
    for($i=0; $i<count($rows); $i++){
        // 열을 출력하겠다.
        $str .= "<tr>";
        // 각각의 index 배열을 선택해서 그 안에 있는 연상배열 전부 루프하는 반복문
        foreach($rows[$i] as $field=>$value) {  // 컬럼 정보 자동 출력
            // 행을 출력
            if($field == "title") {
                // 수정링크
                // get 방식으로 id값을 전달, querystring 전달
                $str .= "<td>"."<a href='edit.php?id=".$rows[$i]->id."'>".$value."</a>"."</td>";
            } else {
                $str .= "<td>".$value."</td>";

            }
        }
        $str .= "</tr>";
    }
    
    // echo "<td>".$row->id."</td>";
    // echo "<td>".$row->username."</td>";
    // echo "<td>".$row->usernum."</td>";
    

    $str .= "</table>";
    return $str;
}
