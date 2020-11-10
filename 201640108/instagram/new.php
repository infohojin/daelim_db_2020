<?php
include "theme.conf.php";

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

    header("location:/");
}

$layout = file_get_contents($theme['layout']);

    $contents = file_get_contents($theme['new']);
    $formlist = [
        "title"=>[
            'label'=>"제목",
            'name'=>"title",
            'description'=>"제목을 입력해 주세요."
        ],
        "description"=>[
            'label'=>"설명",
            'name'=>"description",
            'description'=>"설명을 작성하세요."
        ],
        "location"=>[
            'label'=>"위치",
            'name'=>"location",
            'description'=>"위치를 입력해 주세요."
        ],
        "regdate"=>[
            'label'=>"등록일",
            'name'=>"regdate",
            'description'=>"등록일을 선택해 주세요."
        ]
    ];
    $form_str = "";
    //$form_str = file_get_contents("../resource/bootstrap/form_input.html");
    foreach($formlist as $param) {
        //$form_str .= '<input type="text" name="'.$name.'">';
        //$form_str .= "<br>";
        $form_str .= form_input($param);
    }
    $contents = str_replace("{{formlist}}", $form_str, $contents);

$layout = str_replace("{{contents}}", $contents, $layout);
echo $layout;

function form_input($arg) {
    global $path;

    $name = $arg['name'];
    $title = $arg['label'];
    $description = $arg['description'];

    $form_str = file_get_contents($path."form_input.html");
    $form_str = str_replace("{{name}}",$name,$form_str);

    $form_str = str_replace("{{title}}",$title,$form_str);
    $form_str = str_replace("{{description}}",$description,$form_str);
    return $form_str;
}