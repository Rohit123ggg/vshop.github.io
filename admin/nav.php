<?php
/*$conn = new mysqli('localhost', 'root', '', 'vikram');

if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);

}*/
include 'navbars.php';
include 'db.php';
session_start();
if(!$_SESSION['auth'])
{
    header('location:index.php');
}
if (isset($_POST['submit'])) {
$image=$_FILES['image']['name'];
move_uploaded_file($_FILES['image']['tmp_name'],"addmobile/$image");
$modelno=$_POST['modelno'];
$ram=$_POST['ram'];
$display=$_POST['display'];
$camera=$_POST['camera'];
$battery=$_POST['battery'];
$warranty=$_POST['warranty'];

$ins="insert into addmobile ( image, model, ram, display, camera, battery, warranty)
 VALUES ('$image','$modelno','$ram','$display','$camera','$battery','$warranty')";

 $insertstatus=mysqli_query($conn,$ins);
	
 if($insertstatus)
 {
     echo "<script>location.href='nav.php?'</script>";

     
 }else
 {
   echo "fail";
  }
echo "<script>location.href='home.php?'</script>";

}

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
   
  
  </head>
<body>
   

      <form method="post" action="" enctype='multipart/form-data'>
    <div class="container">
        <div class="row"> 
        <h3 class="text-white text-center mt-2">Add phone Details</h3>

            <div class="col-md-3 mt-3 bg-info">

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">image of product</label>
    <input type="file" class="form-control" id="emailexample"name="image" aria-describedby="emaiHelp" required>
    <div id="emailHelp" class="form-text" ></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Model No</label>
    <input type="text" class="form-control" id="exampleInputPassword1"name="modelno" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">ROM / RAM</label>
    <input type="text" class="form-control" id="exampleInputPassword1"name="ram" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Display</label>
    <input type="text" class="form-control" id="exampleInputPassword1"name="display" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Camera</label>
    <input type="text" class="form-control" id="exampleInputPassword1"name="camera" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Battery</label>
    <input type="text" class="form-control" id="exampleInputPassword1"name="battery" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Warranty</label>
    <input type="text" class="form-control" id="exampleInputPassword1"name="warranty" required>
  </div>
  
  <button type="submit" class="btn btn-light my-3" name="submit">Submit</button>
</div>
</form>
<div class="col-md-9  mt-3">
<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Mobile Image</th>
      <th scope="col">Model No</th>

      <th scope="col">Ram</th>
      <th scope="col">Display</th>
      <th scope="col">Camera</th>
      <th scope="col">Battery</th>
      <th scope="col">Warranty</th>
      <th scope="col">Delete</th>

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

        
        <td><img src="addmobile/<?php echo $row['image'] ?>" width="50" height="50" ></td>

        <td><?php echo $row['model']; ?></td>

        <td><?php echo $row['ram']; ?></td>

        <td><?php echo $row['display']; ?></td>

        <td><?php echo $row['camera']; ?></td>

        <td><?php echo $row['battery']; ?></td>

        <td><?php echo $row['warranty']; ?></td>


        <td><a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>


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