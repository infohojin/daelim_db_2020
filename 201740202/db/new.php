<?php





include "../dbinfo.php";


$db0 = new mysqli(
    $dbinfo['master']['dbhost'],
    $dbinfo['master']['dbuser'],           
    $dbinfo['master']['dbpass'],
    $dbinfo['master']['dbschema']
);

    if ($db0) {
      //  echo "DB 접속 성공"."<br>";
        $tablename = "instagram";
        $title = $_POST['title'];


        if($title){
            //print_r($_POST);
         //   $query = "INSERT INTO phpdaelim5.". $tablename . " (`title`) VALUES ('".$title."');"; //방법1
         $query = "INSERT phpdaelim5.".$tablename." SET ";
         foreach($_POST as $key => $value){
           $query .="`".$key."`='".$value."',";
         }
         //$query .= "`title`='".$title."',`description`='".$_POST['description']."', `regdata`='".date("Y-m-d", time())."'"; //방법2
           $query .= "`regdata`='".date("Y-m-d", time())."'";
         echo $query;
         //  exit; //종료
              $result = mysqli_query($db0, $query); // DB서버로 전송

              $url = "insta.php";
              header("location:".$url);
        }

    }else{
        echo "접속 실패";
    }

    echo "새 글을 작성합니다.";
if(isset($_POST['title'])) {
    echo "작성한 새 글은=" .$_POST['title'];
}

$from = file_get_contents("../resource/new.html"); //읽어오기

echo $from;