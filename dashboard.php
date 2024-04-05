<?php

include('./config/database.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Dashboard</title>

    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="./assets/css/style.css">

   <!-- Font-awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" 
   integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" 
   crossorigin="anonymous" referrerpolicy="no-referrer"/>
   
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
   crossorigin="anonymous"></script>

</head>
<body>
  
<div class="container-fluid text-dark p-3 d-flex align-items-center justify-content-between sticky-top" style=" box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);">
    <h4 class="mb-0 h-font">TAGOLOAN PUBLIC MARKET </h4>
   
    <form action="./logout.php" method="post">
      <button type="submit" class="btn btn-danger" name="logout">Logout</button>
    </form> 
     
</div>

   
<div class="col-lg-2 bg-dark border-top border-3 border-secondary" id="dashboard-home">
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid flex-lg-column align-items-stretch">
      <h4 class="mt-2 text-light">Point of Sale</h4>
      <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="navbar">
        <ul class="nav nav-pills flex-column nav-hover">
          <li class=" sidebar-header h-font">Admin Management</li>
          <li class="sidebar-item">
            <a class="nav-link text-white" href="./dashboard.php">
              <i class="fa-solid fa-gauge pe-2"></i>Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="./product.php">
              <i class="fa-solid fa-file-lines pe-2"></i>Products
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="./category.php">
              <i class="fa-solid fa-file-lines pe-2"></i>Category
            </a>
          </li>
          <li class="sidebar-header h-font ">Inventory Management</li>
          <li class="nav-item">
            <a class="nav-link text-white" href="./inventory.php">
              <i class="fa-solid fa-clipboard-list pe-2"></i>Inventory
            </a>
          </li>
          <li class="sidebar-header h-font"> Sales Management</li>
          <li class="nav-item">
            <a class="nav-link text-white " href="./sales.php">
              <i class="fa-solid fa-cart-shopping pe-2"></i>Sales Report
            </a>
          </li>
          <li class="sidebar-header h-font"> Account Management
          </li>
          <li class="nav-item">
            <a class="nav-link text-white " href="./accounts.php">
              <i class="fa-solid fa-circle-user pe-2"></i>User
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</div>
    
  

<div class="container-fluid mt-4  ">
  <div class="row">
    <div class="col-xl-10 ms-auto p-4">
      <h5 class="mb-4">Dashboard</h5>

      <div class="row me-5 ">
       <div class="col-xl-3 col-md-6 ">
        <div class="card shadow bg-primary text-white mb-4">
          <div class="card-body">Total Product
          <?php
                $product = "SELECT * FROM `pos_product`";
                $sql = mysqli_query($conn, $product);

                if ($total = mysqli_num_rows($sql)) 
                {
                 echo '<h4 class="mb-0">'.$total.'</h4>';
                }else {
                  echo '<h4 class="mb-0">0</h4>';
                }
              ?>
          </div>
           <div class="card-footer d-flex align-items-center justify-contend-between">
             <a href="./product.php" class="small text-white stretched-link">View Details</a>
             <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-md-6">
          <div class="card shadow bg-warning text-white mb-4">
            <div class="card-body">Total Category
              <?php
                $category = "SELECT * FROM `pos_categori`";
                $sql = mysqli_query($conn, $category);

                if ($total = mysqli_num_rows($sql)) 
                {
                 echo '<h4 class="mb-0">'.$total.'</h4>';
                }else {
                  echo '<h4 class="mb-0">0</h4>';
                }
              ?>

            </div>
            <div class="card-footer d-flex align-items-center justify-contend-between">
              <a href="./category.php" class="small text-white stretched-link">View Details</a>
              <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-md-6">
            <div class="card shadow bg-danger text-white">
              <div class="card-body">Accounts
              <?php
                $account = "SELECT * FROM `pos_users`";
                $sql = mysqli_query($conn, $account);

                if ($total = mysqli_num_rows($sql)) 
                {
                 echo '<h4 class="mb-0">'.$total.'</h4>';
                }else {
                  echo '<h4 class="mb-0">0</h4>';
                }
              ?>
              </div>
              <div class="card-footer d-flex align-items-center justify-contend-between">
                <a href="./accounts.php" class="small text-white stretched-link">View Details</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
              </div>
            </div>
          </div>        


        <div class="row mb-5">
        <div class="col-xl-3 col-md-6">
            <div class="card shadow bg-secondary text-white">
              <div class="card-body">Sales Report</div>
              <div class="card-footer d-flex align-items-center justify-contend-between">
                <a href="./sales.php" class="small text-white stretched-link">View Details</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
              </div>
            </div>
          </div>

          
        <div class="col-xl-3 col-md-5">
          <div class="card shadow bg-success text-white mb-4">
           <div class="card-body">Inventory
           </div>
            <div class="card-footer d-flex align-items-center justify-contend-between">
             <a href="./inventory.php" class="small text-white stretched-link">View Details</a>
             <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
          </div>
        </div>


         
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>