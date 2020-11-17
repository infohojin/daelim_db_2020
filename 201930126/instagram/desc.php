<?php
// echo "테이블 조절을 합니다"."<br>";

// include "theme.conf.php";
// include "../dbinfo.php"; // DB접속 정보

// $db0 = new mysqli(
//     $dbinfo['master']['dbhost'],
//     $dbinfo['master']['dbuser'],
//     $dbinfo['master']['dbpass'],
//     $dbinfo['master']['dbschema'],
//     $dbinfo['master']['dbport']
// );
// if($db0){
//     echo __LINE__. "DB접속 성공 명령실행 준비"."<br>";//출력에 이코드가 몇번째줄인지를 나타냄

//     $tablename = "instargram";
//     $tableinfo = desc($db0,$tablename);

//     print_r($tableinfo);

//     foreach($tableinfo as $fieldname)
//     {
//         echo $fieldname;
//         echo "<input type=text name'".$fieldname."'>";
//         echo "<br>";
//     }
// }
//     else {
//     echo  __LINE__. "접속 실패"."<br>";
// }
function desc($db,$tablename)
{
    $query = "DESC phpdaelim5.".$tablename.";";
    //echo  __LINE__. $query."<br>";

    $result = mysqli_query($db, $query); // DB서버로 전송
    if ($result) 
    {
        $fields = [];
        //echo  __LINE__. "sql 실행성공 값있음"."<br>";
        while($row = mysqli_fetch_object($result))
        {
            //echo "필드명".$row->Field."<br>";
            $fields [] = $row->Field;
        }
    }else
    {

    }
    return $fields;
}