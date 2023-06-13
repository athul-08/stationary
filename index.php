<!-- connect file -->
<?php
include('includes/connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerse Website using PHP and MySql..</title>
    <!-- bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- css file -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- navbar -->
      <div class="container-fluid p-0">
        <!-- first child -->
    <nav class="navbar navbar-expand-lg navbar-light bg-ifo">
  <div class="container-fluid">
    <img src="./image/img1.png" alt="" class="logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa-sharp fa-solid fa-cart-shopping"></i><sup>1</sup></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Total Price:</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
 <!-- second child -->
 <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
  <ul class="navbar-nav me-auto">
  <li class="nav-item">
          <a class="nav-link" href="#">Welcome Guest</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Login</a>
        </li>
  </ul>
 </nav>
 <!-- third child -->
 <div class="bg-light">
  <h3 class="text-center">Stationary store</h3>
  <p class="text-center">the products you need.</p>
 </div>

 <!-- fourth child -->
 <div class="row">
  <div class="col-md-10">
  <!-- products -->
     <div class="row">
       <div class="col-md-4 mb-2">
       <div class="card">
  <img src="./image/r.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Add to Cart</a>
    <a href="#" class="btn btn-secondary">View more</a>
  </div>
</div>
       </div>
       <div class="col-md-4 mb-2">
       <div class="card">
  <img src="./image/w.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Add to Cart</a>
    <a href="#" class="btn btn-secondary">View more</a>
  </div>
</div>
       </div>
       <div class="col-md-4 mb-2">
       <div class="card">
  <img src="./image/ch.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Add to Cart</a>
    <a href="#" class="btn btn-secondary">View more</a>
  </div>
</div>
       </div>
       <div class="col-md-4">
       <div class="card">
  <img src="./image/ch.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Add to Cart</a>
    <a href="#" class="btn btn-secondary">View more</a>
  </div>
</div>
       </div>
       <div class="col-md-4 mb-2">
       <div class="card">
  <img src="./image/ch.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Add to Cart</a>
    <a href="#" class="btn btn-secondary">View more</a>
  </div>
</div>
       </div>
       <div class="col-md-4 mb-2">
       <div class="card">
  <img src="./image/ch.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Add to Cart</a>
    <a href="#" class="btn btn-secondary">View more</a>
  </div>
</div>
       </div>
     </div>
  </div>
  <div class="col-md-2 bg-secondary p-0">
    <!-- side nav -->
   <ul class="navbar nav me-auto text-center">
    <li class="nav-item bg-primary">
      <a href="#" class="nav-link text-light">categories</a>
    </li>
    <?php
     $select_categories="Select * from  `categories`";
     $result_categories=mysqli_query($con,$select_categories);
     //$row_data=mysqli_fetch_assoc($result_categories);
     while($row_data=mysqli_fetch_assoc($result_categories)){
      $category_title=$row_data['category_title'];
      $category_id=$row_data['category_id'];
      echo " <li class='nav-item'>
      <a href='index.php?categories=$category_id' class='nav-link text-light'>$category_title</a>
    </li>";
     }
    
    ?>
   </ul>
  </div>
 </div>
<!-- last child -->

<div class="bg-primary p-3 text-center">
    <p>all rights reserved</p>
</div>


<!-- bootstrap js link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>