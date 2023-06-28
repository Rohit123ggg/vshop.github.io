
<?php
include 'nav/navbar.php';
include 'admin/db.php';
include 'allcss.php';
$sql = "SELECT * FROM sell";

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
    <div class="container">
        <div class="row " >
        <div id="float">
      <h4>BUY</h4>
      <hr>
    </div>
        <?php

if ($result->num_rows > 0) {

 while ($row = $result->fetch_assoc()) {

?>
       <div class="col-md-8 ">  
    <div id="carouselExampleRide"  class="carousel slide " data-bs-ride="true">
  <div class="carousel-inner my-3">
    <div class="carousel-item active">
    <img src="admin/sell/<?php echo $row['imgo'] ?>" class="d-block w-100 " height="200mvh" width="auto">
    </div>
    <div class="carousel-item">
    <img src="admin/sell/<?php echo $row['imgt'] ?>" class="d-block w-100 " height="200mvh" width="auto">
    </div>
    <div class="carousel-item">
    <img src="admin/sell/<?php echo $row['imgtr'] ?>" class="d-block w-100 " height="200mvh" width="auto">
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
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    </div> 
    <table class="table">
  <tbody>
    <tr>
      <th scope="row">PRICE OF PRODUCT</th>
      <td> <del><h4 class="card-title"><i class="fa fa-inr"> </i><?php echo $row['dupprice']; ?></h4></del></td>
    </tr>
    <tr>
      <th scope="row">AFTER DISCOUNT</th>
      <td> <h5 class="card-text"><i class="fa fa-inr"> </i><?php echo $row['price']; ?></h5></td>
     
    </tr>
    <tr>
      <th scope="row">MODEL </th>
      <td > <h5 class="card-text"><?php echo $row['description']; ?></h5>
</td>
    </tr>

    <tr>
      <th scope="row">LOCATION </th>
      <td > <h5 class="card-text"><?php echo $row['location']; ?></h5>
</td>
    </tr>
    <tr>
      <th scope="row">DISCRIPTION </th>
      <td > <h5 class="card-text"><?php echo $row['descr']; ?></h5>
</td>
    </tr>
   
  </tbody>
</table>
<DIV class='my-2'>
<button type="button" class="btn btn-outline-dark"> CONFORM</button>

</DIV>
<?php      
 }

}

?>  

</div>
    </div>
    <?php
    include 'f.php';
    ?>
</body>
</html>