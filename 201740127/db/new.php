<?php
echo "새로운 값을 저장.";
// POST 값
if (isset($_POST['title'])) {
    // POST 값이 있으면 작동
    $dbinfo = include "../dbinfo.php";
    $db = new mysqli(
        $dbinfo['master']['dbhost'],
        $dbinfo['master']['dbuser'],
        $dbinfo['master']['dbpass'],
        $dbinfo['master']['dbschema'],
    );

    // $query="INSERT INTO `phpdaelim4`.`instagram` (`title`, `description`)
    // VALUES ('".$_POST['title']."', '".$_POST['description']."');";
    // $result = mysqli_query($db, $query);

    $query = "INSERT `phpdaelim4`.`instagram` SET ";
    foreach($_POST as $key => $value) {
        $query .= "`".$key."` = '".$value."',";
    }
    $query = rtrim($query,",");
    $result = mysqli_query($db, $query);
    

    header("location:insta.php");
}
echo "새로운 값 저장";
$form = file_get_contents("../resource/new.html");

$formlist = ["title", "description", "location", "regdate"];
$form_str = "";
foreach($formlist as $name) {
    $form_str .= '<input type="text" name="'.$name.'">';
    $form_str .= "<br>";
}
$form = str_replace("{{formlist}}", $form_str, $form);
echo $form;