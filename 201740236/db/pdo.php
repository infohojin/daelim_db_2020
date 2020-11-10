<?php

include "./dbinfo.php";

try {
    $db = new PDO("mysql:host=localhost; dbname=phpdaelim5;"
    ,"daelim5","123456");
    IF($db) {
        ECHO "db접속 성공!";
    } else {
        echo("db접속 실패!");
    }
} catch(PDOException $e) {
    echo $e->getMessage();
}