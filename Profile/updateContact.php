<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="../css/style.css">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="icon" href="../imgs/8th.png" type="image/icon type">
    <title>Update Contact Information</title>
</head>

<body>
    <div class="container">

        <header class="blog-header py-3">
            <h1 class="headingfont" align="center"><img class="mr-1 mb-2 " src="../imgs/8th.png" alt="college logo" width="45" height="45">MyCollege</h1>
        </header>


        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <ul class="navbar-nav mr-auto ">
                <li class="nav-item">
                    <a class="nav-link" href="profile.php">My Profile</a>
                </li>
            </ul>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="collapsibleNavbar">
                <ul class="navbar-nav mr-auto ">
                    <li class="nav-item ">
                        <a class="nav-link" href="profileDetail.php">Detail</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link " href="updatePersonal.php">Update <span class="sr-only">(current)</span> </a>
                    </li>

                </ul>
                <ul class="navbar-nav mr-1">
                    <li class="nav-item dropdown">

                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../imgs/profile.png" width="18" height="18">
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="../Activity/Activity.php">Activity</a>
                            <a class="dropdown-item" href="../Activity/Sembreak.php">Semester Break</a>
                            <a class="dropdown-item" href="../Activity/Report.php">Report an Issue</a>
                            <a class="dropdown-item" href="../RegisterLogin/Logout.php">Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <main class="jumbotron mt-2">
            <h2>Update Academic Information</h2>
            <?php
            if (isset($_SESSION['id']) && isset($_SESSION['pw'])) {
            ?>
                <nav class="navbar navbar-expand-lg navbar-light">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="updatePersonal.php">Personal</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="updateAcademic.php">Academic</span></a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="updateContact.php">Contact <span class="sr-only">(current)</span></a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <form method="post" onsubmit="return validateForms()" id="form" class="jumbotron mt-3">
                    <div class="form-group row">
                        <label for="address" class="col-md-2 col-form-label"><b>*Address</b></label>
                        <div class="col-md-3">
                            <input id="address1" class="form-control" type="text" placeholder="ADDRESS LINE 1" required>
                            <input id="address2" class="form-control" type="text" placeholder="ADDRESS LINE 2">
                            <input id="address3" class="form-control" type="text" placeholder="ADDRESS LINE 3">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="postcode" class="col-md-2 col-form-label"><b>*Postcode</b></label>
                        <div class="col-md-2">
                            <input id="postcode" class="form-control" type="number" min="10000" max="100000" placeholder="POSTCODE" required>
                            <small id="postcodeHelp" class="form-text text-muted">With 5 digits only.</small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="city" class="col-md-2 col-form-label"><b>*City</b></label>
                        <div class="col-md-3">
                            <input id="city" class="form-control" type="text" placeholder="CITY" required>
                            <small id="cityHelp" class="form-text text-muted">Eg. KUANTAN</small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="state" class="col-md-2 col-form-label"><b>*State</b></label>
                        <div class="col-md-3">
                            <select id="faculty" class="form-control" required="">
                                <option selected disabled value="">Choose...</option>
                                <option value="1">Johor</option>
                                <option value="2">Kedah</option>
                                <option value="3">Kelantan</option>
                                <option value="4">Melaka</option>
                                <option value="5">Negeri Sembilan</option>
                                <option value="6">Pahang</option>
                                <option value="7">Pulau Pinang</option>
                                <option value="8">Perak</option>
                                <option value="9">Perlis</option>
                                <option value="10">Sabah</option>
                                <option value="11">Sarawak</option>
                                <option value="12">Selangor</option>
                                <option value="13">Terengganu</option>
                                <option value="14">Wilayah Persekutuan (Kuala Lumpur)</option>
                                <option value="15">Wilayah Persekutuan (Labuan)</option>
                                <option value="16">Wilayah Persekutuan (Putrajaya)</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="phoneNo" class="col-md-2 col-form-label"><b>*Telephone No.</b></label>
                        <div class="col-md-3">
                            <input id="phoneNo" class="form-control" type="number" placeholder="PHONE NUMBER" min="100000000" max="99999999999" required>
                            <small id="phoneNoHelp" class="form-text text-muted">Numbers with 10 or 11 digits only without "-"</small>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-md-2 col-form-label"><b>*Email</b></label>
                        <div class="col-md-3">
                            <input id="email" class="form-control" type="text" pattern=".{9,9}" placeholder="STUDENT EMAIL" required>
                            <small id="emailHelp" class="form-text text-muted">Eg. wif181111 (9 characters)</small>
                        </div>
                        <div class="col-md-0"></div>
                        <p>@um.siswa.edu.my</p>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-1">
                            <button type="submit" class="btn btn-primary" id="updateContact">
                                Update
                            </button>
                        </div>
                        <div class="col-md-2">
                            <button type="button" class="btn btn-primary" id="skipContact">Finish</button>
                        </div>
                    </div>
                    <p>#Form marked with asterisk (*) and bolded is required field. <br>
                        #Update all information given or skip to the next section.</p>
                </form>
            <?php
            } else { ?>
                <div class="alert alert-info" role="alert">
                    <h4>Sorry, only authenticated user can access this page.</h4>
                    <p><a href="/Assignment/RegisterLogin/RegisterLogin.php">Log in</a> now.</p>
                </div><?php
                    }
                        ?>
        </main>

        <footer class="container text-center font-italic py-2">
            Copyright © 2020 - XXX Residential College.
        </footer>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript">
        document.getElementById("skipContact").addEventListener("click", function() {
            var confirm = window.confirm("Finish updating?");
            if (confirm) {
                alert("All information to be update is updated successfully.")
                window.location.href = "profile.php";
            } else {
                return true;
            }
        })

        document.getElementById("form").addEventListener("change", function() {
            var address1 = document.getElementById("address1");
            var address2 = document.getElementById("address2");
            var address3 = document.getElementById("address3");
            var city = document.getElementById("city");
            address1.value = address1.value.toUpperCase();
            address2.value = address2.value.toUpperCase();
            address3.value = address3.value.toUpperCase();
            city.value = city.value.toUpperCase();
        })

        document.getElementById("email").addEventListener("change", function() {
            var email = document.getElementById("email");
            email.value = email.value.toLowerCase();
        })

        function validateForms() {
            var confirm = window.confirm("Confirm to update information of contact?");

            if (confirm) {
                alert("Information entered is saved successfully.");
            }
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

</body>

</html>