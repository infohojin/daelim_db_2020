<?php
    // 단어 두개가 연결 될 때 가독성을 위해서?!
    // ⓐ 단어마다 언더바로 구분 = snack case (user_name)
    // ⓑ 다른 단어는 첫 글자를 대문자로 해서 구분 = camel case (userName)

    namespace modules\yeeun;

    // class 이름은 ⓑ camel case로 작성하는것이 추천됨.
    class daelimUniv{
        public function hello($name)
        {
            echo $name;
        }
    }
    $obj = new \modules\yeeun\daelimUniv;
    $obj->hello("class02.php");