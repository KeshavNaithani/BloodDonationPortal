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
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="search.php">Search</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="donor.php">Donors</a>
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
            <!-- Example single danger button -->
            <div class="btn-group ">
              <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                Donor Name
              </button>
              <ul class="dropdown-menu">

                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><a class="dropdown-item" href="update.php">Update Profile</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="user/logout.php">Logout</a></li>
              </ul>
            </div>
        </div>

    </div>

</nav>
