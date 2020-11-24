<?php
include "theme.conf.php";
include "../dbinfo.php";
include "desc.php";

echo "테이블 관리 화면입니다.";
echo "<a href='/'>목록이동</a>";

$db0 = new mysqli(
    $dbinfo['master']['dbhost'],
    $dbinfo['master']['dbuser'],
    $dbinfo['master']['dbpass'],
    $dbinfo['master']['dbschema']
);

if(isset($_GET['column'])) {

    $query = "ALTER TABLE instagram DROP COLUMN ".$_GET['column'];
    $result = mysqli_query($db0, $query);

} else if(isset($_GET['mode']) && $_GET['mode'] == "new") {

    $query = "ALTER TABLE instagram ADD COLUMN ".$_POST['fieldname']." VARCHAR(45) NULL";
    $result = mysqli_query($db0, $query);
}

if($db0) {
    $tablename = "instagram";
    //$tableinfo = desc($db0, $tablename);
    //print_r($tableinfo);

    $query = "desc ".$tablename.";";

    $result = mysqli_query($db0, $query);

    if ($result) {

        $fields = [];
            echo "<table>";
        while($row = mysqli_fetch_object($result)){
            echo "<tr>";

            foreach($row as $col) {
                echo "<td>".$col."</td>";
            }
            
            echo "<td>"."<a class=\"btn btn-warning\" href = '?column=".$row->Field."'>삭제</a>"."</td>";
            //print_r($row);
            //$fields [] = $row->Field;
            echo "</tr>";
        }
        echo "</table>";
        //echo "<a href='?mode=new' class=\"btn btn-primary\">추가</a>";
        
        echo "<form action=\"?mode=new\" method='post'>";
        echo "<input type=text name='fieldname'>";
        echo "<input type=submit value='추가'>";
        echo "</form>";

    } else {
        echo __LINE__."SQL 실행 오류<br>";
    }

} 