<?php

if(isset($_POST[title])) {
    $dbinfo = include "../dbinfo.php";

    $db = new mysqli(
        $dbinfo['master']['dbhost'],//서버주소
        $dbinfo['master']['dbuser'], //사용자아이디
        $dbinfo['master']['dbpass'], //패스워드
        $dbinfo['master']['dbschema'] //스키마
    );

   // $query = "INSERT INTO `phpdaelim4`.`instargram` (`title`,`description`)
   //   VALUES ('".$_POST['title']."','".$_POST['description']."');";

  // print_r($_POST);
   $query = "INSERT `phpdaelim4`.`instargram` SET ";
   foreach($_POST as $key => $value) {
         $query .= "`".$key."` = '".$value."',";
   }
   $query = rtrim($query,",");
   //$query .= "`title` = '".$_POST['title']."',";
   //$query .= "`description`='".$_POST['description']."'";

   //echo $query;
  // exit;

    $result = mysqli_query($db, $query);

    header("location:instar.php");
}
echo "새로운 값을 저장할 거에요.";
$form = file_get_contents("../resource/new.html");

$formlist = ["title", "description", "location", "regdate"];
$form_str = "";
foreach($formlist as $name) {
    $form_str .= '<input type="text" name="'.$name.'">';
    $form_str .= "<br>";
}
$form = str_replace("{{formlist}}", $form_str, $form);

echo $form;