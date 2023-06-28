<?php
include 'admin/db.php';

if (isset($_POST['submit'])) {

    $email=$_POST['email'];
    $text=$_POST['text'];

    $ins="insert into feedback (email,text) VALUES ('$email','$text')";
   
    $insertstatus=mysqli_query($conn,$ins);

 if($insertstatus > 0)
 {
     echo "<script>alert('Thanks for your feedback');location.href='index.php?'</script>";

     
 }else
 {
   echo "fail";
  }
echo "<script>alert('fail sorry ! Try Again')location.href='index.php?'</script>";
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
    <style>
       ul {
    list-style-type: none;
    color:white;
}
hr{
    color:white;
}
#primary{
    background-color: #4158D0;
background-image: linear-gradient(43deg, #4158D0 0%, #C850C0 46%, #FFCC70 100%);

}
a{
    text-decoration:none;
}
     
        </style>
</head>
<body>
    <div class="container-fluid  " id="primary">
      <div class="row -3">
      <div class="col-md-2 mt-3  ">
            
            <ul>
                <li><h5>SECTION</h5></li>
                 <li><a href="index.php" class="text-white">HOME</a></li>
                 <li><a href="mobile.php" class="text-white">MOBILES</a></li>
                 <li><a href="bcover.php" class="text-white">MOBILES COVER</a></li>

                 <li><a href="headphone.php" class="text-white">HEADPHONES</a></li>
                 <li><a href="buy.php" class="text-white">BUY & SELL</a></li>

                 <li><a href="admin/index.php" class="text-white">ADMIN</a></li>
                </ul>
        </div>
        <div class="col-md-3 mt-3">
            
                <ul> <li><h5>CONTACT US</h5></li>
                    <li>ADARSH MOBILE SHOP</li>
                 <li>ADDRESS:Opposite of Govt Hospital kamalnagar</li>
                 <li>KAMALNAGAR TQ:KAMALNAGAR DIST:BIDAR</li>
                 <li>Phone No : 8105680102</li></ul>
        </div>
        
        <div class="col-md-3 mt-3">
            
            <ul> <li><h5>TIMING </h5></li>
                <li>ADARSH MOBILE SHOP</li>
             <li>9:00 AM TO 10:00 PM</li>
             <li>MONDAY TO SUNDAY</li>
             <li>Phone No : 8105680102</li></ul>
    </div>

        <div class="col-md-4 mt-3">
        <form method="post" action="">   

            <ul> <li><h5>FEEDBACK </h5></li>
            <label>Enter Your Email</label><br>
                <input type="email" value="" palaceholder="Enter Your Email" name="email"><br><br>
                <label>Enter Your Thoughts</label><br>
                <textarea type="text" value="" name="text"></textarea><br><br>
                <button type="submit" class="btn btn-info" name="submit">Submit</button>
                </ul>     </form>         
    </div>
   
   
  
    <hr>
     
      <div class=" ">
        <ul><li>
        <p class="text-center">ADARSH MOBILE SHOP &COPY; ALL RIGHTS ARE RESERVED</p>
  
    </li></ul>
    </div></div>
      </div>
    </div>
</body>
</html>