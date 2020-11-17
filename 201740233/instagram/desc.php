<?php
/*
include "./theme.conf.php";
$dbinfo = include "../dbData/dbinfo.php"; // DB접속정보

//DB접속 
// 전역변수
$db0 = new mysqli(
    $dbinfo['master']['dbhost'],
    $dbinfo['master']['dbuser'],
    $dbinfo['master']['dbpass'],
    $dbinfo['master']['dbschema']
);

if ($db0) {
    echo "DB 접속 성공. 명령 실행 준비 단계<br>";

    $tablename="instagram";
    $tableinfo = desc($db0, $tablename);
    print_r($tableinfo);
    foreach($tableinfo as $fieldname) {
        echo "<br>".$fieldname;
        echo " <input type='text' name='".$fieldname."' >";
        echo "<br>";
    } 
} else {
    echo "접속 실패<br>";
}
*/
function desc($db, $tablename) {
    // 지역변수 -> 전역변수 만들기 (global) 
    //global $db0; 
    $query = "desc ".instagram.";"; // SQL 쿼리문

    $result = mysqli_query($db, $query); // DB서버로 전송
    if ($result) {
        //echo "SQL 명령 실행 성공, 결과값이 있어요.<br>";
        $fields = [];
        while ($row = mysqli_fetch_object($result)) {
            // print_r($row);
            // echo "<br>";
            //echo "필드명: ".$row->Field."<br>";
            $fields [] = $row -> Field;
        }
    } else {
        echo "SQL 실행 오류<br>";
    }
    return $fields;
}