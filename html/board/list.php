<?php 
    include "../db.php";

    if($_SESSION["board_name"] == '')
        $_SESSION["board_name"] = "자유";

    $total_sql = "SELECT count(*) as total FROM board";

    $total_result = $conn->query($total_sql);
    $total_row = $total_result->fetch_row();

    $config_list_set_count = 8; //리스트에 표시할 게시물 수 
    $config_list_max_count = 5; //하단 페이지를 몇개까지 표시할 것인가
    $now_page = $_GET['now_page'];  //현재 위치한 페이지
    $total_count = $total_row[0]; //전체 게시물 수
    $total_page_count = ceil($total_count/$config_list_set_count);
 
    if($now_page == '')
        $now_page = 1;

    $sql = "
    SELECT 
        _id,
        name,
        title,
        view_count 
    FROM 
        board 
    WHERE
        board_name = '".$_SESSION['board_name']."'
    order by _id desc
    LIMIT ".$config_list_set_count * ($now_page-1).",".$config_list_set_count."
    ";

    
 
 
    $result = $conn->query($sql);
     
    $conn->close();

?>
<html>
    <head>
        <title>나만의 게시판</title>
    </head>
    <body>

        게시판 바로가기 : 
        <a href='board_change.php?board_name=자유'>자유게시판</a>
        <a href='board_change.php?board_name=장터'>장터게시판</a>
        <a href='board_change.php?board_name=임시'>임시게시판</a>
        <hr>

        <table style="border:1px solid #000; width:100%">
            <tr>
                <td>번호</td>
                <td>제목</td>
                <td>작성자</td>
                <td>열람수</td>
            </tr>

<?php 
  
  while($row = $result->fetch_assoc()) { 
?>
            <tr>
                <td><?php echo $row["_id"]?></td>
                <td>
                    <a href="view.php?_id=<?php echo $row["_id"]?>"><?php echo $row["title"]?></a> 
                    <a href="delete.php?_id=<?php echo $row["_id"]?>"> [삭제]</a>
                </td>
                <td><?php echo $row["name"]?></td>
                <td><?php echo $row["view_count"]?></td>
            </tr> 
<?php 
    }
?>

        </table> <br />

        <?php 
        
            $start = $now_page-$config_list_max_count;
            if($start <= 0)
            {
                $start = 1;
            }

            $end = $now_page + $config_list_max_count;
            if($end > $total_page_count)
            {
                $end = $total_page_count;
            }
        
            for($i=$start;$i<=$end;$i++){

                if($i == $now_page)
                {
                    echo "[<b>";
                }

                echo " <a href='list.php?now_page=".$i."'>".$i."</a> ";
                
                if($i == $now_page)
                {
                    echo "</b>]";
                }

            }   

        ?>

        <br />

        <a href="input.php">글쓰기</a>

    </body>
</html>
