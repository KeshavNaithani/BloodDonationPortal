<?php
   include 'include/header.php';
   if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
   if (isset($_POST['date'])) {
     $showForm='
     <div class="alert alert-warning alert-dismissible fade show" role="alert">
       <strong>Arey You Sure</strong> You should check in on some of those fields below.


                </button>
                <form target="" method="post">
                <br>
                <input type="hidden" name="userID" value="'.$_SESSION['user_id'].'">
                <button type="submit" name="updateSave" class="btn btn-danger">Yes</button>

                <button type="button" class="btn btn-info" >
                <span >Oops! No </span>
                </button>
       <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
     </div>

     ';

   }
   if (isset($_POST['userID'])) {
     $userID =$_POST['userID'];
      $crntDate= date_create();
      $crntDate= date_format($crntDate,'Y-m-d');
     $sql = "UPDATE donor_details SET donation_date='$crntDate' WHERE id= '$userID'";
     if(mysqli_query($connection,$sql )) {
       $_SESSION['donation_date']=$crntDate;
       header("Location: index.php");
     } else {
       $submitError= '<div class="alert alert-danger" role="alert">
   Sorry, Error Found
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

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../img/img1.jpg" class="d-block w-100" alt="..." height="400px">

            </div>
            <div class="carousel-item">
                <img src="../img/img2.jpg" class="d-block w-100" alt="..." height="400px">

            </div>
            <div class="carousel-item">
                <img src="../img/img3.jpg" class="d-block w-100" alt="..." height="400px">
                <div class="carousel-caption d-none d-md-block">
                    <h2 style="color:#1A1A40">Donate Your Blood For a Reason</h2>
                    <p style="color:#DFF6FF">Let the reason to be life.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container py-4">

        <body class="text-center">

            <img class="mb-4" src="../img/logo.png" alt="" width="92" height="67">
            <h1 class="h3 mb-3 fw-normal">Welcome <?php if(isset($_SESSION['name'])) echo $_SESSION['name']; ?></h1>
            <h5><small class="text-muted" >Here You Can Update Your Profile</small></h5>
             <?php  if(isset($Error)) echo $submitError;   ?>

            <?php if(isset($showForm)) echo $showForm; ?>

<?php

$date=$_SESSION['donation_date'];
if ($date=='0') {
  echo '<form target=""  method="post">

    <button name="date" type="submit" class="btn btn-danger btn-lg ">Donate,and Save a life</button>
  <div class="conatiner py-5">
  </form>';
} else {
    $start =date_create("$date");
    $end =date_create();
    $diff =date_diff($start,$end);

    $diffMonth=$diff->m;
    if ($diffMonth >= 3 ) {
      '<form target=""  method="post">

        <button name="date" type="submit" class="btn btn-danger btn-lg ">Donate,and Save a life</button>
      <div class="conatiner py-5">
      </form>';
    }else{

  echo '<div class="alert alert-success " role="alert">
<h4 class="alert-heading">Well done!</h4>
<p>You already have donated the blood</p>
<hr>
<p class="mb-0">You can again donate blood after three months. We are thankful to You .</p>
</div>
</div>';
}
}


 ?>




        </body>
    </div>




    </div>


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
<?php
}else
{
  header("Location: ../index.php");
}
?>
