<?php
/*
echo __LINE__."테이블 구졸를 확인합니다.<br>";

include "theme.conf.php";
include "../dbinfo.php";

$db0 = new mysqli(  //전역변수
    $dbinfo['master']['dbhost'],
    $dbinfo['master']['dbuser'],           
    $dbinfo['master']['dbpass'],
    $dbinfo['master']['dbschema']
);

if ($db0) {
   echo __LINE__."DB 접속 성공  명령 실행 준비단계<br>";
   $tablename = "instagram";
  $tableinfo = desc($db0,$tablename);
  print_r($tableinfo);
  foreach($tableinfo as $fieldname){
      echo $fieldname;
      echo "<input type=text name='".$fieldname."' >";
      echo "<br>";

  }
} else {
    echo __LINE__."접속 실패";
}*/
function desc($db,$tablename){
    //global $db0; //<<전역변수
    $query = "DESC phpdaelim5." . $tablename . ";";// SQL 쿼리문
   // echo $query."<br>";
    $result = mysqli_query($db, $query);
     //함수내 db0는 지역변수
    if ($result) {
       // echo __LINE__."sql 명령 실행성공, 결과값이 있어요<br>";
        while($row = mysqli_fetch_object($result)){
         //print_r($row);    
      //   echo "필드명:".$row->Field."<br>";
         $fields []= $row->Field;
        }
        
    }else {
       // echo __LINE__."sql 명령실행 오류<br>";
    }
    return $fields;
}