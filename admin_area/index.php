<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- bootstrap css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <!-- font awesome link -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- css file -->
   <link rel="stylesheet" href="../style.css">
   <style>
    .admin{
    width: 100px;
    object-fit: contain;
}
   </style>
</head>
<body>
    <!-- navbar -->
     <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-primary">
            <div class="container-fluid">
                <img src="../image/img1.png" alt="" class="logo">
                <nav class="navbar navbar-expand-lg navbar light bg-primary">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="" class="nav-link">Welcome guest</a>
                        </li>
                    </ul>
                 </nav>
            </div>
        </nav>
     <!-- second -->
     <div class="bg-light">
        <h3 class="text-center p-2">Manage Details</h3>
     </div>
     <!-- third -->
     <div class="row">
        <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
            <div>
                <a href="#"><img src="../image/r.jpg"alt="" class="admin"></a>
                <p class="text-light text-center">Admin</p>
            </div>
            <div class="button text-center">
                <button><a href="insert_product.php" class="nav-link text-light bg-primary my-1">insert products</a></button>
                <button><a href="" class="nav-link text-light bg-primary my-1">view products</a></button>
                <button><a href="index.php?insert_category" class="nav-link text-light bg-primary my-1">insert categories</a></button>
                <button><a href="" class="nav-link text-light bg-primary my-1">view categories</a></button>
                <button><a href="" class="nav-link text-light bg-primary my-1">orders</a></button>
                <button><a href="" class="nav-link text-light bg-primary my-1">payments</a></button>
                <button><a href="" class="nav-link text-light bg-primary my-1">login users</a></button>
                <button><a href="" class="nav-link text-light bg-primary my-1">logout</a></button>
            </div>
        </div>
     </div>
     </div>

       <!-- fourth -->
       <div class="class-container my-3">
        <?php
         if(isset($_GET['insert_category'])){
            include('insert_categories.php');
         }
        ?>
       </div>


 <!-- bootstrap js link -->
 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>