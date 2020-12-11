<?php
//파일을 읽어온다.
include "theme.conf.php";
include "../dbinfo.php"; // db 접속 정보

//# db 접속
$db0 = new mysqli(
    $dbinfo['master']['dbhost'],
    $dbinfo['master']['dbuser'],
    $dbinfo['master']['dbpass'],
    $dbinfo['master']['dbschema'],
    $dbinfo['master']['dbport']
);

if($db0) {
    //echo "<br>"."DB 접속 성공"."<br>";


    // 쿼리 스키마.테이블
    $tablename = "instagram";
    $query = "select * from phpdaelim5.".$tablename.";"; // sql 쿼리문

    // 쿼리 정보를 전송해서, 결과값
    $result = mysqli_query($db0, $query); // db서버로 전송

    if($result) {
        $rows = getRowData($result); //데이터 읽어오기
        //viewTable($rows); // 테이블로 출력하기
    } else {
        //echo "데이터 읽기 실패";
    }
   // echo "<a href='add.php'>추가</a>"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;";
   // echo "<a href='new.php'>New</a>";
    $layout = file_get_contents($theme['layout']);

    $contents = file_get_contents($theme['list']);
    $contents = str_replace("{{datatable}}", viewTable($rows), $contents);

    $layout = str_replace("{{contents}}",$contents,$layout);

    echo $layout;

} else{
    echo "접속 실패";
}

function getRowData($result){
     //데이터 갯수
     $cnt = mysqli_num_rows($result);
    // echo "데이터의 갯수는 = ".$cnt."<br>";
     
     $rows = []; //배열변수 초기화
     for($i=0; $i<$cnt; $i++){
         $rows []= mysqli_fetch_object($result);
         
     }
    // echo "<pre>";
     //print_r($rows);
     return $rows;
}

// 2차원 배열 => 테이블로 출력
// 프로그래밍, html코드를 생성
function viewTable($rows){

    $str = ""; //초기화

    //부트스트랩 클래스 이름 추가
    $str = "<table class=\"table table-striped\">"; // 이스케이프 삽입(따옴표 안에 문자열)
    //count -> 배열의 갯수를 찾는다 
    // index 배열의 갯수를 확인해서 반복함

    $str .= "<tr><td>번호</td><td>이름</td><td>학번</td><td>성별</td><td>성별</td></tr>";

    for($i=0;$i<count($rows);$i++){
        //열을 출력하겠다.
        $str .= "<tr>";

        //각각의 index 배열을 선택
        //안에 있는 연상배열을 반복 루프 하는 반복문 
        foreach($rows[$i] as $value){
            //행 출력
            $str .= "<td>".$value."</td>";
        }

        $str .= "</tr>";
    }

    $str .= "</table>";
    return $str;
}


