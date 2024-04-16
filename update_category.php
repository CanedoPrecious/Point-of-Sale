
<?php
include('./config/database.php');
$category=$_GET['updateid'];

if (isset($_POST['submit'])) {
   $id= $_POST['c_id'];
    $category = $_POST['c_category'];


   $sql="UPDATE `pos_categori` SET `c_id`='$id',`c_category`='$category' WHERE c_id='$id'";

    $result= mysqli_query($conn, $sql);

   if ($result) {
    header("Location: category.php?update");

  }else {
      echo "Failed: ". mysqli_error($conn);
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>POS | Update Category</title>
  
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


    <div class="container mt-4">
    <div class="row">
      <div class="col-lg-10 ms-auto p-4 overflow-hidden">

        <div class="card">
        <div class=" card-header mb-4">
            <h4 class="mt-4">Update Category</h4>
          </div>
          <?php
        $id=$_GET['updateid'];
        $sql= "SELECT * FROM `pos_categori` WHERE c_id=$id";
        $result= mysqli_query($conn, $sql);
        $row= mysqli_fetch_array($result);
        ?>
        
          <div class="card-body">
                <form action="" method="post"  >
                <div class="row mb-3">
                        <div class="col">
                            <lable class="form-label">Category No:</lable>
                            <input type="number" class="form-control mt-2" name="c_id" value="<?php echo $row['c_id']?>">
                            
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <lable class="form-label">Category Name:</lable>
                            <input type="text" class="form-control mt-2" name="c_category" value="<?php echo $row['c_category']?>">
                        </div>
                    </div>
                        
                    <div class="mt-4">
                        <button type="submit" class="btn btn-primary btn-sm" name="submit">Update</button>
                        <a href="./category.php" class="btn btn-danger btn-sm">Cancel</a>
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