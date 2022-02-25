<?php
    session_start(); // 세션의 시작 : 사용한다고 선언해줌.

    $_SESSION["test"] = "123"; // 세션 변수 테스트에 123값을 넣어줌.

    echo $_SESSION["test"]; // 세션 변수 값을 표시해줌.
?>