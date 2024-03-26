<?php
include('./config/database.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  
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
        <a href="#" class="sidebar-link">
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
        <h4 class="mb-4 text-center">Account Management</h4>
      <table class="table table-bordered table-hover mt-3 ">
            <thead>
                <tr class="table-dark">
                    <th width="100" style="text-align: center;">#</th>
                    <th width="150" style="text-align: center; ">Fullname</th>
                    <th width="150" style="text-align: center;">Email Address</th>
                    <th width="100" style="text-align: center;">Username</th>
                </tr>
            </thead>
            <tbody>
              
                <?php
                    $query = "SELECT * FROM pos_users";
                    $query_run = mysqli_query($conn, $query);

                        if(mysqli_num_rows($query_run)> 0)
                                {
                                  foreach ($query_run as $account) {
                            ?>
                                     <tr class="align-text-center">
                                       <td><?= $account['u_id'];?></td>
                                       <td><?= $account['u_name'];?></td>
                                       <td><?= $account['u_email'];?></td>
                                       <td><?= $account['u_username'];?></td>
                                     </tr>
                             <?php
                                    }

                                 }else{
                                  echo "No record found";
                                }
                            ?>
                        </tbody>
                    </table>

      </div>
    </div>
  </div>
</body>
</html>