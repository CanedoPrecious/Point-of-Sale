
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<title>POINT OF SALE</title>
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
 
 <!-- Bootstrap Icon-->
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
 
<!-- Font -->
 <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
 
   <style>
    .h-font{
      font-family: "Poppins", sans-serif;
    }

 body {
      background: linear-gradient(to right, #17a2b8, #FFA500) 100%;
     }
    
.container {
    max-width: 600px;
    margin:0 auto;
    margin-top:100px;
    padding: 50px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
   }

   .form-group{
     margin-bottom:10px;
   }

   .btn-primary{
    width: 50%;
    background: linear-gradient(to right, #17a2b8, #FFA500) 100%;
    border-radius: 50px;
    border: none;
   }
   </style>
   </head>
   <body>

<div class="container">
  <h4 class="text-center mt-2 h-font">Login</h4>

  <?php
  if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    include("./config/database.php");
    $sql= "SELECT * FROM pos_users WHERE u_username='$username' AND u_password='$password' ";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_array($result, MYSQLI_ASSOC);

    if ($user) {
      if (password_verify($password, $user['password'])) {
        header("Location: './dashboard.php'");
        die();

      }else {
        echo "<div class= 'alert alert-danger'>Pasword does not match!</div>";
      }

    }else {
      echo "<div class= 'alert alert-danger'>Username does not match!</div>";
    }
  }
  ?>
  
  <form action="login.php" method="post">
    <div class="form-group">
      <label class="form-label">Username:</label>
      <input type="text" class="form-control" name="username">
    </div>
    <div class="form-group">
      <label class="form-label">Password:</label>
      <input type="password" class="form-control" name="password">
    </div>
   
    <div class="form-btn text-center mt-4 ">
      <button type="submit" class="btn btn-primary mb-3" name="login">Login</button>
      <p>Don't have an account? <a href="index.php">Register Here</a></p>
    </div>
  </form>
</div>
</div>
</body>
</html>