<?php
include "./theme.conf.php";
include "../dbData/dbinfo.php";
include "./desc.php";

$db0 = new mysqli(
    $dbinfo['master']['dbhost'],
    $dbinfo['master']['dbuser'],
    $dbinfo['master']['dbpass'],
    $dbinfo['master']['dbschema']
);

if ($db0) {
    //DB접속 성공
    $title = $_POST[title];
    if($title){
        print_r($_POST);
        //$query = "INSERT INTO `phpdaelim5`.`instagram` (`title`) VALUES ('".$title."');";
        $query = "insert instagram set ";
        foreach($_POST as $key => $value){
            $query.= "`".$key."`='".$value."',";
        }
       // $query .= "`description`='".$_POST['description']."',";
       // $query .= "`title=`".$title."',`regdate`='".date("Y-m-d",time())."'";
       $query .= "`regdate`='".date("Y-m-d",time())."'";
        echo $query;
        //exit;
        $result = mysqli_query($db0, $query); // DB서버로 전송
        
        $url = "/";
        header("location:" . $url);
    }

} else {
    echo "접속 실패";
}

$layout = file_get_contents($theme['layout']);
$contents = file_get_contents($theme['new']);
$contents = str_replace("{{id}}", "", $contents);
/*
$param = [
    'title' => [
    'title' => "제목",
    'name' => "title",
    'description' => "제목을 입렵해 주세요"
    ],
    'description' => [
        'title' => "내용",
        'name' => "description",
        'description' => "내용을 입렵해 주세요"
    ],
    'picture' => [
        'title' => "사진",
        'name' => "picture",
        'description' => "사진을 입렵해 주세요"
    ]
];

$inputs = "";
foreach($param as $p) {
    $inputs .= form_input($p);
}
*/

$inputs = "";
$tableinfo = desc($db0, $tablename);
$bootstrapInput = file_get_contents("./bootstrap/form_input.html");
foreach($tableinfo as $fieldname) {
    if ($fieldname == "id" || $fieldname == "regdate") continue;
    /*
    $inputs.="<br>".$fieldname;
    $inputs.=" <input type='text' name='".$fieldname."' >";
    $inputs.="<br>";
    */
    $inputForm = $bootstrapInput;
    $inputForm = str_replace("{{name}}", $fieldname, $inputForm);
    $inputForm = str_replace("{{title}}", $fieldname, $inputForm);
    $inputForm = str_replace("{{value}}", "" , $inputForm);
    $inputs .= $inputForm;
} 

$contents = str_replace("{{formlist}}", $inputs ,$contents);//항목삽입

$layout = str_replace("{{contents}}",$contents,$layout);

echo $layout;

function form_input($arg) {
    global $path;
    //arg는 1차원 배열
    extract($arg); //배열의 키값으로 지역변수를 자동으로 생성

    //폼 항목1개 생성
    $form_input = file_get_contents($path."form_input.html");
    $form_input = str_replace("{{title}}", $title , $form_input);
    $form_input = str_replace("{{name}}", $name , $form_input);
    $form_input = str_replace("{{description}}", $description , $form_input);
    return $form_input;
}