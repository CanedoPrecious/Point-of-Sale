<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>POS | Registration</title>

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
    
   .container {
    max-width: 600px;
    margin:0 auto;
    margin-top:50px;
    padding: 50px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
   }

   .btn-primary{
    width: 50%;
    background: linear-gradient(to right, #17a2b8, #FFA500) 100%;
    border-radius: 50px;
    border: none;
   }

     body {
      background: linear-gradient(to right, #17a2b8, #FFA500) 100%;
     }
  </style>
</head>
<body>
  <div class="container">
  <h4 class="text-center mt-2 h-font">Registration</h4>

  
<?php
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $conpass = $_POST['conpass'];
  $passworddef= password_hash($password, PASSWORD_DEFAULT);
  $error = array();
  if (empty($name) OR empty($email) OR empty($username) OR empty($password) OR empty($conpass) ) {
   array_push($error,"All Fields are Required");
  }

  if ($password!==$conpass) {
    array_push($error,"Password does not match");
  }
  require_once('./config/database.php');
  $sql="SELECT * FROM pos_accnt WHERE a_username = '$username'";
  $result =mysqli_query($conn,$sql);
  $rowCount= mysqli_num_rows($result);
  
  if ($rowCount>0) {
    array_push($error,"Username Already exists!");
  }
  
  if (count($error)>0) {
    foreach ($error as $errors) {
      echo "<div class='alert alert-danger'>$errors</div>";
    }
  } else {
   $sql = "INSERT INTO pos_accnt (a_name, a_email, a_username, a_password) VALUES (?, ?, ?, ?)";
   $stmt = mysqli_stmt_init($conn);
   $preparestmt = mysqli_stmt_prepare($stmt, $sql);

   if ($preparestmt) {
    mysqli_stmt_bind_param($stmt,"ssss", $name, $email, $username, $passworddef );
    mysqli_stmt_execute($stmt);
    echo "<div class='alert alert-success'>You are successfully Registered.</div>";
   } else{
    die("Something went wrong");
   }

  }
}

?>

  <form action="index.php" method="post">
    
    <div class="row mb-3">
      <div class="col">
       <label class="form-label">Name:</label>
       <input  type="text" class="form-control" name="name">
      </div>
    </div>
   

    <div class="row mb-3">
      <div class="col">
       <label class="form-label">Email:</label>
       <input  type="email" class="form-control" name="email">
      </div>
    </div>
   

    <div class="row mb-3">
      <div class="col">
       <label class="form-label">Username:</label>
       <input type="text" class="form-control" name="username">
      </div>
    </div>
   
    <div class="row mb-3">
      <div class="col">
      <label class="form-label">Password:</label>
      <input type="password" class="form-control" name="password">
      </div>
    </div>


    <div class="row mb-3">
      <div class="col">
        <label class="form-label">Confirm Password</label>
        <input type="password" class="form-control" name="conpass">
      </div>
    </div>

    <div class="form-btn text-center mt-4 ">
      <button type="submit" class="btn btn-primary mb-3" name="submit">Register</button>
      <p>Already have an account? <a href="login.php">Login Here</a></p>
  </div>
</div>

</body>
</html>
  