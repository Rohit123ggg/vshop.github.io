<?php
include 'db.php';
if (isset($_POST['submit'])) {

    $userid = $_POST['userid'];

    $password = $_POST['password'];

$sql = "SELECT * FROM user_log WHERE userid = '$userid' and password = '$password' ";

$res=mysqli_query($conn,$sql);

if (mysqli_num_rows($res) ==1)
   {
    session_start();
    $_SESSION['auth']='true';
     echo "<script>alert('Event Succesfully Submitted');
    window.location='nav.php'</script>";

   }
else
   {
    echo "<script>alert('Please Enter Valid userId or check password');
    window.location='/vikram/mobile.php'</script>";
   }
}
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
    
    <title>Adarsh Mobile Shop</title>
    <style>
    
        .backcol{
          background: rgb(2,0,36);
background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(121,9,88,1) 35%, rgba(0,255,222,1) 100%);
color:white;
        }
      
        .container{
          display:flex;
          justify-content:center;

        }
    </style>
</head>
<body>
<form method="post" action="">
    <div class="container">
        <div class="row mt-5"> 
        <h4>Admin LogIn</h4>

            <div class="col-md-12 backcol">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label mt-3">User Id</label>
    <input type="text" class="form-control" id="exampleInputEmail1"name="userid" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text text-white" > never share your User Id with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1"name="password">
  </div>
  
  <button type="submit" class="btn btn-primary my-3" name="submit">Submit</button></div></div>

</div>
</form>
<div class="container">

 
 <a href="/mobile.php" class="my-3">Back To Home</a> 
 </div>

</body>
</html>