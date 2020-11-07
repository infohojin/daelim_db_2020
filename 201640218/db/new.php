<?php
if (isset($_POST['title'])) {
    $dbinfo = include "../dbinfo.php";
    $db = new mysqli(
        "localhost", // mysql 서버주소
        "daelim4", // 사용자아이디
        "123456", // 패스워드
        "phpdaelim4" // 스키마
    );
    // $query = "INSERT INTO `phpdaelim4`.`instagram` (`title`,`description`) 
    // VALUES ('".$_POST['title']."', '".$_POST['description']."');";

    // print_r($_POST);

    $query ="INSERT `phpdaelim4`.`instagram` SET ";
    foreach ($_POST as $key => $value) {
        $query .= "`".$key."` = '".$value."',";
    }
    $query = rtrim($query,",");
    // $query .= "`title` = '".$_POST['title']."',";
    // $query .= "`description`='".$_POST['description']."'";
    
    // echo $query; 
    // exit;

    $result = mysqli_query($db, $query);
    header("location:insta.php");
}
echo "새로운 값을 저장합니다.";
$form = file_get_contents("../resource/new.html");
// DBA 작업 후 알려줌
$formlist = ["title", "description", "location", "regdata"];
$form_str = "";
foreach($formlist as $name) {
    $form_str .= '<input type="text" name="'.$name.'">';
    $form_str .= "<br>";
}
$form = str_replace("{{formlist}}", $form_str,$form);
echo $form;
?>
