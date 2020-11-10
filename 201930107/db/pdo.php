<?php
include "../dbInfo.php";

try {
    $db = new PDO(
        "mysql:host=localhost;dbname=phpdaelim5;", 
        "daelim5",
        "123456"
    );
    if ($db) {
        echo "DB접속 성공";
        $query = "select * from members";
    } else {
        echo "DB접속 실패";
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}