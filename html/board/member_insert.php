<?php
    include "../db.php";

    $id = $_POST["id"];
    $pw = $_POST["pw"];
    $name = $_POST["name"];

    # 변수를 사용해서 sql문 작성
    $sql = "
    INSERT INTO member (id,pw,name)
    VALUES ('". $id ."','". $pw ."','".$name."');
    ";

    // echo $sql;

    // exit();

    # mysql에 쿼리 수행
    $conn->query($sql);

    # mysql과의 연결 종료
    $conn->close();

?>
    
    <script>
    
        location.href="login.php";
    
    </script>