<?php
include 'nav/navbar.php';
include 'admin/db.php';
include 'allcss.php';
$sql = "SELECT * FROM addmobile";

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
    <style>
     .text-dark{
      text-align:start;
     }
     .text-success{
      text-align:start;

     }

     </style>
</head>
<body>
<div class="container" >
        <div class="row ">
        <div id="float">
      <h4>MOBILES</h4>
      <hr>
    </div>
<?php

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

?>
    
            <div class="col-md-6 mycard3" >
            <div class="card my-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4 mt-5">
      <img src="admin/addmobile/<?php echo $row['image'] ?>" class="img-fluid rounded-start " alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
      <h5 class="card-title"><?php echo $row['model']; ?></h5>

        <h6 class="card-title"><?php echo $row['ram']; ?></h6>
  
        <li class="text-dark"><?php echo $row['display']; ?></li>


        <li  class="text-dark"><?php echo $row['camera']; ?></li>

         <li  class="text-dark"><?php echo $row['battery']; ?></li>

            <li  class="text-dark"><?php echo $row['warranty']; ?></li>
       

        <p class="card-text"></p>
        <li class="card-text text-success"><b>Available</b></li>

      </div>
    </div>
  </div>
</div></div>
     
<?php       }

}

?>
</div></div>

<?php
include 'f.php';

?>
</body>
</html>