
<?php
include('./config/database.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>POS | Sales-Form</title>
  
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

<div class="container mt-4"> 
    <div class="row">
        <div class="col-lg-10 ms-auto overflow-hidden">
            <div class="card">
                <div class="card-header">Sales Form
                
                </div>
                <div class="card-body">
                    <form action="sales_form.php" method="post">
                        <div class="row mb-3">
                            <div class="col-md-5">
                                <label for="control-label">Product</label>
                                <select name="product" id="" class="form-select">
                                <option value="0" selected="" disabled >--Select Product--</option>

                                <?php
                                include('./config/database.php');
                                 $product = mysqli_query($conn, "SELECT * FROM pos_product");
                                  
                                 while ($p= mysqli_fetch_array($product))
                                 {   
                                 ?>
                                   <option value="<?php echo $p['P_code']?>"><?php echo $p['P_name']?></option>
                                 <?php
                                 }
                                 ?>
                            
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="control-form">Qty</label>
                                <input type="number" name="qty" class="form-control" value="1"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                          <div class="col-md-3">
                                <label for="control-label"></label>
                                <button class="btn btn-sm btn-primary" type="save">
                                    <i class="fa fa-plus"></i> Add Product
                                </button>
                                <a href="./sales.php" class="btn btn-sm btn-danger">Cancel</a>
                               
                              </div>
                        </div>
                           

                        <div class="card-footer">
                            <div class="row">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;" >No.</th>
                                           <th style="text-align: center;">Product</th>
								                           <th style="text-align:center;">Price</th>
								                           <th style="text-align:center;">Quantity</th>
								                           <th style="text-align:center;">Amount</th>
                                        </tr>
                                        <th style="text-align:center;"></th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th style="text-align: right"  colspan="4" >Total</th>
                                            <th style="text-align: right tamnt"></th>
                                            <th></th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="row">
							  <button class="btn btn-primary btn-sm" type="button" id="pay">Pay</button>
						    </div>
                        </div>
                       
                    </form>
                </div>
            </div>  
        </div>
    </div>
       
</div>

</body>
</html>