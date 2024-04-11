<?php
// Include database configuration file
include('./config/database.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if form was submitted
    if (isset($_POST['submit'])) {
        // Get form data
        $c_category = $_POST['c_category'];
        $c_description = $_POST['c_description'];

        // Prepare SQL statement using prepared statements to prevent SQL injection
        $sql = "INSERT INTO `pos_categori` (`c_category`, `c_description`) VALUES (?, ?)";
        
        // Prepare the SQL statement
        $stmt = mysqli_prepare($conn, $sql);
        
        // Bind parameters to the prepared statement
        mysqli_stmt_bind_param($stmt, "ss", $c_category, $c_description);
        
        // Execute the prepared statement
        $result = mysqli_stmt_execute($stmt);

        // Check if query was successful
        if ($result) {
            header("Location: category.php?msg=Successfully Added");
            exit(); // Ensure that script execution stops after redirection
        } else {
            echo "Failed: " . mysqli_error($conn);
        }

        // Close statement
        mysqli_stmt_close($stmt);
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel-Add Category</title>
  
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


  <div class="container mt-4">
    <div class="row">
      <div class="col-md-10 ms-auto p-4 overflow-hidden">

        <div class="card">
          <div class="card-header mb-4">
            <h4 class="mt-4">Add New Category</h4>
          </div>
        
          <div class="card-body">
              <form action="" method="post"  >
                <div class="row mb-3">
                  <div class="col">
                    <lable class="form-label">Category Name:</lable>
                    <input type="text"  required class="form-control mt-2" name="c_category">
                  </div>
                </div>

                <div class="row mb-3">
                  <div class="col">
                     <label class="form-label">Description:</label>
                      <textarea required class="form-control mt-2" row="2" name="c_description"></textarea>
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
    </div> 
  </div>
</body>  
</html>