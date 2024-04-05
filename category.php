<?php
include('./config/database.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel-Category</title>
  
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
      <div class="col-sm-10 ms-auto p-4 overflow-hidden">
        <h3>Categories</h3> 
        <p class="text-muted">You can view all the categories here. </p>
       
        <div class="card mt-4"> 
          <div class="card-body">
          <a href="./add_category.php" class="btn btn-dark btn-sm">Add Category</a>
            <table class="table table-bordered table-hover mt-4">
                    <thead>
                        <tr class="table-dark">
                            <th width="30" style="text-align: center; ">Category ID</th>
                            <th width="100" style="text-align: center; ">Category Name</th>
                            <th width="200" style="text-align: center; ">Description</th>  
                            <th width="30" style="text-align: center;">Edit</th>
                            <th width="30" style="text-align: center;">Delete</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php
                    $query = "SELECT * FROM pos_categori";
                    $result = mysqli_query($conn, $query);


                       if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                          $id=$row['c_id'];
                          $category=$row['c_category'];
                          $description=$row['c_description'];
                          
                          echo '<tr>
                          <th scope="row" style="text-align: center;">'.$id.'</th>
                          <td style="text-align: center;">'.$category.'</td>
                          <td style="text-align: center;">'.$description.'</td>
                          <td style="text-align: center;">
                            <a href="update_category.php?updateid='.$id.'" class="text-light"><button class="btn btn-success btn-sm">Edit</button></a>
                          </td>
                          <td style="text-align: center;">
                            <a href="delete_category.php?deleteid='.$id.'" class="text-light"><button class="btn btn-danger btn-sm">Delete</button></a>
                          </td>
                          </tr>';
                        }
                        
                       }else {
                        echo "No Record found";
                       }
                            ?>
              </tbody>
            </table>
          </div>
        </div>   
      </div>
    </div>
  </div>
  
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>
</body>
</html>