<?php
/*
echo "새 글을 작성합니다.";
echo "작성한 새 글 = ".$_POST['title'];

$form = file_get_contents("../resource/new.html");
echo $form;
*/

include "dbinfo.php";
$db0 = new mysqli(
    $dbinfo['master']['dbhost'],
    $dbinfo['master']['dbuser'],
    $dbinfo['master']['dbpass'],
    $dbinfo['master']['dbschema'],
    $dbinfo['master']['dbport']
);
if($db0) {
    // 접속 성공
    $tablename = "instagram";
    $title = $_POST['title'];
    if ($title) {
        //print_r($_POST);
        //$query = "INSERT INTO `phpdaelim5`.".$tablename." (`title`) VALUES ('".$title."')";
        $query = "INSERT phpdaelim5.".$tablename." SET ";
        foreach($_POST as $key => $value) {
            $query .= "`".$key."`='".$value."', ";
        }
        //$query .= "`title`='".$title."', ";    // 현재 시간을 "연도-월-일"이라는 양식에 맞춰 출력
        //$query .= "`description`='".$_POST['description']."',";
        $query .= "`regdate`='".date("Y-m-d", time())."'";
        echo $query;
        //exit;   // 프로그램 중단
        $result = mysqli_query($db0, $query);

        $url = "insta.php";
        header("location:".$url);
    }
} else {
    echo "접속 실패";
}