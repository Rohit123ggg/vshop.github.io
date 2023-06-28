<?php
$conn = new mysqli('localhost', 'root', '', 'vikram');


#$conn = new mysqli('sql206.infinityfree.com', 'if0_34499608', '0ba9cJRahDJLpX', 'if0_34499608_vikrammobile');

if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);

}
?>