
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>POS | Category</title>
  
   <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

   <!--Css-->
  <link rel="stylesheet" href="./assets/css/style.css">

  <script src="./assets/js/search.js"></script>

   <!-- Font-awesome -->
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
  

  <div class="container-fluid mt-4"> 
    <div class="row">
      <div class="col-sm-10 ms-auto overflow-hidden">
        <h5 class="mb-3"><i class="fa-solid fa-tags pe-2"></i>Categories</h5> 
        <a href="./add_category.php" class="btn btn-dark btn-sm"><i class="fa-solid fa-plus pe-2"></i>Add Category</a>
        
        <div class="card mt-4"> 
          <div class="card-body">
            
            <table class="table table-bordered table-hover mt-4">
              <?php
                if (isset($_GET['success'])) {
                        ?>
                        <div class="alert alert-success">
                            <small>New Category Added</small>. 
                        </div>
                        <hr>
                        <?php
                    } elseif (isset($_GET['update'])) {
                        ?>
                        <div class="alert alert-success">
                            <small>Category Updated</small>. 
                        </div>
                        <hr>
                        <?php
                    }
                    ?>  
                    <thead>
                        <tr class="table-dark">
                            <th style="text-align: center; ">Category ID</th>
                            <th  style="text-align: center; ">Category Name</th> 
                            <th  style="text-align: center;">Action</th>
                        </tr>
                    </thead>
                    <tbody id=result>

                    <?php
                    include('./config/database.php');
                   
                    $query = "SELECT * FROM pos_categori";
                    $result = mysqli_query($conn, $query);


                       if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                          $id=$row['c_id'];
                          $category=$row['c_category'];
                          
                          echo '<tr>
                          <th scope="row" style="text-align: center;">'.$id.'</th>
                          <td style="text-align: center;">'.$category.'</td>
                          <td style="text-align: center;">
                            <a href="update_category.php?updateid='.$id.'" class="text-light"><button class="btn btn-primary btn-sm">Edit</button></a>  
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