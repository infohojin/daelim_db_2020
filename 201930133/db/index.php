<?php
    // 객체 생성 
    // () > 값을 전달해주는 역할
    // 인자값 전달..
    $db = new mysqli("localhost","dealim5","1234","phpdaelim5");
    if ($db->connect_error){
        echo "db 접속 성공"."<br>";
        $query = "select * from phpdaelim5.members;"; //sql 쿼리문
        $result = mysqli_query($db, $query); // db 서버로 전송
        if($result){
            $row = mysqli_fetch_object($result);
            print_r($row);
        }else{
            echo "데이터 읽기 실패";
        }
    } else{
        echo "db 접속 실패";
    }