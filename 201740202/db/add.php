<?php
// 객체를 생성 
// () <== 값을 전달해 주는 역할
// 객체를 생성을 하는데...(개체를 만드는 과정중,..)
// 인자값을 전달...

include "../dbinfo.php";

$db0 = new mysqli(
    $dbinfo['master']['dbhost'],
    $dbinfo['master']['dbuser'],           
    $dbinfo['master']['dbpass'],
    $dbinfo['master']['dbschema']
);
if ($db0) {
     echo "DB 접속 성공"."<br>";

    // //쿼리 스키마.테이블
     $tablename = "instagram";

    // $query = "SELECT * FROM phpdaelim5." . $tablename . ";";// SQL 쿼리문

    // $result = mysqli_query($db0, $query); // DB서버로 전송
   
    // if ($result) {
    // $rows=getRowData($result);
    //    viewTable($rows);


 
         

    // } else {
    //     echo "데이터 읽기 실패";
    // }

$title = $_GET['title'];
$query = "INSERT INTO phpdaelim5.". $tablename . " (`title`) VALUES ('".$title."');";
echo $query;
  $result = mysqli_query($db0, $query); // DB서버로 전송

   $url = "insta.php";
// header("HTTP/1.1 301 Moved Permanently");
header("location:".$url);



} else {
    echo "접속 실패";
}
function getRowData($result) {
     //데이터 갯수
     $cnt = mysqli_num_rows($result);

     echo "데이터 갯수는 =".$cnt."<br>";
     $rows = [];

      for($i=0; $i<$cnt; $i++){
         $rows []= mysqli_fetch_object($result);
         //print_r($row);
         }
        echo "<pre>";
        print_r($rows);
        return $rows;
}



 function viewTable($rows){
    echo "<table border=1>";
    //index 배열의 갯수를 확인해서 반복함
for($i=0;$i<count($rows);$i++){
    echo "<tr>"; //열출력

//각각의 index 배열을 선택
//안에있는 연상배열을 반복하는 루프 반복문
    foreach($rows[$i] as $value) {

        echo "<td>".$value."</td>";//행출력
    }
    echo "</tr>";
}
  
    

    echo "</table>";
 }