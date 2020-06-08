<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />

    <link rel="stylesheet" href="../css/style.css" />

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />

    <link rel="icon" href="../imgs/8th.png" type="image/icon type" />
    <title>Update Personal Information</title>
    <style>
        .col-md-4 {
            max-width: 200px;
            max-height: 200px;
            border: 1px solid Gray;
            object-fit: cover;

            /* Default text */
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            color: black;
        }

        .image-preview__image {
            display: none;
            width: 100%;
        }
    </style>
</head>

<body>
    <div class="container">
        <header class="blog-header py-3">
            <h1 class="headingfont" align="center">
                <img class="mr-1 mb-2" src="../imgs/8th.png" alt="college logo" width="45" height="45" />MyCollege
            </h1>
        </header>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="profile.php">My Profile</a>
                </li>
            </ul>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="profileDetail.php">Detail</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="updatePersonal.php">Update <span class="sr-only">(current)</span>
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav mr-1">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../imgs/profile.png" width="18" height="18" />
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
            <h2>Update Personal Information</h2>
            <?php
            session_start();
            
            if (isset($_SESSION['id']) && isset($_SESSION['pw'])) {
            ?>
                <nav class="navbar navbar-expand-lg navbar-light">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="updatePersonal.php">Personal <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="updateAcademic.php">Academic</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="updateContact.php">Contact</a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <form method="post" onsubmit="return validateForms()" class="jumbotron mt-3" id="form">
                    <div class="form-group row">
                        <label for="picture" class="col-md-2 col-form-label"><b>*Profile Picture</b></label>
                        <div class="col-md-3">
                            <input style="background-color:red" type="file" class="form-control-file" id="picture" accept="image/jpeg,image/gif,image/png,application/pdf" required>
                            <small id="pictureHelp" class="form-text text-muted">Insert only format <b>.jpg .jpeg .png .gif .pdf</b>
                                with <b>size not exceeding 2MB</b></small>
                        </div>
                        <div class="col-md-2">
                            <button type="button" id="validatePicture" class="btn btn-outline-primary">Validate Picture</button>
                        </div>
                        <div class="col-md-4" id="imagePreview">
                            <img src="" alt="Image Preview" class="image-preview__image">
                            <span class="image-preview__default-text">Image Preview</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Name" class="col-md-2 col-form-label"><b>*Name</b></label>
                        <div class="col-md-5">
                            <input id="name" class="form-control" type="text" required placeholder="FULL NAME" />
                            <small id="nameHelp" class="form-text text-muted">Enter your full name without any symbol or special
                                characters.</small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="oldMatrics" class="col-md-2 col-form-label"><b>*Old Matrics No.</b></label>
                        <div class="col-md-2">
                            <input id="oldMatrics" class="form-control" type="text" pattern=".{9,9}" required />
                            <small id="oldMatricsHelp" class="form-text text-muted">Eg. WIF181111 <br>(9 characters)</small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="newMatrics" class="col-md-2 col-form-label"><b>*New Matrics No.</b></label>
                        <div class="col-md-2">
                            <input id="newMatrics" class="form-control" type="text" pattern=".{10,10}" required />
                            <small id="newMatricsHelp" class="form-text text-muted">Eg. 17166000/1 <br>(10 characters)</small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="IC" class="col-md-2 col-form-label"><b>*IC/Passport No.</b></label>
                        <div class="col-md-3">
                            <input id="IC" class="form-control" type="text" placeholder="IC / PASSPORT NUMBER" required />
                            <small id="passportHelp" class="form-text text-muted">Enter without "-" or any special character</small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nationality" class="col-md-2 col-form-label"><b>*Nationality.</b></label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions1" id="malaysian" value="option1" required />
                            <label class="form-check-label" for="inlineRadio1">Malaysian</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions1" id="nonmalaysian" value="option2" />
                            <label class="form-check-label" for="inlineRadio2">Non-Malaysian</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="gender" class="col-md-2 col-form-label"><b>*Gender.</b></label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="male" value="option1" required="" />
                            <label class="form-check-label" for="inlineRadio1">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="female" value="option2" />
                            <label class="form-check-label" for="inlineRadio2">Female</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="birthday" class="col-md-2 col-form-label"><b>*Date of Birth</b></label>
                        <div class="col-md-3">
                            <input id="birthday" class="form-control" type="date" required />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="race" class="col-md-2 col-form-label">Race</label>
                        <div class="col-md-2">
                            <select id="race" class="form-control">
                                <option selected disabled value="">Choose...</option>
                                <option value="1">Bumiputera</option>
                                <option value="2">Chinese</option>
                                <option value="3">Indian</option>
                                <option value="4">Others</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="religion" class="col-md-2 col-form-label">Religion</label>
                        <div class="col-md-2">
                            <select id="religion" class="form-control">
                                <option selected disabled value="">Choose...</option>
                                <option value="1">Islam</option>
                                <option value="2">Buddhism</option>
                                <option value="3">Christianity</option>
                                <option value="4">Hinduism</option>
                                <option value="5">Others</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="marital" class="col-md-2 col-form-label">Marital Status</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions3" id="single" value="option1" />
                            <label class="form-check-label" for="inlineRadio1">Single</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions3" id="married" value="option2" />
                            <label class="form-check-label" for="inlineRadio2">Married</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions3" id="widowed" value="option3" />
                            <label class="form-check-label" for="inlineRadio3">Widowed</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions3" id="divorced" value="option4" />
                            <label class="form-check-label" for="inlineRadio4">Divorced</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-1">
                            <button type="submit" class="btn btn-primary" id="updatePersonal">
                                Update
                            </button>
                        </div>
                        <div class="col-md-3">
                            <button type="button" class="btn btn-primary" id="skipPersonal">Next</button>
                        </div>
                    </div>
                    <p>#Form marked with asterisk (*) and bolded is required field. <br>#Please validate your profile picture before
                        completing your updates.</p>
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
        var picture = document.getElementById("picture");
        var previewContainer = document.getElementById("imagePreview");
        var previewImage = previewContainer.querySelector(".image-preview__image");
        var previewDefaultText = previewContainer.querySelector(".image-preview__default-text");

        picture.addEventListener("change", function() {
            picture.style.backgroundColor = "red";
            var file = this.files[0];

            if (file) {
                const reader = new FileReader();
                previewDefaultText.style.display = "none";
                previewImage.style.display = "block";

                reader.addEventListener("load", function() {
                    previewImage.setAttribute("src", this.result);
                })

                reader.readAsDataURL(file);
            } else {
                previewDefaultText.style.display = null;
                previewImage.style.display = null;
                previewImage.setAttribute("src", "");
            }
        })

        document.getElementById("validatePicture").addEventListener("click", function() {
            var picture = document.getElementById("picture");
            var abc = document.getElementById("validatePicture")
            var array = picture.value.split(".", 2);
            var type = "." + array[1];
            if (type == ".jpg" || type == ".jpeg" || type == ".png" || type == ".gif" || type == ".pdf") {
                if (picture.files[0].size > 2097152) {
                    alert("File exceeded 2MB");
                    picture.style.backgroundColor = "red";
                } else {
                    alert("This file is suitable");
                    picture.style.backgroundColor = "transparent";
                }
            } else {
                alert("File format is wrong");
                picture.style.backgroundColor = "red";
            }
        })

        document.getElementById("form").addEventListener("change", function() {
            var name = document.getElementById("name");
            var oldMatrics = document.getElementById("oldMatrics");
            var newMatrics = document.getElementById("newMatrics");
            var IC = document.getElementById("IC");
            name.value = name.value.toUpperCase();
            oldMatrics.value = oldMatrics.value.toUpperCase();
            newMatrics.value = newMatrics.value.toUpperCase();
            IC.value = IC.value.toUpperCase();
        })

        document.getElementById("form").addEventListener("keypress", ICfunction);

        function ICfunction() {
            var name = document.getElementById("name");
            var oldMatrics = document.getElementById("oldMatrics");
            var newMatrics = document.getElementById("newMatrics");
            var IC = document.getElementById("IC");
            specialSymbol(name);
            specialSymbol(oldMatrics);
            specialSymbol(newMatrics);
            specialSymbol(IC);
        }

        function specialSymbol(input) {
            var correct = new Boolean(false);
            for (var i = 0; i < input.value.length; i++) {
                keychar = input.value.charAt(i);
                if (keychar == "'" || keychar == "`" || keychar == "!" || keychar == "@" || keychar == "#" || keychar == "$" ||
                    keychar == "%" || keychar == "^" || keychar == "&" || keychar == "*" || keychar == "(" || keychar == ")" ||
                    keychar == "-" || keychar == "_" || keychar == "+" || keychar == "=" || keychar == "/" || keychar == "~" ||
                    keychar == "<" || keychar == ">" || keychar == "," || keychar == ";" || keychar == ":" || keychar == "|" ||
                    keychar == "?" || keychar == "{" || keychar == "}" || keychar == "[" || keychar == "]" || keychar == "¬" ||
                    keychar == "£" || keychar == '"' || keychar == "\\") {
                    correct = false;
                    break;
                } else {
                    correct = true;
                }
            }
            if (correct == false && input.value.length > 0) {
                input.style.borderColor = "red";
            } else {
                input.style.borderColor = "transparent";
            }
        }

        document.getElementById("skipPersonal").addEventListener("click", function() {
            var confirm = window.confirm("Proceed to update academic detail?");
            if (confirm) {
                window.location.href = "updateAcademic.php";
            } else {
                return true;
            }
        })

        function validateForms() {
            var confirm = window.confirm("Confirm to update information of personal?");
            var picture = document.getElementById("picture");
            var name = document.getElementById("name");
            var oldMatrics = document.getElementById("oldMatrics");
            var newMatrics = document.getElementById("newMatrics");
            var IC = document.getElementById("IC");

            if (picture.style.backgroundColor == "red") {
                alert("The input at red-colored background is invalid.")
                return false;
            }
            if (name.style.borderColor == "red") {
                alert("The input at red-colored border form is invalid.")
                return false;
            }
            if (oldMatrics.style.borderColor == "red") {
                alert("The input at red-colored border form is invalid.")
                return false;
            }
            if (newMatrics.style.borderColor == "red") {
                alert("The input at red-colored border form is invalid.")
                return false;
            }
            if (IC.style.borderColor == "red") {
                alert("The input at red-colored border form is invalid.")
                return false;
            }
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