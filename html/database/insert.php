<?php

include "conn.php";

$sql = "
INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')
";

$conn->query($sql);

$conn->close();


?>