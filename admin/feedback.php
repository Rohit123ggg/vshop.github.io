<?php
/*$conn = new mysqli('localhost', 'root', '', 'vikram');

if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);

}*/
include 'db.php';
include 'navbars.php';
session_start();
if(!$_SESSION['auth'])
{
    header('location:index.php');
}

$sql = "SELECT * FROM feedback";

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    
  
  </head>
<body>
   

<div class="col-md mt-3">
<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
     
      <th scope="col">Email</th>

      <th scope="col">Feedback Massage</th>
      <th scope="col">Delete Item</th>


    </tr>
  </thead>
  <tbody>
    <tr>
    <?php

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

?>

        <tr>

        <td><?php echo $row['id']; ?></td>

        
        <td><?php echo $row['email']; ?></td>

        <td><?php echo $row['text']; ?></td>

       


        <td><a class="btn btn-danger" href="emaildelete.php?id=<?php echo $row['id']; ?>">Delete</a></td>


        </tr>                       

<?php       }

}

?>                

    </tr>
  </tbody>
</table>
</div>
</div></div>
</body>
</html>