<?php
/*
echo "테이블 구조를 확인합니다.<br>";

include "theme.conf.php";
include "../dbinfo.php"; //db접속 정보

$db0 = new mysqli(
  $dbinfo['master']['dbhost'],
  $dbinfo['master']['dbuser'],
  $dbinfo['master']['dbpass'],
  $dbinfo['master']['dbschema'],
  $dbinfo['master']['dbport']
);

if ($db0) {
  echo __LINE__.": DB 접속 성공, 명령 실행 준비 단계<br>";

  //쿼리 스키마.테이블
  $tablename = "instagram";
  $tableinfo = desc($db0, $tablename);
  print_r($tableinfo);
  foreach($tableinfo as $fieldname){
    //html input 태그 생성
    echo $fieldname;
    echo "<input type=text name='".$fieldname."' >";
    echo "<br>";
  }
   
} else {
  echo  __LINE__.": 접속 실패";
}
*/

function desc($db0, $tablename){
  //global $db0;
  //함수 내 $db0 <= 지역변수
  $query = "desc phpdaelim5.".$tablename.";"; // SQL 쿼리문
  //echo  __LINE__.$query."<br>";
  $result = mysqli_query($db0, $query);

  if($result){
    //echo  __LINE__.": SQL 명령 실행 성공, 결과값이 있어요.<br>";
    $fields = []; //배열 초기화
    while($row = mysqli_fetch_object($result)){
      //print_r($row);
      //echo "필드명: ".$row->Field."<br>";
      $fields []= $row->Field;
    }
  } else{
    //echo  __LINE__.": SQL 실행 오류<br>";
  }
  return $fields;
}

