<?php
include "../dbinfo.php";

try {
    $db = new PDO(
        "mysql:host=".$dbinfo['master']['dbhost']
        .";dbname=".$dbinfo['master']['dbschema'].";",
        $dbinfo['master']['dbuser'],
        $dbinfo['master']['dbpass']);
    if($db) {
        echo "DB접속 성공";
    } else {
        echo "DB접속 실패";
    }
} catch(PODException $e) {
    echo $e->getMessage();
}