<?php
    session_start(); //세션 사용한다고 선언해줌.

    $_SESSION["test"] = "123"; //세션변수 test 에 123 값을 넣어줌.

    echo $_SESSION["test"]; // 세션변수값을 표시해줌.
?>