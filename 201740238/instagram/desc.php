<?php 
/*
echo __LINE__.": 테이블의 컬럼을 알려주세요.<br>";

include "theme.conf.php";
$dbinfo = include "../dbinfo.php";

// 객체 생성
// 전역변수
$db0 = new mysqli(
    $dbinfo['master']['dbhost'], // mysql 서버주소
    $dbinfo['master']['dbuser'], // 사용자아이디
    $dbinfo['master']['dbpass'], // 패스워드
    $dbinfo['master']['dbschema'] // 스키마
);

if ($db0) {
    echo __LINE__.": DB가 준비 되었어요.<br>";

    $tablename = "instagram";
    $fields = desc($db0, $tablename);
    print_r($fields);

} else {
    echo __LINE__.": 접속실패. <br>";

}
*/

function desc($db, $tablename)
{
    //global $db0; //외부 전역변수를 참조....

    //$db0 <= 지역변수
    $query = "DESC phpdaelim3.".$tablename.";";
    echo $query;
    $result = mysqli_query($db, $query);
    if ($result) {
        //echo "데이터에 값이 있어요...<br>";
        $rows = []; //초기화
        while($row = mysqli_fetch_object($result)){
            //echo "<pre>";
            //print_r($row);
            //echo $row->Field."<br>";
            $rows []= $row->Field; // 배열값 생성
        }

    }
    return $rows; // 배열 반환
}