<?php
include "theme.conf.php";
include "../dbinfo.php"; // DB 접속 정보

// DB 접속
$db0 = new mysqli(
    $dbinfo['master']['dbJost'],
    $dbinfo['master']['dbUser'],           
    $dbinfo['master']['dbPwd'],
    $dbinfo['master']['dbSchema']
);


$db0 = new mysqli(
    $dbinfo['master']['dbJost'],
    $dbinfo['master']['dbUser'],           
    $dbinfo['master']['dbPwd'],
    $dbinfo['master']['dbSchema']
);
if ($db0) {
    // echo "<br>DB 접속 성공<br>";

    $tablename = "instargram";
    $query = "SELECT * FROM phpdaelim5.".$tablename.";"; 
    $result = mysqli_query($db0, $query);
    if ($result) {
    $rows=getRowData($result);
    // 데이터 테이블 출력
    //    viewTable($rows);
    } else {
        // echo "데이터 읽기 실패";
    }
    
    // echo "<a href='add.php'>추가</a>";
    // echo "<a href='new.php' style='font-size:22px; color:#111; font-weight:bold'>new</a>";
    $layout=file_get_contents($theme['layout']);
    $contents = file_get_contents($theme['listPage']);
    $contents = str_replace("{{dataTable}}",viewTable($rows),$contents);

    // $layout의 {{contents}} 를 $listPage로 바꾼다
    $layout = str_replace("{{contents}}", $contents,$layout);

    echo $layout;


} else {
    echo "접속 실패";
}
function getRowData($result) {
     $cnt = mysqli_num_rows($result);

    //  echo "데이터 갯수는 =".$cnt."<br>";
     $rows = [];

      for($i=0; $i<$cnt; $i++){
         $rows []= mysqli_fetch_object($result);
         }
        // echo "<pre>";
        return $rows;
}


// 프로그래밍, html 코드를 생성해줌
 function viewTable($rows){
    $str ="";
    //  부트스트랩 클래스 이름 추가
    $str = "<table class=\"table table-striped\">";
    $str .= "<tr><td>번호</td><td>제목</td><td>날짜</td><td>성별</td><<td>설명1</td></tr>";
    for($i=0;$i<count($rows);$i++){
        $str .= "<tr>";
        foreach($rows[$i] as $value) {

            $str .= "<td>".$value."</td>";
        }
        $str .= "</tr>";
    }
    $str .= "</table>";
    return $str;
 } 
