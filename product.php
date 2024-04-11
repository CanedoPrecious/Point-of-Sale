
<?php
include('./config/database.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>POS | Product</title>
  
   
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" href="./assets/css/style.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" 
  integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" 
  crossorigin="anonymous" referrerpolicy="no-referrer"/>
</head>

<body >

<div class="container-fluid text-light p-3 d-flex align-items-center justify-content-between sticky-top" style=" box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);">
  <h6 class="mb-0 h-font">TAGOLOAN PUBLIC MARKET </h6>

    
    <form action="./logout.php" method="post">
      <button type="submit" class="btn btn-danger" name="logout"><i class="fa-solid fa-right-from-bracket pe-2"></i>Logout</button>
    </form> 
     
</div>
<div class="col-lg-2 bg-dark" id="dashboard-home">
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid flex-lg-column align-items-stretch">
      <h4 class="mt-2 text-light">Point of Sale</h4>
      
      <div class="collapse navbar-collapse flex-column align-items-stretch" id="navbar">
        <ul class="nav nav-pills flex-column nav-hover">
          <li class="mt-3"></li>
          <li class="sidebar-item">
            <a class="nav-link text-white" href="./dashboard.php">
              <i class="fa-solid fa-gauge pe-2"></i>Dashboard
            </a>
          </li>
          <li class="mt-3"></li>
          <li class="nav-item">
            <a class="nav-link text-white" href="./product.php">
              <i class="fa fa-boxes pe-2"></i>Products
            </a>
          </li>
          <li class="mt-3"></li>
          <li class="nav-item">
            <a class="nav-link text-white" href="./category.php">
            <i class="fa-solid fa-tags pe-2"></i>Category
            </a>
          </li>
          <li class="mt-3"></li>
          <li class="nav-item">
            <a class="nav-link text-white" href="./inventory.php">
              <i class="fa fa-list pe-2"></i></i>Inventory
            </a>
          </li>
          <li class="mt-3"></li>
          <li class="nav-item">
            <a class="nav-link text-white " href="./sales.php">
              <i class="fa-solid fa-cart-shopping pe-2"></i>Sales
            </a>
          </li>
          
          <li class="mt-3"></li>
          <li class="nav-item">
            <a class="nav-link text-white " href="./accounts.php">
             <i class="fa fa-users pe-2"></i>User
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</div>

<div class="container-fluid">
  <div class="row">
    <div class="col-lg-10 ms-auto p-4 overflow-hidden ">
      <h5 class="mb-3"><i class="fa fa-boxes pe-2"></i>Products</h5>
     <a href="./add_product.php" class="btn btn-dark btn-sm mb-2"><i class="fa-solid fa-plus pe-2"></i>Add Product</a>

      <div class="card mt-2">
      <div class="card-body">   
      <?php
                    if (isset($_GET['success'])) {
                        ?>
                        <div class="alert alert-success">
                            <small>Product Successfully Added</small>. 
                        </div>
                        <hr>
                        <?php
                    } elseif (isset($_GET['update'])) {
                        ?>
                       <div class="alert alert-success">
                            <small>Product Updated</small>. 
                        </div>
                        <hr>
                        <?php
                    }
                    ?>  
        <table class="table table-bordered table-hover mt-3">
            <thead>
                <tr class="table-dark">
                    <th  style="text-align: center;">Product Code</th>
                    <th  style="text-align: center; ">Product Name</th>
                    <th  style="text-align: center;">Category ID</th>
                    <th  style="text-align: center;">Stock</th>
                    <th  style="text-align: center;">Price(Php)</th>
                    <th  style="text-align: center;">Action</th>
                </tr>
            </thead>
        <tbody>
          <?php
            $query = "SELECT * FROM pos_product";
            $result = mysqli_query($conn, $query);
              
            if ($result) 
            {
              while ($row = mysqli_fetch_assoc($result)) 
              {
                $code=$row['P_code'];
                $product=$row['P_name'];
                $category=$row['P_category_id'];
                $stock=$row['P_stock'];
                $price=$row['P_price'];

                  echo '<tr>
                        <th scope="row" style="text-align: center;">'.$code.'</th>
                        <td style="text-align: center;">'.$product.'</td>
                        <td style="text-align: center;">'.$category.'</td>
                        <td style="text-align: center;">'.$stock.'</td>
                        <td style="text-align: center;">'.$price.'</td>
                        <td style="text-align: center;">
                         <a href="update_product.php? upID='.$code.'" class="text-light"><button class="btn btn-primary btn-sm">Edit</button></a>
                         <a href="delete_product.php? deleteid='.$code.'" class="text-light"><button class="btn btn-danger btn-sm">Delete</button></a>
                        </td>
                        </tr>';
              }            
            }
          ?>                
        </tbody>                 
      </table>

        </div>
      </div>
     
        
    </div>
  </div>
</div>


    
       
        

</body>
</html>
