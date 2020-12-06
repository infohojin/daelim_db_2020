<?php
// 객체를 생성
// () => 값을 전달해주는 역할
// 객체를 생성하는데... (개체를 만드는 과정중...)
// 인자값 전달
// 객체가 인자값을 받아서 초기화 해줌. 

/*
$host = "localhost";
$dbuser = "daelim5";
$dbpass = "Salamanda0329@";
$dbschema = "phpdaelim5";
$dbport = "3306";   // 포트를 달리 설정했다고 한다면 넣어줘야돼요.
*/

include "../dbinfo.php";

//$db = new mysqli($host, $dbuser, $dbpass, $dbschema);
$db0 = new mysqli(
    $dbinfo['master']['dbhost'],
    $dbinfo['master']['dbuser'],
    $dbinfo['master']['dbpass'],
    $dbinfo['master']['dbschema'],
    $dbinfo['master']['dbport']
);
if($db0) {
    echo "DB 접속 성공"."<br>";

    $query = "SELECT * FROM phpdaelim5.members";   // SQL 쿼리문

    // 쿼리 정보를 전송해서 결과값을 받는 것
    $result = mysqli_query($db0, $query);     // DB서버로 전송

    
    if($result){

        $rows = getRowData($result);    // 데이터 읽어오기

        viewTable($rows);   // 읽어온 데이터 테이블 출력하기
        
    }
    else {
        echo "데이터 읽기 실패";
    }

} else {
    echo "DB 접속 실패";
}

function getRowData($result) {

    // 받아온 데이터 갯수 값을 확인
    $cnt = mysqli_num_rows($result);
    echo "데이터의 갯수는 = ".$cnt."<br>";
    
    $rows = []; // 배열 변수 초기화

    for($i=0; $i<$cnt; $i++){
        $rows [] = mysqli_fetch_object($result);     // 대괄호 넣으면 값을 하나하나 스택처럼 쌓을 수 있음
    }
    echo "<pre>";
    print_r($rows);
    return $rows;
}

// 생성한 2차원 배열을 테이블로 출력하는 역할
function viewTable($rows) {
    echo "<table border=1>";

    // 인덱스 배열의 갯수를 확인해서 반복함
    for($i=0; $i<count($rows); $i++){
        // 열을 출력하겠다.
        echo "<tr>";
        // 각각의 index 배열을 선택해서 그 안에 있는 연상배열 전부 루프하는 반복문
        foreach($rows[$i] as $value) {
            // 행을 출력
            echo "<td>".$value."</td>";
        }
        echo "</tr>";
    }
    
    // echo "<td>".$row->id."</td>";
    // echo "<td>".$row->username."</td>";
    // echo "<td>".$row->usernum."</td>";
    

    echo "</table>";
}