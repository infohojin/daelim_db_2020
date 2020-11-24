<?php
echo "게시물을 삭제(".$_GET['id'].")합니다.";

include "theme.conf.php";
include "desc.php";

$dbinfo = include "../dbinfo.php";

$db0 = new mysqli(
    $dbinfo['master']['dbhost'],  // mysql 서버 주소
    $dbinfo['master']['dbuser'],  // 사용자 아이디
    $dbinfo['master']['dbpass'],  // 사용자 비밀번호
    $dbinfo['master']['dbschema']  // 스키마
);

if($db0) {
    echo "DB 작업이 준비 되었습니다";

    $query = "DELETE FROM `phpdaelim4`.`insta2` WHERE (`id` = '".$_GET['id']."');";
    $result = mysqli_query($db0, $query); 

    header("location:/");
} else {
    echo "DB 접속 실패";
}

// 1) 목록을 출력할 때