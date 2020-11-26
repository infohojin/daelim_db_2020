<?php
include "theme.conf.php";
include "../dbinfo.php"; // DB 접속 정보

// DB 접속
$db0 = new mysqli(
    $dbinfo['master']['dbHost'],
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

    $contents = file_get_contents($theme['list']);
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


// 2차원 배열 => 테이블로 출력
// 프로그램밍, html코드를 생성....
function viewTable($rows) {
    $str = ""; //초기화

    // 부트스트랩 클래스 이름추가
    $str = "<table class=\"table table-striped\">"; // 이스케이프 삽입
    // index 배열의 갯수를 확인해서 반복함

    //$str .= "<tr><td>번호</td><td>이름</td><td>학번</td><td>성별</td><td>성별</td></tr>";
    $str .= "<tr>";
    foreach ($rows[0] as $field => $value) {
        $str .= "<td>".$field."</td>";
    }
    $str .= "</tr>";

    for($i=0;$i<count($rows);$i++) {
        // 열을 출력하겠다.
        $str .= "<tr>";

        // 각각의 index 배열을 선택
        // 안에 있는 연상배열을 반복 루프 반복문.
        foreach($rows[$i] as $field => $value) {
            // 행 출력
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

