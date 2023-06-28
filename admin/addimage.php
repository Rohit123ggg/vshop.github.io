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
if (isset($_POST['submit'])) {
$image=$_FILES['image']['name'];
move_uploaded_file($_FILES['image']['tmp_name'],"addimage/$image");

$imagetwo=$_FILES['imagetwo']['name'];
move_uploaded_file($_FILES['imagetwo']['tmp_name'],"addimage/$imagetwo");

$imagetr=$_FILES['imagetr']['name'];
move_uploaded_file($_FILES['imagetr']['tmp_name'],"addimage/$imagetr");


$ins="insert into addimages ( image, imagetwo, imagetr)
 VALUES ('$image','$imagetwo','$imagetr')";

 $insertstatus=mysqli_query($conn,$ins);
	
 if($insertstatus)
 {
     echo "<script>alert('succes');location.href='addimage.php?'</script>"; 
 }else
 {
  echo "<script>alert('fail');location.href='nav.php?'</script>"; 

  }
echo "<script>location.href='nav.php?'</script>";

}

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
    
  
  </head>
<body>
   

      <form method="post" action="" enctype='multipart/form-data'>
    <div class="container">
        <div class="row"> 
        <h3 class="text-white text-center mt-2">Add New Product image Details</h3>
            <div class="col-md-3 mt-3 bg-info">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">image One</label>
    <input type="file" class="form-control" id="emailexample"name="image" aria-describedby="emaiHelp" required>
   
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Second Image</label>
    <input type="file" class="form-control" id="exampleInputPassword1"name="imagetwo" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Third Image</label>
    <input type="file" class="form-control" id="exampleInputPassword1"name="imagetr" required>
  </div>
  
  
  
  <button type="submit" class="btn btn-light my-3" name="submit">Submit</button>
</div>
</form>
<div class="col-md-9  mt-3">
<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col"> Image One</th>
      <th scope="col">Image Two</th>

      <th scope="col">Image Three</th>
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

        
        <td><img src="addimage/<?php echo $row['image'] ?>" width="50" height="50" ></td>

        <td><img src="addimage/<?php echo $row['imagetwo'] ?>" width="50" height="50" ></td>

        <td><img src="addimage/<?php echo $row['imagetr'] ?>" width="50" height="50" ></td>

       


        <td><a class="btn btn-danger" href="deleteimage.php?id=<?php echo $row['id']; ?>">Delete</a></td>


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