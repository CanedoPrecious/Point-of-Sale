
<?php
include('./config/database.php');
if (isset($_POST['submit'])) {
  $P_code = $_POST['P_code'];
  $P_name = $_POST['P_name'];
  $P_category = $_POST['P_category'];
  $P_stock = $_POST['P_stock'];
  $P_price = $_POST['P_price'];

 $sql=" UPDATE `pos_product` SET P_code='$P_code',P_name=`$P_name',
 P_category='$P_category',P_stock='$P_stock',P_price='$P_price' WHERE P_code='$product'";

  $result= mysqli_query($conn, $sql);

 if ($result) {
  header("Location: product.php?msg=Successfully Added");
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

        <div class="card align-items-center "> 
        <div class="container mt-4">
            <div class=" text-center mb-4">
                <h4>Edit Product</h4>
                <p class="text-muted">Click Update after changing the Product details</p>
                <hr>
            </div>
        </div>

        <?php
        if (isset($_GET['P_code'])) {
          $P_code= mysqli_real_escape_string($conn, $_GET['P_code']);
          $query= "SELECT * FROM pos_product WHERE P_code='$P_code'";
          $result= mysqli_query($conn, $query);

          if (mysqli_num_rows($result) >0 ) {
            $product= mysqli_fetch_array($result);
            ?>
             
            <?php
          }
          else {
            echo "Failed: ". mysqli_error($conn);
          }
        }
       
        ?>

<div class="card-body ">
                <form action="" method="post">
                    <div class="row mb-3">
                        <div class="col">
                            <lable class="form-label">Product Code:</lable>
                            <input type="number"  required class="form-control mt-2" name="P_code" value="<?php echo $product['P_code']?>">
                        </div>
                        <div class="col">
                            <lable class="form-label">Product Name:</lable>
                            <input type="text"  required class="form-control mt-2" name="P_name" value="<?php echo $product['P_name']?>">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                        <lable class="form-label">Category:</lable>
                        <select name="P_category" required class="form-control mt-2">
                            <option id="bread" value="Bread & Pastry">Bread & Pastry</option>
                            <option id="fresh" value="Fresh Produce">Fresh Produce</option>
                            <option id="fresh" value="Seafoods">Seafoods</option>
                        </select>
                        </div>
                        <div class="col">
                            <lable class="form-label">Stock:</lable>
                            <input type="number"  required class="form-control mt-2" name="P_stock" value="<?php echo $product['P_stock']?>">
                        </div>
                        <div class="col">
                            <lable class="form-label">Price(Php):</lable>
                            <input type="decimal"  required class="form-control mt-2" name="P_price" value="<?php echo $product['P_price']?>">
                        </div>
                    </div>
                    <div class="mt-4">
                        <button type="submit" class="btn btn-success" name="submit">Update</button>
                        <a href="./product.php" class="btn btn-danger">Cancel</a>
                    </div>
                </form>    
             </div> 

            
      </div>
    </div>
</div>
</body>
</html>