<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>

  <!-- Integrated CSS -->
  <style>
    :root {
      --primary: #008080; /* Dark Cyan */
      --secondary: #20B2AA; /* Light Sea Green */
      --font: 'Poppins', sans-serif;

      --container-width: 400px;
      --border-radius: 10px;
      --box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }

    body {
      background: linear-gradient(to right, #03343c, #c2af8b) 100%;
      font-family: var(--font);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .container {
      max-width: var(--container-width);
      margin: auto;
      padding: 40px;
      border-radius: var(--border-radius);
      box-shadow: var(--box-shadow);
      background-color: #fff;
    }

    .text-center {
      text-align: center;
    }

    .h-font {
      font-size: 24px;
      font-weight: bold;
      color: var(--primary);
      margin-bottom: 30px;
    }

    .form-control {
      position: relative;
      width: 100%;
      padding: 12px 40px 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-sizing: border-box;
    }

    .form-control:focus {
      border-color: var(--primary);
    }

    .show-password-icon {
      position: absolute;
      top: 50%;
      right: 10px;
      transform: translateY(-50%);
      cursor: pointer;
    }

    .btn-primary {
      width: 100%;
      padding: 10px;
      background-color: var(--primary);
      border: none;
      border-radius: 5px;
      color: #fff;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
      background-color: var(--secondary);
    }

    .error-msg {
      color: red;
      margin-top: 10px;
    }

    .register-link {
      margin-top: 20px;
    }

    .register-link a {
      color: var(--primary);
      text-decoration: none;
      transition: color 0.3s ease;
    }

    .register-link a:hover {
      color: var(--secondary);
    }
  </style>
</head>

<body>
  <div class="container">
    <h4 class="text-center h-font">Login</h4>

    <?php if (isset($error)) : ?>
      <div class="error-msg">
        <?php echo $error; ?>
      </div>
    <?php endif; ?>

    <form action="login.php" method="post">
      <div class="row mb-3">
        <div class="col">
          <input type="text" class="form-control" name="u_username" placeholder="Username">
        </div>
      </div>
      <div class="row mb-3">
        <div class="col">
          <div class="input-group">
            <input type="password" class="form-control" name="u_password" id="password" placeholder="Password">
            <span class="input-group-text show-password-icon" id="showPassword" onclick="togglePasswordVisibility()">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-slash-fill" viewBox="0 0 16 16">
                <path d="m10.79 12.912-1.614-1.615a3.5 3.5 0 0 1-4.474-4.474l-2.06-2.06C.938 6.278 0 8 0 8s3 5.5 8 5.5a7 7 0 0 0 2.79-.588M5.21 3.088A7 7 0 0 1 8 2.5c5 0 8 5.5 8 5.5s-.939 1.721-2.641 3.238l-2.062-2.062a3.5 3.5 0 0 0-4.474-4.474z"/>
                <path d="M5.525 7.646a2.5 2.5 0 0 0 2.829 2.829zm4.95.708-2.829-2.83a2.5 2.5 0 0 1 2.829 2.829zm3.171 6-12-12 .708-.708 12 12z"/>
              </svg>
            </span>
          </div>
        </div>
      </div>

      <div class="form-btn text-center">
        <button type="submit" class="btn btn-primary" name="login">Login</button>
      </div>

      <div class="register-link text-center">
        <p>Don't have an account? <a href="index.php">Register Here</a></p>
      </div>
    </form>
  </div>

  <script>
    function togglePasswordVisibility() {
      var passwordInput = document.getElementById("password");
      var showPasswordIcon = document.getElementById("showPassword");

      if (passwordInput.type === "password") {
        passwordInput.type = "text";
        showPasswordIcon.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16"><path d="M1.458 7.505C3.233 5.005 5.983 3.333 8 3.333c1.678 0 3.208.926 4.542 2.343.158.171.158.429 0 .6C11.208 10.074 9.678 11 8 11c-2.017 0-4.767-1.672-6.542-4.162a.363.363 0 0 1 0-.6zm2.84 1.062C4.506 9.06 6.166 10 8 10c1.49 0 2.816-.81 3.715-2.057a35.023 35.023 0 0 0-1.348-1.486C10.828 5.97 9.49 5.333 8 5.333c-1.49 0-2.828.637-3.715 1.174a35.01 35.01 0 0 0 1.348 1.486z"/></svg>';
      } else {
        passwordInput.type = "password";
        showPasswordIcon.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-slash-fill" viewBox="0 0 16 16"><path d="m10.79 12.912-1.614-1.615a3.5 3.5 0 0 1-4.474-4.474l-2.06-2.06C.938 6.278 0 8 0 8s3 5.5 8 5.5a7 7 0 0 0 2.79-.588M5.21 3.088A7 7 0 0 1 8 2.5c5 0 8 5.5 8 5.5s-.939 1.721-2.641 3.238l-2.062-2.062a3.5 3.5 0 0 0-4.474-4.474z"/><path d="M5.525 7.646a2.5 2.5 0 0 0 2.829 2.829zm4.95.708-2.829-2.83a2.5 2.5 0 0 1 2.829 2.829zm3.171 6-12-12 .708-.708 12 12z"/></svg>';
      }
    }
  </script>
</body>

</html>
