<?php

include "./dbinfo.php";
$db0 = new mysqli(
    $dbinfo['master']['dbhost'],
    $dbinfo['master']['dbuser'],
    $dbinfo['master']['dbpass'],
    $dbinfo['master']['dbschema'],
    $dbinfo['master']['dbport']
);

if ($db0) {
    if(isset($_POST['title'],$_POST['description'])) {
    //DB접속성공
    $tablename = "instagram";
    $title = $_POST['title'];

    if ($title) {
    //$query = "INSERT INTO `phpdaelim5`.".$tablename." (`title`) VALUES ('".$title."')";
    $query = "INSERT phpdaelim5.".$tablename." SET ";
    foreach($_POST as $key => $value){
      $query .="`".$key."`='".$value."',";
    }
    
   // $query .= "`title`='".$title."', ";
   // $query .= "`description`='".$_POST['description']."', ";
    $query .= "`regdate`='".date("Y-m-d", time())."'";
    echo $query;
    //exit; // 프로그램 중단
    $result = mysqli_query($db0, $query); // DB서버로 전송
        //페이지 이동
        $url = "insta.php";
        header("location" . $url);
}
    }
}else{
    echo "접속 실패";
}

echo "새 글을 작성합니다.";
if(isset($_POST['title'])) {
    echo "작성한 새 글은=" .$_POST['title'];
}

$from = file_get_contents("../resource/new.html"); //읽어오기
echo $from;



