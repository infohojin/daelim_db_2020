<?php
echo "컬럼을 관리해 줄거에요.";

include "theme.conf.php";
include "desc.php";

$dbinfo = include "../dbinfo.php";

$db0 = new mysqli(
    $dbinfo['master']['dbhost'], // mysql 서버주소
    $dbinfo['master']['dbuser'], // 사용자아이디
    $dbinfo['master']['dbpass'], // 패스워드
    $dbinfo['master']['dbschema'] // 스키마
);

if(isset($_GET['mode']) && $_GET['mode'] == "delete") {
    /*
    $query = "ALTER TABLE `phpdaelim4`.`insta2` 
    DROP COLUMN `".$_GET['column']."`;";
    */
    $query = "DROP TABLE `phpdaelim4`.`".$_GET['tablename']."`;";
    echo $query;
    $result = mysqli_query($db0, $query);
} else 
if(isset($_GET['mode']) && $_GET['mode'] == "new") {
    // 삽입동작
    /*
    $query = "ALTER TABLE `phpdaelim4`.`insta2` 
    ADD COLUMN `".$_POST['fieldname']."` VARCHAR(45) NULL ;";
    */
    // 테이브을 추가하는 동작.
    $query = "CREATE TABLE `phpdaelim4`.`".$_POST['tablename']."` (
        `id` INT NOT NULL AUTO_INCREMENT,
        PRIMARY KEY (`id`));";
    echo $query;
    $result = mysqli_query($db0, $query);
}

echo "<a href='/'>목록</a>";
//use phpdaelim4;

    $query = "show tables;";
    echo $query;
    $result = mysqli_query($db0, $query);
    if ($result) {
        //echo "데이터에 값이 있어요...<br>";
        $rows = []; //초기화
        echo "<table>";
        while($row = mysqli_fetch_object($result)){
            $fieldname = "Tables_in_phpdaelim4";
            //컬럼
            echo "<tr>";
            foreach($row as $key => $value) {
                echo "<td>"."<a href='setting.php?tablename=".$row->$fieldname."'>".$value."</a>"."</td>";
            }
            
            echo "<td>"."<a href='?mode=delete&tablename=".$row->$fieldname."'>삭제</a>"."</td>";

            echo "</tr>";
            //print_r($row);
            //echo "<pre>";
            
            //echo $row->Field."<br>";
            //$rows []= $row->Field; // 배열값 생성
        }
        echo "</table>";

        echo "<br>";
        echo "<form action='?mode=new' method='post'>";
        echo "<input type='text' name='tablename'>";
        echo "<input type=submit value='테이블 추가' class=\"btn btn-secondary\">";
        echo "</form>";

    }
