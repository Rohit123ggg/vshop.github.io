
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
       <div class="col-md-4">  
    <div class="card mycard2"   >
    <img src="admin/sell/<?php echo $row['imgo'] ?>" class="card-img-top " alt="Mobile Back cover"height="200px" width="150px">
      <div class="card-body">
        <del><p class="card-title"><i class="fa fa-inr"> </i><?php echo $row['dupprice']; ?></p></del>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">


        <h5 class="card-text"><i class="fa fa-inr"> </i><?php echo $row['price']; ?></h5>
        <p class="card-text"><?php echo $row['description']; ?></p>
        <button type="button" class="btn btn-outline-dark"> <a href="buysell.php" style=color:black>BUY</a></button>

      </div>
    </div> </div>
 
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