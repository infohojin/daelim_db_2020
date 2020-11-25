<?php

include "theme.conf.php";
include "../dbinfo.php";

$db0 = new mysqli(
    $dbinfo['master']['dbhost'],
    $dbinfo['master']['dbuser'],
    $dbinfo['master']['dbpass'],
    $dbinfo['master']['dbschema'],
    $dbinfo['master']['dbport']
);

    echo "게시물을 삭제합니다.";
    print_r($_GET);

    if(isset($_GET['id'])) {
        // 삭제루틴
        echo "삭제를 합니다...";

        if ($db0) {
            // echo "DB작업을 할 준비가 되어 있어요.";

            //ex2. 여기에서 삽입하는 DB 작업

            //ex3. 여기에서 실제 수정 DB 작업

            //ex4. 여기에서 실제 삭제 DB 작업
            $query = "DELETE FROM `phpdaelim5`.`insta` WHERE (`id` = '".$_GET['id']."');"; //SQL 문장을 (변수)저장
            $result = mysqli_query($db0, $query);

            if($result) {
                echo "<br>삭제 성공";
            }


        } else {
            echo "접속 실패";
        }

        

    } else{
        echo "삭제할 게시물이 없습니다.";

        //ex1. 목록을 출력하는 select
        // .... 작업

        //ex2. 삽입할 때
        //여기에 입력 받을 수 있는 목록을 출력

        //ex3. 수정할 때
        // 여기에서 DB조회, 수정항목들을 표시

        //ex4. 삭제
        // 만일 삭제하기 전에 메시지를 출력해줘야 한다?
    }

?>