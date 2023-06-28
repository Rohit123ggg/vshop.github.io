<?php
include 'nav/navbar.php';
include 'admin/db.php';
include 'allcss.php';
$sql = "SELECT * FROM addimages";

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
   hr{
    color:black;
   }
   .text-dark{
      text-align:start;
     }
     .text-success{
      text-align:start;

     }
     .grid-container{
      
  display: grid;
  grid-template-columns: auto auto auto auto auto auto;
  gap: 10px;
  background-color: #2196F3;
  padding: 10px;
}
   
   </style>
</head>
<body>
  
<div class="container"> 
    <div class="row"> 
    <?php

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

?>
<div id="carouselExampleRide"  class="carousel slide " data-bs-ride="true">
  <div class="carousel-inner my-3">
    <div class="carousel-item active">
    <img src="admin/addimage/<?php echo $row['image'] ?>" class="d-block w-100 " height="200mvh" width="auto">
    </div>
    <div class="carousel-item">
    <img src="admin/addimage/<?php echo $row['imagetwo'] ?>" class="d-block w-100 " height="200mvh" width="auto">
    </div>
    <div class="carousel-item">
    <img src="admin/addimage/<?php echo $row['imagetr'] ?>" class="d-block w-100 " height="200mvh" width="auto">
    </div>
  </div>
  
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true">
    <?xml version="1.0" ?><svg id="Layer_1" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M297.2,478l20.7-21.6L108.7,256L317.9,55.6L297.2,34L65.5,256L297.2,478z M194.1,256L425.8,34l20.7,21.6L237.3,256  l209.2,200.4L425.8,478L194.1,256z"/></svg>
    </span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"><?xml version="1.0" ?><svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><defs><style>.cls-1{fill:#231f20;}</style></defs><title/><g data-name="Layer 2" id="Layer_2"><path class="cls-1" d="M16.88,15.53,7,5.66A1,1,0,0,0,5.59,7.07l9.06,9.06-8.8,8.8a1,1,0,0,0,0,1.41h0a1,1,0,0,0,1.42,0l9.61-9.61A.85.85,0,0,0,16.88,15.53Z"/><path class="cls-1" d="M26.46,15.53,16.58,5.66a1,1,0,0,0-1.41,1.41l9.06,9.06-8.8,8.8a1,1,0,0,0,0,1.41h0a1,1,0,0,0,1.41,0l9.62-9.61A.85.85,0,0,0,26.46,15.53Z"/></g></svg></span>
    <span class="visually-hidden">Next</span>
  </button>
  </div>
  <?php  
       }

}
?>


<?php
$sql = "SELECT * FROM addmobile";

$result = $conn->query($sql);
?>

  <?php

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

?>
      
  <div class="col-md-6 mycard3" >
    
            <div class="card my-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4 p-2">
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
</div>
</div>
<?php       }

}
?> 

</div>
</div>


    <?php
    include 'f.php';
    ?>
</body>
</html>
