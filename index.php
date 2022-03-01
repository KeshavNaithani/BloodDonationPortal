<?php

   include 'include/header.php'

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
                <img src="img/img1.jpg" class="d-block w-100" alt="..." height="400px">

            </div>
            <div class="carousel-item">
                <img src="img/img2.jpg" class="d-block w-100" alt="..." height="400px">

            </div>
            <div class="carousel-item">
                <img src="img/img3.jpg" class="d-block w-100" alt="..." height="400px">
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

     <div class="container py-5">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
              <div class="card h-100">
                <img src="img/need.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">The Need of Blood Donation</h5>
                  <p class="card-text">The reason to donate is simple…it helps save lives. In fact, every two seconds of
                    every day, someone needs blood. Since blood cannot be manufactured outside the body and has a
                    limited shelf life, the supply must constantly be replenished by generous blood donors.</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="img/safe.png" class="card-img-top" alt="..."  >
                <div class="card-body">
                  <h5 class="card-title">Is Giving Blood Safe?</h5>
                  <p class="card-text">Yes. Remember that you will only be accepted as a blood donor if you are fit and
                    well. Your health and well-being are very important to the blood service. The needle and blood bag
                    used to collect blood come in a sterile pack that cannot be reused, so the process is made as safe
                    as possible.</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="img/who.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Who can give blood,and how often?</h5>
                  <p class="card-text">Blood can be donated by most people who are healthy and do not have an infection
                    that can be transmitted through their blood.

                    The age at which people are eligible to give blood varies between the ages of 17 and 65. Some
                    countries accept donations from people from the age of 16 and extend the upper age limit beyond 65
                    years.

                    Healthy adults can give blood regularly – at least twice a year.</p>
                </div>
              </div>
            </div>

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
