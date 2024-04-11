<?php
include('./config/database.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel-Inventory Management</title>
  
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
   
<div class="container-fluid mt-4"> 
  <div class="row">
    <div class="col-lg-10 ms-auto p-4 overflow-hidden ">
    <h3>Inventory Management</h3>

    <div class="card">
      <div class="card-body mt-2">
      <table class="table table-bordered table-hover">
       
       <thead>
         <tr class="table-dark">
           <th width="50" style="text-align: center;">No.</th>
           <th width="150" style="text-align: center; ">Product Name</th>
           <th width="150" style="text-align: center;">Sales Date</th>
           <th width="100" style="text-align: center;">Price</th>
           <th width="100" style="text-align: center;">Sales Qnty</th>
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
</table>

      </div>
    </div>
     
</div>
</div>
</div>
  
</body>
</html>