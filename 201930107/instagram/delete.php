<?php
include "theme.conf.php";
include "../dbInfo.php"; // db 접속 정보
include "desc.php";

$db0 = new mysqli(
    $dbInfo['master']['dbHost'], 
    $dbInfo['master']['dbUser'], 
    $dbInfo['master']['dbPass'], 
    $dbInfo['master']['dbSchema'], 
    $dbInfo['master']['dbPort']
);

// echo "게시물을 삭제합니다";
// print_r($_GET);

$id = $_GET['id'];
if (isset($id)) {
    // echo "삭제";
    if($db0) {
        $tablename = "instagram";
        $dbName = $dbInfo['master']['dbSchema'];

        $query = "DELETE FROM $dbName.$tablename WHERE id=$id;";
        $result = mysqli_query($db0, $query);

        $url = "/";
        header("location:$url");
    } else {
        echo "db 접속 실패";
    }
} else {
    echo "삭제할 게시물이 없음";
}