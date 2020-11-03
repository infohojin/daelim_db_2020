<?php

    include "../dbinfo.php";
    $db0 = new mysqli(
        $dbinfo['master']['dbhost'],
        $dbinfo['master']['dbuser'],
        $dbinfo['master']['dbpass'],
        $dbinfo['master']['dbschema'],
        $dbinfo['master']['dbport'],
    );

    if($db0) {
        //DB접속성공..
        $tablename = "insta";
        $title = $_POST['title'];
        if($title) {
            //$query = "INSERT INTO phpdaelim5.".$tablename." (`title`) VALUES ('".$title."');";
            $query = "INSERT INTO phpdaelim5.".$tablename." SET";
            foreach($_POST as $key => $value)
            {
                $query .="`".$key."`='".$value."',";
            }
            // $query .="`description`='".$_POST['description']."',";
            // $query .="`title`='".$title."',";
            $query .= "`regdate`='".date("Y-m-d", time())."'";
            echo $query;
            $result = mysqli_query($db0, $query);

            $url = "insta.php";
            // header("HTTP/1.1 301/Moved Permanetly");
            header("location:".$url);
        }
        
    } else {
        echo "접속실패";
    }

    echo "새글을 작성합니다.";
    if(isset($_POST['title'])) {
        echo "작성한 새글은=".$_POST['title'];
    }
    

    $form = file_get_contents("../resource/new.html");
    echo $form;

    

?>