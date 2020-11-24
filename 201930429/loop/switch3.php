<?php

    // 게임메시지

    $weapon = ["knife", "gun", "hatchet"];
    for($i=0; $i<count($weapon); $i++) {
        // echo $weapon[$i];
        /*
        if($weapon[$i] == "knife") {
            echo "<b>칼</b>로 공격을 합니다.";
        } else if ($weapon[$i] == "gun") {
            echo "<b>총</b>으로 공격을 합니다.";
        } else if ($weapon[$i] == "hatchet") {
            echo "<b>손도끼</b>로 공격을 합니다.";
        }
        */
        /*
        switch($weapon[$i]) {
            case 'knife':
                echo "<b>칼</b>로 공격을 합니다.";
                break; // switch 끝남
            case 'gun':
                echo "<b>총</b>으로 공격을 합니다.";
                break; // switch 끝남
            case 'hatchet':
                echo "<b>손도끼</b>로 공격을 합니다.";
                break; // switch 끝남
        }
        */

        $func = $weapon[$i];
        $func();

        print "<br>";
    }

    // 상태패턴 호출방식
    function knife() {
        echo "<b>칼</b>로 공격을 합니다.";
    }

    function gun() {
        echo "<b>총</b>로 공격을 합니다.";
    }

    function hatchet() {
        echo "<b>손도끼</b>로 공격을 합니다.";
    }

?>