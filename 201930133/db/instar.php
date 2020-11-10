<?php
// 객체를 생성 
// () <== 값을 전달해 주는 역할
// 객체를 생성을 하는데...(개체를 만드는 과정중,..)
// 인자값을 전달...

include "../dbinfo.php";

$db0 = new mysqli(
    $dbinfo['master']['dbJost'],
    $dbinfo['master']['dbUser'],           
    $dbinfo['master']['dbPwd'],
    $dbinfo['master']['dbSchema']
);
if ($db0) {
    echo "<br>DB 접속 성공<br>";

    $tablename = "instargram";
    $query = "SELECT * FROM phpdaelim5.".$tablename.";"; 
    // 쿼리 정보전송 > 결과값
    $result = mysqli_query($db0, $query);
    if ($result) {
    $rows=getRowData($result);
       viewTable($rows);
    } else {
        echo "데이터 읽기 실패";
    }
    
    echo "<a href='add.php'>추가</a>";
    echo "<a href='new.php' style='font-size:22px; color:#111; font-weight:bold'>new</a>";


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
        // print_r($rows);
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

//INSERT INTO `phpdaelim5`.`instargram` (`title`) VALUES ('테스트입니다');