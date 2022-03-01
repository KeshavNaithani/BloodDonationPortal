<?php

session_start();
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <nav class="navbar navbar- bg-dark">
            <div class="container">
                <a class="navbar-brand" href="../index.php">
                    <img src="../img/logo.png" alt="" width="30" height="24">
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
                    <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="../search.php">Search</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../donor.php">Donors</a>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="../aboutus.php">About Us</a>
                </li>
            </ul>
            <!-- Example single danger button -->
            <div class="btn-group ">
              <a type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <?php if(isset($_SESSION['name'])) echo $_SESSION['name']; ?>
              </a>
              <ul class="dropdown-menu">

                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><a class="dropdown-item" href="update.php">Update Profile</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="logout.php">Logout</a></li>
              </ul>
            </div>
        </div>

    </div>

</nav>
