<?php
    include "../db.php";
?>
<html>
    <head>
        <title>나만의 게시판</title>
    </head>
    <body>
        <center>
        <form method="post" action="session.php">
            <input type="text" name="id" placeholder="로그인 아이디"> <br />
            <input type="password" name="pw" placeholder="로그인 패스워드"> <br />
            <input type="submit" value="로그인">
        </form>
        <br />
        <br />
        아이디가 없으신가요? <a href='join.php'>무료로 회원가입하기</a>
        </center>
</body>
</html>