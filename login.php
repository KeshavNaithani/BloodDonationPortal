<?php

  include 'include/header.php';
   if (isset($_POST['signin'])) {
     if (isset($_POST['email']) && !empty($_POST['email'])) {
         $email = $_POST['email'];
     } else {
         $emailError = '<div class="alert alert-danger" role="alert">
     Please Enter Your Email
   </div>';
     }
     if (isset($_POST['password']) && !empty($_POST['password'])) {
         $password = $_POST['password'];

         $password =md5($password);
     } else {
         $passwordError = '<div class="alert alert-danger" role="alert">
     Please Enter Your Password
   </div>';
 }}
        //Login query
        if (isset($email) && isset($password)) {
          $sql="SELECT * FROM donor_details WHERE password='$password' AND email='$email' ";
          $result =mysqli_query($connection,$sql);

          if (mysqli_num_rows($result)>0) {
            while ($row =mysqli_fetch_assoc($result)) {
            $_SESSION['user_id']=$row['id'];
            $_SESSION['name']=$row['name'];
            $_SESSION['email']=$row['email'];
            $_SESSION['donation_date']=$row['donation_date'];
            header('Location:user/index.php');
              }
            }else {
              $submitError= '<div class="alert alert-danger" role="alert">
          Sorry, No record found, Enter valid credentials
        </div>';
            }
          }




?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="stles.css">

    <title>DonateBlood</title>
</head>

<body>


<div class="container py-4">
    <body class="text-center">

        <main class="form-signin">
          <form novalidate action="" method="post">
            <img class="mb-4" src="img/logo.png" alt="" width="92" height="67">
            <h1 class="h3 mb-3 fw-normal">Sign In to Your Account</h1>

            <div class="form-floating">
              <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
              <label for="floatingInput">Email address</label>
                <?php  if(isset($emailError)) echo $emailError;   ?>
            </div>
            <div class="form-floating">
              <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" >
              <label for="floatingPassword">Password</label>
              <?php  if(isset($passwordError)) echo $passwordError;   ?>
            </div>

            <div class="checkbox mb-3">
              <label>
                <input type="checkbox" value="remember-me"> Remember me
              </label>
           <?php  if(isset($submitError)) echo $submitError;   ?>

            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit" name="signin">Sign in</button>

          </form>
        </main>





        </body>

</div>



    <div class="container py-5">
        <div class="container">
            <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
                <p class="col-md-4 mb-0 text-muted">Blood Donation Portal Developed By Keshav Naithani</p>

                <a href="/"
                    class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                    <svg class="bi me-2" width="40" height="32">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                </a>

                <ul class="nav col-md-4 justify-content-end">
                    <li class="nav-item"><a href="index.html" class="nav-link px-2 text-muted">Home</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Log In</a></li>
                    <li class="nav-item"><a href="aboutus.html" class="nav-link px-2 text-muted">About</a></li>
                </ul>
            </footer>
        </div>
    </div>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>
