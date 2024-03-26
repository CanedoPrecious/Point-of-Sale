
<?php
include('./config/database.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sales Management</title>
  
   <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

   <!--Css-->
  <link rel="stylesheet" href="./assets/css/style.css">

   <!-- Font-awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" 
  integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" 
  crossorigin="anonymous" referrerpolicy="no-referrer"/>
</head>

<body >
  <div class="wrapper">
    <aside id="sidebar">
      <div class="h-100">
        <div class="sidebar-logo">
          <a href="">Point of Sale</a>
      </div>
      <ul class="sidebar-nav">
        <li class="sidebar-header">
          Admin Management
        </li>
        <li class="sidebar-item">
        <a href="./dashboard.php" class="sidebar-link">
         <i class="fa-solid fa-gauge pe-2"></i>Dashboard
        </a>
        </li>
        <li class="sidebar-item">
        <a href="./product.php" class="sidebar-link">
         <i class="fa-solid fa-file-lines pe-2"></i>Products
        </a>
        </li>
        <li class="sidebar-item">
        <a href="./category.php" class="sidebar-link">
         <i class="fa-solid fa-file-lines pe-2"></i>Category
        </a>
        </li>

        <li class="sidebar-header">
          Inventory Management
        </li>
        <li class="sidebar-item">
        <a href="./inventory.php" class="sidebar-link">
         <i class="fa-solid fa-clipboard-list pe-2"></i>
         Inventory
        </a>
      </li>

      <li class="sidebar-header">
          Sales Management
        </li>
      <li class="sidebar-item">
        <a href="./sales.php" class="sidebar-link">
        <i class="fa-solid fa-cart-shopping pe-2"></i>
        Sales Report
        </a>
      </li>

      <li class="sidebar-header">
          Account Management
        </li>
      <li class="sidebar-item">
        <a href="./accounts.php" class="sidebar-link">
        <i class="fa-solid fa-circle-user pe-2"></i>
        User
        </a>
      </li>
      </ul>
      </div>
    </aside>
    <div class="main">
    <nav class="navbar navbar expand px-3 border-bottom">
            <div class="navbar-collapse navbar align-items-center justify-content-between">
             <h4>Tagoloan Public Market</h4>
             <button class="btn btn-outline-dark">Logout</button>
            </div>
        </nav> 

        <div class="container mt-4">
        <h4 class="mb-4 text-center">Sales Management</h4>

        <table class="table table-bordered table-hover">
                    <thead>
                        <tr class="table-dark">
                        <th width="50" style="text-align: center;">No.</th>
                            <th width="150" style="text-align: center; ">Product Code</th>
                            <th width="150" style="text-align: center;">Sales Date</th>
                            <th width="100" style="text-align: center;">Price</th>
                            <th width="100" style="text-align: center;">Sales Qty</th>
                            <th width="50" style="text-align: center;">Total Amount</th>
                        </tr>
                    </thead>
                    <tbody>
    <tr>
      <th scope="row">1</th>
      <td>1001</td>
      <td>03-20-2024</td>
      <td>10</td>
      <td>10</td>
      <td>100</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>1002</td>
      <td>03-20-2024</td>
      <td>15</td>
      <td>10</td>
      <td>150</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>1005</td>
      <td>03-21-2024</td>
      <td>15</td>
      <td>10</td>
      <td>150</td>
    </tr>
    <tr>
   <th ></th>
      <td></td>
      <td></td>
      <td><h6 style="text-align: center; ">Total:</h6></td>
      <td><h6 style="text-align: center; ">30</h6></td>
      <td><h6 style="text-align: center; ">400</h6></td>
    </tr>
  </tbody>
        </div>
    </div>
  </div>
</body>
</html>