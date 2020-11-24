<?php

// POST 값
if(isset($_POST['title'])){
    // post 값이 있으면 뭔가 해줘 <div class=""></div>
    $dbinfo = include "../dbinfo.php";

    $db0 = new mysqli(
        $dbinfo['master']['dbhost'], // mysql 서버 주소
        $dbinfo['master']['dbuser'], // 사용자 아이디
        $dbinfo['master']['dbpass'], // 패스워드
        $dbinfo['master']['dbschema'] // 스키마
    );

    // SQL
    // $query = "INSERT INTO `phpdaelim4`.`instagram` (`title`,`description`) VALUES ('".$_POST['title']."','".$_POST['description']."');";
    
    // print_r($_POST);
    
    $query = "INSERT `phpdaelim4`.`instagram` SET ";
    foreach($_POST as $key => $value){
        $query .= "`".$key."` = '".$value."',";
    }
    $query = rtrim($query, ",");
    // $query .= "`title` = '".$_POST['title']."',";
    // $query .= "`description` = '".$_POST['description']."'";

    // echo $query;
    // exit;

    $result = mysqli_query($db0, $query);

    header("location:insta.php");

}

echo "새로운 값을 저장할 거에요.";
$form = file_get_contents("../resource/new.html");

// DBA 같이 작업해서 알려줄거야
$formlist = ["title", "description" , "location", "regdate"];
$form_str = "";

foreach($formlist as $name){
    $form_str .= '<input type="text" name="'.$name.'">';
    $form_str .= "<br>";
}

$form = str_replace("{{formlist}}", $form_str, $form);

echo $form;