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
    move_uploaded_file($_FILES['image']['tmp_name'],"sell/$image");
    
    $imaget=$_FILES['imaget']['name'];
    move_uploaded_file($_FILES['imaget']['tmp_name'],"sell/$imaget");
    
    $imagetr=$_FILES['imagetr']['name'];
    move_uploaded_file($_FILES['imagetr']['tmp_name'],"sell/$imagetr");

$description=$_POST['description'];
$dprice=$_POST['dprice'];
$price=$_POST['price'];
$location=$_POST['location'];
$descr=$_POST['descr'];

$ins="insert into sell ( imgo,imgt,imgtr,description,dupprice,price,location,descr)
 VALUES ('$image','$imaget','$imagetr','$description','$dprice','$price','$location','$descr')";

 $insertstatus=mysqli_query($conn,$ins);
	
 if($insertstatus)
 {
     echo "<script>alert('succes');location.href='sell.php?'</script>"; 
 }else
 {
  echo "<script>alert('fail');location.href='nav.php?'</script>"; 

  }
echo "<script>location.href='nav.php?'</script>";

}

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
   

      <form method="post" action="" enctype='multipart/form-data'>
    <div class="container">
        <div class="row"> 
        <h3 class="text-white text-center mt-2">Add Mobile Cover Details</h3>

            <div class="col-md-3 mt-3 bg-info">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">image of product 1</label>
    <input type="file" class="form-control" id="emailexample"name="image" aria-describedby="emaiHelp" required>
    <div id="emailHelp" class="form-text" ></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">image of product 2</label>
    <input type="file" class="form-control" id="emailexample"name="imaget" aria-describedby="emaiHelp" required>
    <div id="emailHelp" class="form-text" ></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">image of product 3</label>
    <input type="file" class="form-control" id="emailexample"name="imagetr" aria-describedby="emaiHelp" required>
    <div id="emailHelp" class="form-text" ></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Description</label>
    <textarea type="text" class="form-control" id=""name="description" required></textarea>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">duplicate price</label>
    <input type="number" class="form-control" id="emailexample"name="dprice" aria-describedby="emaiHelp" required>
    <div id="emailHelp" class="form-text" ></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">price</label>
    <input type="number" class="form-control" id="emailexample"name="price" aria-describedby="emaiHelp" required>
    <div id="emailHelp" class="form-text" ></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">adress or location</label>
    <input type="text" class="form-control" id="emailexample"name="location" aria-describedby="emaiHelp" required>
    <div id="emailHelp" class="form-text" ></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">full Description</label>
    <textarea type="text" class="form-control" id=""name="descr" required></textarea>
  </div>
  
  <button type="submit" class="btn btn-light my-3" name="submit">Submit</button>
</div>
</form>
<div class="col-md-9  mt-3">
<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Image1</th>
      <th scope="col">Image2</th>
      <th scope="col">Image3</th>
      <th scope="col">Model</th>

      <th scope="col">dprice</th>
      <th scope="col">price</th>
      <th scope="col">location</th>

      <th scope="col">Description</th>
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

        
        <td><img src="sell/<?php echo $row['imgo'] ?>" width="50" height="50" ></td>
        <td><img src="sell/<?php echo $row['imgt'] ?>" width="50" height="50" ></td>
        <td><img src="sell/<?php echo $row['imgtr'] ?>" width="50" height="50" ></td>

        <td><?php echo $row['description']; ?></td>
        <td><?php echo $row['dupprice']; ?></td>
        <td><?php echo $row['price']; ?></td>

        <td><?php echo $row['location']; ?></td>

        <td><?php echo $row['descr']; ?></td>

       


        <td><a class="btn btn-danger" href="selldelete.php?id=<?php echo $row['id']; ?>">Delete</a></td>


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