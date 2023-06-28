<?php
include 'navs.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <link rel="icon" type="image/x-icon" href="/images/icon.ico">
     
</head>
<body>
<nav class="navbar navbar-expand-lg " id="navbar_top" style="background-image:linear-gradient(to left top,rgb(20, 75, 255),rgb(255, 91, 214))">
  <div class="container-fluid">
    <a class="navbar-brand text-white" href="#">V mobile Shop</a>
    <button class="navbar-toggler" onclick="myFunction()" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="index.php">Home</a>
        </li>
		
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="mobile.php">Mobile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="headphone.php">Headphone</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="bcover.php">Mobile Covers</a>

        </li>
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="buy.php">BUY & SELL</a>

        </li>
        

        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="admin/index.php">Admin</a>
        </li>
      </ul>
     
      <form class="d-flex text-center" role="search" >
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"  id="authorSearch" >

      </form>
    </div>
  </div>
</nav>



<script>
  const authorSearch = document.getElementById('authorSearch');
  authorSearch.addEventListener('keyup', e => {
    let currentValue = e.target.value.toLowerCase();
    let authors = document.querySelectorAll('h5.card-title');
    authors.forEach(author => {
      if (author.textContent.toLowerCase().includes(currentValue)) {
        author.parentNode.parentNode.parentNode.style.display = 'block';
        
      }else{
        author.parentNode.parentNode.parentNode.style.display = 'none';
      }
    })
  });
  
  
  </script>
<script>
  function myFunction() {
    var x = document.getElementById("navbarSupportedContent");
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
  }
  </script>
<script>
    document.addEventListener("DOMContentLoaded", function(){
window.addEventListener('scroll', function() {
    if (window.scrollY > 50) {
      document.getElementById('navbar_top').classList.add('fixed-top');
      // add padding top to show content behind navbar
      navbar_height = document.querySelector('.navbar').offsetHeight;
      document.body.style.paddingTop = navbar_height + 'px';
    } else {
      document.getElementById('navbar_top').classList.remove('fixed-top');
       // remove padding top from body
      document.body.style.paddingTop = '0';
    } 
});
}); 
</script>



</body>
</html>