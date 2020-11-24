<?php
include "theme.conf.php";
include "../dbinfo.php"; // DB접속 정보

// DB접속 
$db0 = new mysqli(
    $dbinfo['master']['dbhost'],
    $dbinfo['master']['dbuser'],           
    $dbinfo['master']['dbpass'],
    $dbinfo['master']['dbschema']
);
if ($db0) {
    //echo "DB 접속 성공"."<br>";
    //쿼리 스키마.테이블
    $tablename = "instagram";
    $query = "SELECT * FROM phpdaelim5." . $tablename . ";";// SQL 쿼리문

    $result = mysqli_query($db0, $query); // DB서버로 전송
   
    if ($result) {
    $rows=getRowData($result);
       //viewTable($rows);
    } else {
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
     //데이터 갯수
     $cnt = mysqli_num_rows($result);

     //echo "데이터 갯수는 =".$cnt."<br>";
     $rows = [];

      for($i=0; $i<$cnt; $i++){
         $rows []= mysqli_fetch_object($result);
         //print_r($row);
         }
        echo "<pre>";
     //   print_r($rows);
        return $rows;
}


// 2차원 배열 => 테이블로 출력
//프로그래밍, html코드를 생성...
 function viewTable($rows){
     $str = ""; //초기화
     // 부트스트랩 클래스 이름 추가
    $str = "<table class=\"table table-striped\">"; // 이스케이프 삽입
    //index 배열의 갯수를 확인해서 반복함

    $str .= "<tr><td>번호</td><td>이름</td><td>학번</td><td>성별</td><td>성별</td></tr>";
 //$str .= "<tr><td>번호</td><td>이름</td><td>학번</td><td>성별</td><td>성별</td></tr>";
 $str .= "<tr>";
 foreach ($rows[0] as $field => $value) {
     $str .= "<td>".$field."</td>";
 }
 $str .= "</tr>";


for($i=0;$i<count($rows);$i++){
   $str .= "<tr>"; //열출력

//각각의 index 배열을 선택
//안에있는 연상배열을 반복하는 루프 반복문
    foreach($rows[$i] as $field => $value) {

       // $str .= "<td>".$value."</td>";//행출력
       if($field == "title") {
        // 수정링크
        // GET 방식 id값을 전달, queryString 전달
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
