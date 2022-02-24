<?php

include "../db.php";

$id = $_GET["_id"];

$sql = "
DELETE FROM board 
WHERE _id= ".$id."
";

// echo $sql;

$conn->query($sql);

$conn->close();

?>

<script>

    location.href="list.php";

</script>