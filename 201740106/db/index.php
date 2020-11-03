<?php

// 객체를 생헝
// () <== 값을 전달해 주는 역할
// 객체를 생성을 하는데...(객체를 만드는 과정중...)
// 인자값을 전달...
$db=new mysqli("localhost","daelim5","123456","phpdaelim5");
if($db->connect_error){
    echo "DB 접속 성공"."<br>";
    $query="select *from phpdaelim5.members."; //sql 쿼리문
    $result=mysqli_query($query); //DB서버도 전송

    if($result){
        $row=mysqli_fetch_object($result);
        printf_r($row);
    } else {
        echo "데이터 읽기 실패";
    }

}else{

    echo "DB 접속 실패";
    
}


