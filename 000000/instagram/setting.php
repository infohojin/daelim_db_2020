<?php
echo "컬럼을 관리해 줄거에요.";

include "theme.conf.php";
include "desc.php";

$dbinfo = include "../dbinfo.php";

if(isset($_GET['tablename'])) {
    $tablename = $_GET['tablename'];
    echo $tablename."을 수정합니다.";
} else {
    echo "테이블 이름을 지정해 주세요.";
    exit;
}

$db0 = new mysqli(
    $dbinfo['master']['dbhost'], // mysql 서버주소
    $dbinfo['master']['dbuser'], // 사용자아이디
    $dbinfo['master']['dbpass'], // 패스워드
    $dbinfo['master']['dbschema'] // 스키마
);

if(isset($_GET['column'])) {
    $query = "ALTER TABLE `phpdaelim4`.`".$tablename."` 
    DROP COLUMN `".$_GET['column']."`;";
    echo $query;
    $result = mysqli_query($db0, $query);
} else 
if(isset($_GET['mode']) && $_GET['mode'] == "new") {
    // 삽입동작
    $query = "ALTER TABLE `phpdaelim4`.`".$tablename."` 
    ADD COLUMN `".$_POST['fieldname']."` VARCHAR(45) NULL ;";
    echo $query;
    $result = mysqli_query($db0, $query);
}

echo "<a href='/'>목록</a>";
$query = "DESC phpdaelim4.".$tablename.";";
    echo $query;
    $result = mysqli_query($db0, $query);
    if ($result) {
        //echo "데이터에 값이 있어요...<br>";
        $rows = []; //초기화
        echo "<table>";
        while($row = mysqli_fetch_object($result)){
            
            //컬럼
            echo "<tr>";
            foreach($row as $key => $value) {
                echo "<td>".$value."</td>";
            }
            echo "<td>"."<a href='?column=".$row->Field."&tablename=$tablename'>삭제</a>"."</td";

            echo "</tr>";
            //print_r($row);
            //echo "<pre>";
            
            //echo $row->Field."<br>";
            //$rows []= $row->Field; // 배열값 생성
        }
        echo "</table>";

        echo "<br>";
        echo "<form action='?mode=new&tablename=$tablename' method='post'>";
        echo "<input type='text' name='fieldname'>";
        echo "<input type=submit value='추가' class=\"btn btn-secondary\">";
        echo "</form>";

    }
