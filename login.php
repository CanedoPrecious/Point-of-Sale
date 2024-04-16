<?php
require("./config/database.php");
if (isset($_POST['login'])) {
  // Basic input validation
  if (empty($_POST['u_username']) || empty($_POST['u_password'])) {
    $error = "All fields are required";
  } else {
    $username = mysqli_real_escape_string($conn, $_POST['u_username']);
    $password = mysqli_real_escape_string($conn, $_POST['u_password']);

    $sql = "SELECT * FROM pos_users WHERE u_username=? LIMIT 1";
    $stmt = mysqli_stmt_init($conn);
    if (mysqli_stmt_prepare($stmt, $sql)) {
      mysqli_stmt_bind_param($stmt, "s", $username);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      
      if ($row = mysqli_fetch_assoc($result)) {
        if (password_verify($password, $row['u_password'])) {
          // Password is correct, redirect to dashboard
          header('Location: dashboard.php');
          exit();
        } else {
          // Incorrect password
          $error = "Incorrect Password";
        }
      } else {
        // No user found
        $error = "User not found";
      }
    } else {
      // SQL statement preparation failed
      $error = "Something went wrong";
    }
  }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>
<body>


<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
 
 <!-- Bootstrap Icon-->
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
 
<!-- Font -->
 <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
 
  <style>
    .h-font {
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

    .form-group {
      margin-bottom: 10px;
    }

    .btn-primary {
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

    <?php if (isset($error)) : ?>
      <div class="alert alert-danger" role="alert">
        <?php echo $error; ?>
      </div>
    <?php endif; ?>

    <form action="login.php" method="post">
      <div class="form-group">
        <label class="form-label">Username:</label>
        <input type="text" class="form-control" name="u_username">
      </div>
      <div class="form-group">
        <label class="form-label">Password:</label>
        <input type="password" class="form-control" name="u_password">
      </div>

      <div class="form-btn text-center mt-4">
        <button type="submit" class="btn btn-primary mb-3" name="login">Login</button>
        <p>Don't have an account? <a href="index.php">Register Here</a></p>
      </div>
    </form>
  </div>
</body>

</html>
