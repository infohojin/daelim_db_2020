<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<?php
include "theme.conf.php";
include "../dbInfo.php"; // db 접속 정보
include "desc.php";

echo "<a href='/' class='btn btn-info'>목록 이동</a>";

$db0 = new mysqli(
    $dbInfo['master']['dbHost'], 
    $dbInfo['master']['dbUser'], 
    $dbInfo['master']['dbPass'], 
    $dbInfo['master']['dbSchema'], 
    $dbInfo['master']['dbPort']
);

$tablename = "instagram";
$dbName = $dbInfo['master']['dbSchema'];

if (isset($_GET['column'])) {
    $column = $_GET['column'];
    $query = "ALTER TABLE $dbName.$tablename DROP COLUMN $column;";
    $result = mysqli_query($db0, $query);
    // echo $query;
} else if (isset($_GET['mode']) && $_GET['mode'] == "new" ) {
    extract($_POST);
    $query =  "ALTER TABLE $dbName.$tablename ADD COLUMN $fieldName $type $isNull;";
    // echo $query;
    $result = mysqli_query($db0, $query);
}

if($db0) {

    $query = "desc $dbName.$tablename;";
    $result = mysqli_query($db0, $query);

    if($result) {
        $fields = [];
        
        echo "<table class=\"table table-striped table-hover\" border=1>";
        while($row = mysqli_fetch_object($result)) {
            echo "<tr>";
            foreach ($row as $col) {
                echo "<td>$col</td>";
            }

            echo "<td><a href=\"?column=".$row->Field."\" class=\"btn btn-warning\">삭제</a></td>";

            echo "</tr>";
        }
        echo "</table>";
        
        echo "<form action=\"?mode=new\" method=\"POST\">";
        echo "필드 명";
        echo "<br>";
        echo "<input class='form-control' type='text' name='fieldName'>";
        echo "<br>";
        echo "타입";
        echo "<br>";
        echo "<input class='form-control' type='text' name='type'>";
        echo "<br>";
        echo "null 여부";
        echo "<br>";
        echo "<input class='form-control' type='text' name='isNull'>";
        echo "<br>";
        echo "<input type='submit' class=\"btn btn-secondary\" value='추가'>";
        echo "</form>";

    } else {
        echo __LINE__.": 데이터 읽기 실패";
        echo "<br>";
    }

    // echo "<pre>";
    // print_r($fields);

} else {
    echo "db 접속 실패";
}