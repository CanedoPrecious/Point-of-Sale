
<?php
include('./config/database.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>POS</title>
  
   
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" href="./assets/css/style.css">

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
        <a href="./add_product.php" class="btn btn-dark">Add Product</a>
        <table class="table table-bordered table-hover mt-3 ">
            <thead>
                <tr class="table-dark">
                    <th width="100" style="text-align: center;">Product Code</th>
                    <th width="150" style="text-align: center; ">Product Name</th>
                    <th width="150" style="text-align: center;">Category</th>
                    <th width="100" style="text-align: center;">Stock</th>
                    <th width="100" style="text-align: center;">Price(Php)</th>
                    <th width="50" style="text-align: center;">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $query = "SELECT * FROM pos_product";
                    $query_run = mysqli_query($conn, $query);

                        if(mysqli_num_rows($query_run)> 0)
                                {
                                  foreach ($query_run as $product) {
                            ?>
                                     <tr class="align-text-center">
                                       <td><?= $product['P_code'];?></td>
                                       <td><?= $product['P_name'];?></td>
                                       <td><?= $product['P_category'];?></td>
                                       <td><?= $product['P_stock'];?></td>
                                       <td><?= $product['P_price'];?></td>

                                        <td style="padding-right: 10px;">
                                         <a href="./edit.php"  class="link-dark"> <i class= "fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                                         <a href="./delete.php" class="link-dark"><i class="fa-solid fa-trash fs-5 me-3"></i></a>
                                        </td>
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
