<?php
    $con = mysqli_connect("localhost","root","","cse");
    if ($con) {
    }else{
        // echo "failed connect to MySQL";
    }
?>

<!DOCTYPE HTML>
<HTML>
    <head>
        <title>cse.reck.ac.in</title>
        <link rel="stylesheet" href="../bootstrap-4.0.0/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/sign.css">
        <link rel="icon" type="icon/x-image" href="../recklogo.jpg">
        </script>
        <script>
        // Disable caching and handle back button press
        window.onload = function() {
            window.history.forward();
            document.getElementById("inputEmail").value = sessionStorage.getItem("username") || "";
            document.getElementById("inputPassword").value = sessionStorage.getItem("password") || "";

            // Check for back button press
            window.onpageshow = function(event) {
                if (event.persisted) {
                    // Back button was pressed
                    logoutUser();
                }
            };
        };

        // Save username and password to sessionStorage
        function saveCredentials() {
            var username = document.getElementById("inputEmail").value;
            var password = document.getElementById("inputPassword").value;
            sessionStorage.setItem("username", username);
            sessionStorage.setItem("password", password);
        }

        // Logout user by redirecting to a logout page
        function logoutUser() {
            window.location.href = "../index.php"; // Replace with the actual logout page
        }
    </script>
</head>

<body>

<nav class="navbar navbar-expand-md navbar-light bg-light">

      <a class="navbar-brand" href="../index.php"><img src="../src/images/recklogo.jpg" alt="Logo" height="40px" width="40px"/></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample04">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="../index.php">Home </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="admin_login.php">Admin Login</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#">Student Login <span class="sr-only">(current)</span></a>
          </li>

        </ul>
        <form class="form-inline my-2 my-md-0">
          <input class="form-control" type="text" placeholder="Search">
        </form>
      </div>
    </nav>

    <!-- Form -->
    <form class="form-signin text-center">
      <img class="mb-4" src="../src/images/user.png" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Student Login</h1>
      <label for="inputEmail" class="sr-only">Username</label>
      <input type="text" id="inputEmail" class="form-control" placeholder="Username" name="user" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="pass" required>
      <div class="checkbox mb-3">
      <level>
          <input type="checkbox" name="remember">Remember me
      </level>
      </a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <a href=" " target="_blank">Forget Password?</a>
  </div>
      <input class="btn btn-lg btn-primary btn-block" type="submit">
      Don't have an account?
      <a href=" " target="_blank">Register User</a>
      <p class="mt-5 mb-3 text-muted">&copy;2023-Onwards</p>
    </form>

    <?php
    
        if (isset($_GET['user']) && isset($_GET['pass'])) {
            $user = $_GET['user'];
            $pass = $_GET['pass'];
            $query = "SELECT * FROM student WHERE username='$user' AND password='$pass'";
            $result = mysqli_query($con,$query);
            if (mysqli_num_rows($result) > 0) {
                header("Location: student_dashboard.php");
                // echo "<script>alert('User Found');</script>";
            }else{
                echo "<script>alert('Invalid Username or Password');</script>";
            }
        }
    ?>



        <!-- Scripts -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
        <script src="../bootstrap-4.0.0/dist/js/bootstrap.min.js"> </script>
        <script src="../bootstrap-4.0.0/assets/js/vendor/popper.min.js"> </script>
        <script src="../bootstrap-4.0.0/assets/js/vendor/holder.min.js"> </script>
        <!-- Scripts -->
</body>

</HTML>