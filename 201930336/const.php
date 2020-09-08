<?php
    // 예약어를 이용하여 함수를 설정
    const PI = 3.14;    // 변하지 말고 너는 3.14
    
    if(defined("PI")) {
        const PI = 3.141592;    // 그런데 3.141592로 해봐...
    }
    echo PI;