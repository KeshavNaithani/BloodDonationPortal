<?php

 include 'include/header.php';


if (isset($_POST['submit'])) {
//term condition check
    if (isset($_POST['term']) === true) {
//name check
        if (isset($_POST['name']) && !empty($_POST['name'])) {
            if (preg_match('/^[A-Za-z\s]+$/', $_POST['name'])) {

                $name = $_POST['name'];
            } else {
                $nameError = '<div class="alert alert-danger" role="alert">
            Only lower and upper case and space charcter are allowed
          </div>';
            }
        } else {
            $nameError = '<div class="alert alert-danger" role="alert">
        Please Enter Your Name
      </div>';
        }
   //gender check
        if (isset($_POST['gender']) && !empty($_POST['gender'])) {
            $gender = $_POST['gender'];
        } else {
            $genderError = '<div class="alert alert-danger" role="alert">
        Please Select Your Gender
      </div>';
        }


        if (isset($_POST['day']) && !empty($_POST['day'])) {
            $day = $_POST['day'];
        } else {
            $dayError = '<div class="alert alert-danger" role="alert">
                        Please Select Day
                        </div>';
        }
        if (isset($_POST['month']) && !empty($_POST['month'])) {
            $month = $_POST['month'];
        } else {
            $monthError = '<div class="alert alert-danger" role="alert">
        Please Select Month
         </div>';
        }
        if (isset($_POST['year']) && !empty($_POST['year'])) {
            $year = $_POST['year'];
        } else {
            $yearError = '<div class="alert alert-danger" role="alert">
                     Please Select Year
                       </div>';
        }
        if (isset($_POST['city']) && !empty($_POST['city'])) {
            if (preg_match('/^[A-Za-z\s]+$/', $_POST['city'])) {

                $city = $_POST['city'];
            } else {
                $cityError = '<div class="alert alert-danger" role="alert">
            Only lower and upper case and space charcter are allowed
          </div>';
            }
        } else {
            $cityError = '<div class="alert alert-danger" role="alert">
            Please Select Your City
          </div>';
        }

        if (isset($_POST['password']) && !empty($_POST['password']) && isset($_POST['c_password'])&&!empty($_POST['c_password'])) {
            if (strlen($_POST['password'])>=6) {
            if ($_POST['password']==$_POST['c_password']) {
              $password=$_POST['password'];
            }else {
              $passwordError = '<div class="alert alert-danger" role="alert">
          Password mismatch
        </div>';
            }

            } else {
                $passwordError = '<div class="alert alert-danger" role="alert">
            Please Enter Password Greater than 6 digits
          </div>';
            }
        } else {
            $passwordError = '<div class="alert alert-danger" role="alert">
        Please Enter Password
      </div>';
        }
        if (isset($_POST['blood_group']) && !empty($_POST['blood_group'])) {
            $blood_group = $_POST['blood_group'];
        } else {
            $blood_groupError = '<div class="alert alert-danger" role="alert">
        Please Select Blood Group
      </div>';
        }
        if (isset($_POST['contact_no']) && !empty($_POST['contact_no'])) {
            if (preg_match('/\d{10}/', $_POST['contact_no'])) {

                $contact_no = $_POST['contact_no'];
            } else {
                $contact_noError = '<div class="alert alert-danger" role="alert">
            Only 10 Digits are allowed
          </div>';
            }
        } else {
            $contact_noError = '<div class="alert alert-danger" role="alert">
            Please Enter Your Contact No.
          </div>';
        }

        if (isset($_POST['email']) && !empty($_POST['email'])) {
          $pattern='/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
            if (preg_match($pattern, $_POST['email'])) {

                $check_email = $_POST['email'];
                $sql = "SELECT email FROM donor_details WHERE email='$check_email' ";

                $result = mysqli_query($connection, $sql);
                if (mysqli_num_rows($result) > 0) {
                      $emailError = '<div class="alert alert-danger" role="alert">
                      Sorry, The email already exists.
                    </div>';
                } else {
                    $email = $_POST['email'];
                }
            } else {
                $emailError = '<div class="alert alert-danger" role="alert">
            Please Enter a Valid Email
          </div>';
            }
        } else {
            $emailError = '<div class="alert alert-danger" role="alert">
            Please Enter Your Email
          </div>';
        }


           //inerting data into database

           if(isset($name) && isset($blood_group) && isset($gender) && isset($day) && isset($month) && isset($year) && isset($email) && isset($contact_no) && isset($city) && isset($password)){
        $donorDOB = $year."-".$month."-".$day;

        $password = md5($password);

         $sql = " INSERT INTO donor_details(name,gender,email,city,dob,contact_no,donation_date,password,blood_group)  VALUES('$name','$gender','$email','$city','$donorDOB','$contact_no','0','$password','$blood_group')";

            if(mysqli_query($connection, $sql))
            {
                $SubmitSuccess = '<div class="alert alert-success" role="alert">
                Form Submitted Successfully
              </div>';
            }else{
                $SubmitError = '<div class="alert alert-danger" role="alert">
                Form not Submitted,Please try again
              </div>';
            }
      }

} else {
    $termError = '<div class="alert alert-danger" role="alert">
        Please Accept Terms and Conditions
      </div>';
}}



?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="stles.css">

    <title>DonateBlood</title>
</head>

<body>


    <div class="container py-4">

        <body class="text-center">

            <img class="mb-4" src="img/logo.png" alt="" width="92" height="67">
            <h1 class="h3 mb-3 fw-normal">Sign Up to Create Account</h1>
        </body>
    </div>

    <div class="container py-5">
        <div class="row">
            <div class="col-md-6 offset-md-3 form-container">

                <?php if (isset($termError)) echo $termError;
                if (isset($SubmitSuccess)) echo $SubmitSuccess;
                if (isset($SubmitError)) echo $SubmitError;
                ?>

                <!-- Error Messages -->

                <form class="form-group" action="" method="post" novalidate>
                    <div class="form-group">
                        <label for="fullname">Full Name</label>
                        <input type="text" name="name" id="fullname" placeholder="Full Name" required pattern="[A-Za-z/\s]+" title="Only lower and upper case and space" class="form-control" value="<?php if (isset($name)) echo $name; ?>">
                        <?php if (isset($nameError)) echo $nameError; ?>
                    </div>
                    <!--full name-->
                    <div class="form-group">
                        <label for="name">Blood Group</label><br>
                        <select class="form-control demo-default" id="blood_group" name="blood_group" required>
                            <option value="">Select Your Blood Group</option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O+</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                        </select>
                        <?php if (isset($blood_groupError)) echo $blood_groupError; ?>
                    </div>
                    <!--End form-group-->
                    <div class="form-group">
                        <label for="gender">Gender</label><br>
                        Male<input type="radio" name="gender" id="gender" value="Male" style="margin-left:10px; margin-right:10px;" checked>
                        Female<input type="radio" name="gender" id="gender" value="Female" style="margin-left:10px;">
                        <?php if (isset($genderError)) echo $genderError; ?>
                    </div>
                    <!--gender-->
                    <div class="form-inline">
                        <label for="name">Date of Birth</label><br>
                        <select class="form-control demo-default" id="date" name="day" style="margin-bottom:10px;" required>
                            <option value="">---Date---</option>
                            <option value="01">01</option>
                            <option value="02">02</option>
                            <option value="03">03</option>
                            <option value="04">04</option>
                            <option value="05">05</option>
                            <option value="06">06</option>
                            <option value="07">07</option>
                            <option value="08">08</option>
                            <option value="09">09</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>

                        </select>
                        <select class="form-control demo-default" name="month" id="month" style="margin-bottom:10px;" required>
                            <option value="">---Month---</option>
                            <option value="01">January</option>
                            <option value="02">February</option>
                            <option value="03">March</option>
                            <option value="04">April</option>
                            <option value="05">May</option>
                            <option value="06">June</option>
                            <option value="07">July</option>
                            <option value="08">August</option>
                            <option value="09">September</option>
                            <option value="10">October</option>
                            <option value="11">November</option>
                            <option value="12">December</option>

                        </select>
                        <select class="form-control demo-default" id="year" name="year" style="margin-bottom:10px;" required>
                            <option value="">---Year---</option>
                            <option value="1957">1957</option>
                            <option value="1958">1958</option>
                            <option value="1959">1959</option>
                            <option value="1960">1960</option>
                            <option value="1961">1961</option>
                            <option value="1962">1962</option>
                            <option value="1963">1963</option>
                            <option value="1964">1964</option>
                            <option value="1965">1965</option>
                            <option value="1966">1966</option>
                            <option value="1967">1967</option>
                            <option value="1968">1968</option>
                            <option value="1969">1969</option>
                            <option value="1970">1970</option>
                            <option value="1971">1971</option>
                            <option value="1972">1972</option>
                            <option value="1973">1973</option>
                            <option value="1974">1974</option>
                            <option value="1975">1975</option>
                            <option value="1976">1976</option>
                            <option value="1977">1977</option>
                            <option value="1978">1978</option>
                            <option value="1979">1979</option>
                            <option value="1980">1980</option>
                            <option value="1981">1981</option>
                            <option value="1982">1982</option>
                            <option value="1983">1983</option>
                            <option value="1984">1984</option>
                            <option value="1985">1985</option>
                            <option value="1986">1986</option>
                            <option value="1987">1987</option>
                            <option value="1988">1988</option>
                            <option value="1989">1989</option>
                            <option value="1990">1990</option>
                            <option value="1991">1991</option>
                            <option value="1992">1992</option>
                            <option value="1993">1993</option>
                            <option value="1994">1994</option>
                            <option value="1995">1995</option>
                            <option value="1996">1996</option>
                            <option value="1997">1997</option>
                            <option value="1998">1998</option>
                            <option value="1999">1999</option>
                            <option value="2000">2000</option>
                            <option value="2001">2001</option>
                            <option value="2002">2002</option>
                            <option value="2003">2003</option>
                            <option value="2004">2004</option>
                        </select>
                        <?php if (isset($dayError)) echo $dayError; ?>
                        <?php if (isset($monthError)) echo $monthError; ?>
                        <?php if (isset($yearError)) echo $yearError; ?>

                    </div>
                    <!--End form-group-->
                    <div class="form-group">
                        <label for="fullname">Email</label>
                        <input type="text" name="email" id="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Please write correct email" class="form-control">
                        <?php if (isset($emailError)) echo $emailError; ?>
                    </div>
                    <div class="form-group">
                        <label for="contact_no">Contact No</label>
                        <input type="text" name="contact_no" value="" placeholder="Phone Number" class="form-control" required pattern="^\d{10}$" title="10 numeric characters only" maxlength="10">
                        <?php if (isset($contact_noError)) echo $contact_noError; ?>
                    </div>
                    <!--End form-group-->
                    <div class="form-group">
                        <label for="city">City</label>
                        <select name="city" id="city" class="form-control demo-default" required>
                            <option value="">-- Select --</option>
                            <optgroup title="Dehradun" label="&raquo; Dehradun"></optgroup>
                            <option value="Arcadia Grant">Arcadia Grant</option>
                            <option value="Balawala">Balawala</option>
                            <option value="Brahmanwala">Brahmanwala</option>
                            <option value="Banjarawala">Banjarawala</option>
                            <option value="Clock Tower">Clock Tower</option>
                            <option value="Chandarwani">Chandrawani</option>
                            <option value="Clement Town">Clement Town</option>
                            <option value="Doiwala">Doiwala</option>
                            <option value="F.R.I">F.R.I.</option>
                            <option value="Kargi Grant">Kargi Grant</option>
                            <option value="Chandarwani">Chandrawani</option>
                            <option value="Kuwanwala">Kuwanwala</option>
                            <option value="Majra">Majra</option>
                            <option value="Mussoorie">Mussoorie</option>
                            <option value="Miyanwala">Miyanwala</option>
                            <option value="Patelnagar">Patelnagar</option>
                            <option value="Raipur">Raipur</option>
                        </select>
                        <?php if (isset($cityError)) echo $cityError; ?>
                    </div>
                    <!--city end-->
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" value="" placeholder="Password" class="form-control" required pattern=".{6,}">
                    </div>
                    <!--End form-group-->
                    <div class="form-group">
                        <label for="password">Confirm Password</label>
                        <input type="password" name="c_password" value="" placeholder="Confirm Password" class="form-control" required pattern=".{6,}">
                        <?php if (isset($passwordError)) echo $passwordError; ?>
                    </div>
                    <!--End form-group-->
                    <div class="form-inline">
                        <input type="checkbox" name="term" value="true" required style="margin-left:10px;">
                        <span style="margin-left:10px;"><b>I agree to share my information in Blood Donor
                                List</b></span>
                    </div>
                    <!--End form-group-->

                    <div class="form-group">
                        <button id="submit" name="submit" type="submit" class="btn btn-primary center-aligned" style="margin-top: 20px;">Submit</button>
                    </div>

                </form>
            </div>
        </div>
    </div>


    <div class="container py-5">
        <div class="container">
            <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
                <p class="col-md-4 mb-0 text-muted">Blood Donation Portal Developed By Keshav Naithani</p>

                <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>
