<?php
//객체를 만드는 과정->값을 전달
$db = new mysqli("localhost","daelim5","123456","phpdaelim5");
if($db ->connect_error)
{
    echo "db접속성공<br>";
    $query = "select * from members"; //쿼리문
    $result = mysqli_query($query);//디비 서버로전송
    if($result)
    {
        $row = mysqli_fetch_object($result);
        print_r($row);
    }
}else
{
    echo "db접속실패";
}