<?php
echo "<p>테이블 관리 페이지</p>";
echo "<a href='/'>목록이동</a>";
include "./theme.conf.php";
include "../dbData/dbinfo.php";
include "./desc.php";

$db0 = new mysqli(
    $dbinfo['master']['dbhost'],
    $dbinfo['master']['dbuser'],
    $dbinfo['master']['dbpass'],
    $dbinfo['master']['dbschema']
);

if (isset($_GET['colum'])) {
    $query = "ALTER TABLE `phpdaelim5`.`instagram` DROP COLUMN `".$_GET['colum']."`;";
    echo $query;
    $result = mysqli_query($db0, $query); 

} else if (isset($_GET['mode']) && $_GET['mode'] == "new") {
    echo "<p>컬럼을 추가합니다.</p>";
    echo "삽입".$_POST['fieldname'];

    $query = "ALTER TABLE `phpdaelim5`.`instagram` ADD COLUMN `".$_POST['fieldname']."` VARCHAR(45) NULL;";
    $result = mysqli_query($db0, $query);

}

// DB 접속
if ($db0) {
    // 테이블 컬럼명 가져오기
    $tablename = "instagram";
    //$tableinfo = desc($db0, $tablename);
    //print_r($tableinfo); 
    $query = "desc ".$tablename;

    $result = mysqli_query($db0, $query); // DB서버로 전송
    if ($result) {
        //echo "SQL 명령 실행 성공, 결과값이 있어요.<br>";
        $fields = [];
        echo "<table border=1>";
        while ($row = mysqli_fetch_object($result)) {
            echo "<tr>";
            foreach($row as $col) {
                echo "<td>".$col."</td>";
            }
            echo "<td><a href='?colum=".$row->Field."' class='btn btn-warning'>삭제</a></td>";
            // print_r($row);
            // echo "<br>";
            // echo "필드명: ".$row->Field."<br>";
            $fields [] = $row -> Field;
            echo "</tr>";
        }
        echo "</table>";

        echo "<form action=\"?mode=new\" method='post'>";
        echo "<input type='text' name='fieldname'>";
        echo "<input type='submit' value='추가'>";
        echo "</form>";

    } else {
        echo "SQL 실행 오류<br>";
    }
} else {
    echo "<p>접속 실패</p>";

}

