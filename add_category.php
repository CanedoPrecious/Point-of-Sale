
<?php
include('./config/database.php');

if (isset($_POST['submit'])) {
    $c_name = $_POST['c_name'];
    $c_img= $_POST['c_img'];
    $c_description = $_POST['c_description'];

    $sql= "INSERT INTO `pos_categories`(`c_name`, `c_img`, `c_description`) 
    VALUES ('$c_name ',' $c_img','$c_description')";

    $result= mysqli_query($conn, $sql);

   if ($result) {
    header("Location: category.php?msg=Successfully Added");
   }
   else {
    echo "Failed: ". mysqli_error($conn);
   }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>POS</title>
  
   <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

   <!--Css-->
  <link rel="stylesheet" href="./assets/css/style.css">

   <!-- Font-awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" 
  integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" 
  crossorigin="anonymous" referrerpolicy="no-referrer"/>
</head>

<body>
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
    <div class="main ">
        <nav class="navbar expand px-3 border-bottom mb-5">
            <div class="navbar-collapse navbar align-items-center justify-content-between ">
                <h4>Tagoloan Public Market</h4>
                <button>Logout</button>
            </div>
        </nav>

        <div class="card">
        <div class="container mt-4">
            <div class=" text-center mb-4">
                <h4>Add New Category</h4>
                <p class="text-muted">Complete the form to add new Category</p>
                <hr>
             </div>
            </div>
        
            <div class="card-body">
                <form action="" method="post"  >
                    <div class="row mb-3">
                        <div class="col">
                            <lable class="form-label">Category Name:</lable>
                            <input type="text"  required class="form-control mt-2" name="c_name">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                          <lable class="form-label">Description:</lable>
                          <input type="textfield" required class="form-control mt-2" name="c_description">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-5">
                          <lable class="form-label">Upload image:</lable>
                          <input type="file"  required class="form-control mt-2" name="c_img">
                        </div>
                    </div>
                        
                    <div class="mt-4">
                        <button type="submit" class="btn btn-success" name="submit">Save</button>
                        <a href="./category.php" class="btn btn-danger">Cancel</a>
                    </div>
                </form>    
            </div> 
        </div>
    </div>
</div>
</body>
</html>