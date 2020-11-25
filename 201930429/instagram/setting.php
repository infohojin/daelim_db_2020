<?php
include "theme.conf.php";
include "../dbinfo.php";

include "desc.php";

echo "테이블 관리 화면 입니다.";

$db0 = new mysqli(
    $dbinfo['master']['dbhost'],
    $dbinfo['master']['dbuser'],
    $dbinfo['master']['dbpass'],
    $dbinfo['master']['dbschema'],
    $dbinfo['master']['dbport']
);

if(isset($_GET['colum'])) {
    $query = "ALTER TABLE `phpdaelim5`.`insta` 
    DROP COLUMN `".$_GET['colum']."`;";
    echo $query;
    $result = mysqli_query($db0, $query);
} else
if (isset($_GET['mode']) && $_GET['mode'] == "new")   {
    echo "컬럼을 삽입합니다.";
    echo "삽입=".$_POST['fieldname'];
    $query = "ALTER TABLE `phpdaelim5`.`insta` 
    ADD COLUMN `".$_POST['fieldname']."` VARCHAR(45) NULL AFTER `description`;";
    $result = mysqli_query($db0, $query);

}


if ($db0) {
    $tablename = "insta";
    //$tableinfo = desc($db0, $tablename);
    //print_r($tableinfo);

    $query = "DESC phpdaelim5." . $tablename . ";";
    //echo __LINE__.$query."<br>";
    $result = mysqli_query($db0, $query);
    if ($result) {
        //echo __LINE__.": SQL 명령 실행 성공, 결과값이 있어요.<br>";
        $fields = []; // 배열초기화
        echo "<table>";
        while($row = mysqli_fetch_object($result)) {
            echo "<tr>";
            foreach($row as $col) {
                echo "<td>".$col."</td>";
            }

            echo "<td>"."<a class=\"btn btn-warning\"
            href = '?colum=".$row->Field."' >삭제</a>"."</td";
            //print_r($row);
            //echo "필드명:".$row->Field."<br>";
            //$fields []= $row->Field;
            echo "</tr>";
        }
        echo "</table>";
        //echo "<a href='?mode=new' class=\"btn btn-secondary\">추가</a>";

        echo "<form action=\"?mode=new\" method='post'>";
        echo "<input type=text name='fieldname'>";
        echo "<input type='submit' value='추가'>";
        echo "</form>";

    } else {
        //echo __LINE__.": SQL 실행 오류<br>";
    }
}
