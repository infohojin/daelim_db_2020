<?php
include "./theme.conf.php";
$dbinfo = include "../dbData/dbinfo.php"; // DB접속정보

//DB접속 
$db0 = new mysqli(
    $dbinfo['master']['dbhost'],
    $dbinfo['master']['dbuser'],
    $dbinfo['master']['dbpass'],
    $dbinfo['master']['dbschema']
);

if ($db0) {
    // echo "DB 접속 성공"."<br>";
     
     //쿼리 스키마.테이블
     $query = "select * from instagram;"; // SQL 쿼리문
     
     //쿼리 정보를 전송해서,
     // 결과값.
     $result = mysqli_query($db0, $query); // DB서버로 전송
     if ($result) {
         $rows = getRowData($result); // 데이터 읽어오기
         //viewTable($rows); // 데이블로 출력하기
     } else {
         //echo "데이터 읽기 실패";
     }
    // echo "<a href='add.php'>추가</a>";
     //cho "<a href='new.php'> NEW</a>";
     $layout = file_get_contents($theme['layout']);
     
     $contents = file_get_contents($theme['list']);
     $contents = str_replace("{{datatable}}",viewTable($rows), $contents);
 
     $layout = str_replace("{{contents}}", $contents, $layout);
 
     echo $layout;
 
 
 } else {
     echo "접속 실패";
 }
 
 function getRowData($result) {
     // 데이터 갯수
     $cnt = mysqli_num_rows($result);
    // echo "데이터의 갯수는 = ".$cnt."<br>";
     
     $rows = []; // 배열변수 초기화
     for($i=0; $i<$cnt; $i++) {
         $rows []= mysqli_fetch_object($result);
     }
     //echo "<pre>";
     //print_r($rows);
     return $rows;
 }
 
 // 2차원 배열 => 테이블로 출력
 function viewTable($rows) {
     $str = "";
 
     $str = "<table class=\"table table-striped\">";
     // index 배열의 갯수를 확인해서 반복함
 
     $str .= "<tr><td>번호</td><td>이름</td><td>학번</td><td>성별</td><td>임시</td><td>사진</td></tr>";
 
     for($i=0;$i<count($rows);$i++) {
         // 열을 출력하겠다.
         $str .= "<tr>";
 
         // 각각의 index 배열을 선택
         // 안에 있는 연상배열을 반복 루프 반복문.
         foreach($rows[$i] as $value) {
             // 행 출력
             $str .= "<td>".$value."</td>";
         }
 
         $str .= "</tr>";
     }
     $str .= "</table>";
     return $str;
 }