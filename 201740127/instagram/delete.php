<?php
include "theme.conf.php";
include "../dbinfo.php";

$dbinfo = include "../dbinfo.php";

$db0 = new mysqli(
    $dbinfo['master']['dbhost'],
    $dbinfo['master']['dbuser'],
    $dbinfo['master']['dbpass'],
    $dbinfo['master']['dbschema'],
);

if (isset($_GET['id'])) {

    if ($db0) {

        $query = "DELETE FROM `phpdaelim4`.`insta2` WHERE (`id` = '".$_GET['id']."');";
        $result = mysqli_query($db0, $query);

        $url = "/";
        header("location:" . $url);
        
    } else {
        echo "접속 실패";
    }

} else {
    echo "삭제할 계시물이 없습니다.";
}