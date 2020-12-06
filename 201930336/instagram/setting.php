<?php
include "themeconf.php";
include "../dbinfo.php";

include "desc.php";

echo "테이블 관리 화면입니다.";

$db0 = new mysqli(
    $dbinfo['master']['dbhost'],
    $dbinfo['master']['dbuser'],
    $dbinfo['master']['dbpass'],
    $dbinfo['master']['dbschema'],
    $dbinfo['master']['dbport']
);


if(isset($_GET['colum'])) {
    $query = "ALTER TABLE `phpdaelim5`.`instagram` DROP COLUMN `".$_GET['colum']."`;";
    echo $query;
    $result = mysqli_query($db0, $query);
} else {
    if(isset($_GET['mode']) && $_GET['mode']=="new") {
        echo "컬럼을 삽입합니다.";
        echo "삽입=".$_POST['fieldname'];

        $query = "ALTER TABLE `phpdaelim5`.`instagram` ADD COLUMN `".$_POST['fieldname']."` VARCHAR(45);";
        $result = mysqli_query($db0, $query);
    }
}

if($db0) {
    
    $tablename = "instagram";
    // $tableinfo = desc($db0, $tablename);
    $query = "DESC phpdaelim5." . $tablename . ";";
    $result = mysqli_query($db0, $query);
        if($result) {
            $fields = [];
            echo "<table>";
            while($row = mysqli_fetch_object($result)) {
                echo "<tr>";
                foreach($row as $col) {
                    echo "<td>".$col."</td>";
                }
                echo "<td>"."<a class=\"btn btn-warning\" href='?colum=".$row->Field."' >삭제</a>"."</td>";
                // print_r($row);
                // $fields [] = $row->Fiels;
                echo "</tr>";
            }
            echo "</table>";
            // echo "<a href='?mode=new' class=\"btn btn-secondary\">추가</a>";

            echo "<form action=\"?mode=new\" method='POST'>";
            echo "<input type=text name='fieldname'>";
            echo "<input type=submit value='추가'>";
            echo "</form>";
        } 
    
    
    // print_r($tableinfo);
}