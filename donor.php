<?php
   include 'include/config.php';
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
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <nav class="navbar navbar- bg-dark">
                <div class="container">
                    <a class="navbar-brand" href="#">
                        <img src="img/logo.png" alt="" width="30" height="24">
                        Doon Blood Bank
                    </a>
                </div>
            </nav>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="search.php">Search</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="donor.php">Donors</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="signup.php">Sign Up</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="aboutus.php">About Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container py-4">

        <body class="text-center">

            <img class="mb-4" src="img/logo.png" alt="" width="92" height="67">
            <h1 class="display-4 fw-normal">Donors List</h1>
        </body>
    </div>

<?php
$sql= "SELECT * FROM donor_details";
$result =mysqli_query($connection,$sql);

if (mysqli_num_rows($result)>0) {
  while ($row =mysqli_fetch_assoc($result)) {
  if ($row['donation_date']=='0') {
  echo '
  <div class="container py-5 ">
    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center d-flex justify-content-evenly ">
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm border-primary">
          <div class="card-header py-3 text-white bg-primary border-primary">
            <h4 class="my-0 fw-normal">'.$row['name'].'</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">'.$row['blood_group'].'<small class="text-muted fw-light"></small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>'.$row['city'].'</li>
              <li>'.$row['gender'].'</li>
              <li>'.$row['email'].'</li>
              <li>'.$row['contact_no'].'</li>
                <li style="color:red;">Not Donated </li>
            </ul>

          </div>
        </div>
      </div>
      </div>
  ';
  } else {
    echo '
    <div class="container py-5 ">
      <div class="row row-cols-1 row-cols-md-3 mb-3 text-center d-flex justify-content-center ">
        <div class="col">
          <div class="card mb-4 rounded-3 shadow-sm border-primary">
            <div class="card-header py-3 text-white bg-primary border-primary">
              <h4 class="my-0 fw-normal">'.$row['name'].'</h4>
            </div>
            <div class="card-body">
              <h1 class="card-title pricing-card-title">'.$row['blood_group'].'<small class="text-muted fw-light"></small></h1>
              <ul class="list-unstyled mt-3 mb-4">
                <li>'.$row['city'].'</li>
                <li>'.$row['blood_group'].'</li>
                <li>'.$row['gender'].'</li>
                  <li style="color:red";>Donated</li>
              </ul>

            </div>
          </div>
        </div>
        </div>
    ';
  }

  }
} else {
    echo ' <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Holy guacamole!</strong> Data Not Found.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>' ;
}



 ?>




    <div class="container py-5">
        <div class="container">
            <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
              <p class="col-md-4 mb-0 text-muted">Blood Donation Portal Developed By Keshav Naithani</p>

              <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
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
