
<?php

include "../dbinfo.php";

try {
    $db = new PDO (
        "mysql:host=".$dbinfo['master']['dbhost']
        .";dbname=".$dbinfo['master']['dbschema'].";",
        $dbinfo['master']['dbuser'],
        $dbinfo['master']['dbpass']
    );
    if($db) {
        echo "DB 접속 성공"."<br>";
    } else {
        echo "DB 접속 실패"."<br>";
    }
} catch(PDOException $e) {
    echo $e->getMessage();
} 