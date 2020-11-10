<?php
    echo "데이터를 추가합니다.<br>";
    echo $_SERVER['REQUEST_URI'];

    echo "<br>";
  
    if(isset($_GET['title'])){

        echo "입력한 값은 = ".$_GET['title'];    
        $dbinfo = include "../dbinfo.php";
        //객체 생성
        $db0 = new mysqli(
                $dbinfo['master']['dbhost'],
                $dbinfo['master']['dbuser'],
                $dbinfo['master']['dbpass'],
                $dbinfo['master']['dbschema']
        );
        $query = "INSERT INTO `phpdaelim4`.`members` (`username`) VALUES ('".$_GET['title']."');";
        $result = mysqli_query($db0, $query);
    }else{
        echo "값이 없어요 ";
    }