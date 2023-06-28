<?php 

include "db.php"; 

if (isset($_GET['id'])) {

    $user_id = $_GET['id'];

    $sql = "DELETE FROM `feedback` WHERE `id`='$user_id'";

     $result = $conn->query($sql);

     if ($result == TRUE) {

        echo "<script>alert('Item Succesfully Deleted');
    window.location='feedback.php'</script>";

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }
} 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
   <button> <a href="create.php">Register page</a></button>
</body>
</html>