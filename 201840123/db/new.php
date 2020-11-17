<?php

if(isset($_POST['title'])){
    // post값이 있으면 뭔가 해줘
    $dbinfo =  include "./dbinfo.php";
    // 객체 생성
    $db = new mysqli(
        $dbinfo['master']['dbhost'], // mysql 서버주소
        $dbinfo['master']['dbuser'], // 사용자아이디
        $dbinfo['master']['dbpass'], // 패스워드
        $dbinfo['master']['dbschema'] // 스키마
);

    //$query = "INSERT INTO `phpdaelim4`.`instagram` (`title`,`description`)
    //VALUES('".$_POST['title']."','".$_POST['description']."');";

    //print_r($_POST);
    //exit;

    $query = "INSERT `phpdaelim4`.`instagram` SET ";
    foreach($_POST as $key => $value) {
            $query .= "`".$key."` = '".$value."',";
    }
    $query = rtrim($query,",");
    //$query .= "`title` = '".$_POST['title']."',";
    //$query .= "`description`='".$_POST['description']."'";

    //echo $query;
    //exit;
    
    $result = mysqli_query($db, $query);

    header("location:insta.php");
}

echo "새로운 값 저장";
$form = file_get_contents("../resource/new.html");
 //DBA 같이 작업해서 알려줄거야
$formlist = ["title","description","location","regdate"];
$form_str = "";
foreach($formlist as $name){
    $form_str .= '<input type="text" name="'.$name.'">';
    $form_str .= "<br>";
}
$form = str_replace("{{formlist}}", $form_str, $form);

echo $form;

