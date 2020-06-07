<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="../imgs/8th.png" type="image/icon type" />
    <title>Login and Registration Form</title>
    <link rel="stylesheet" href="../css/style.css" />

    <style>
        .text-white {
            color: white;
        }
    </style>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
</head>

<body>
    <div class="container-fluid">
        <header class="blog-header py-3">
            <h1 class="headingfont" align="center">
                <img class="mr-1 mb-2" src="../imgs/8th.png" alt="college logo" width="45" height="45" />MyCollege
            </h1>
        </header>

        <div class="hero d-flex justify-content-center align-items-center">
            <div class="form-box">
                <div class="btn-box">
                    <div id="btn"></div>
                    <input id="rg-btn" class="toggle-btn text-light" type="button" value="Register" onclick="register()" />
                    <input id="lg-btn" class="toggle-btn" type="button" value="Log In" onclick="login()" />
                </div>

                <form id="register" method="post" action="ProcessForm.php" class="input-grp">
                    <div class="d-flex justify-content-center"></div>

                    <div>
                        <label for="new-ID">ID: </label>
                        <input id="new-ID" name="newID" type="text" class="input-field" placeholder="Enter ID" required />
                        <span id="new-ID-err" style="color: red;"></span>
                    </div>

                    <div>
                        <label for="email">Email: </label>
                        <input id="email" name="email" type="email" class="input-field" placeholder="Enter email" required />
                        <span id="new-email-err" style="color: red;"></span>
                    </div>

                    <div>
                        <label for="new-pw">Password: </label>
                        <input id="new-pw" name="newPW" type="password" class="input-field" placeholder="Enter Password" required />
                    </div>

                    <div>
                        <input id="reg-checkbox" type="checkbox" class="checkbox" required />
                        <label for id="reg-checkbox" class="checkbox-text">I agree to the <a href="TermsAndConditions.php">terms & conditions</a>.</label>
                    </div>

                    <input id="reg-btn" class="submit-btn text-light" type="submit" name="register" value="Register" />
                </form>

                <form id="login" method="post" action="ProcessForm.php" class="input-grp">
                    <div class="d-flex justify-content-center">
                        <span id="log-in-err" style="color: red; display: none;">Wrong ID or password, please try again!</span>
                    </div>

                    <div>
                        <label for="ID">ID: </label>
                        <input id="ID" name="ID" type="text" class="input-field" placeholder="Enter ID" required />
                    </div>

                    <div>
                        <label for="pw">Password: </label>
                        <input id="pw" name="pw" type="password" class="input-field" placeholder="Enter Password" required />
                    </div>

                    <div class="mb-2">
                        <a href="RequestID.php">Forgot ID?</a>
                    </div>

                    <div>
                        <input id="checkbox" type="checkbox" class="checkbox" /><label for="checkbox" class="checkbox-text ml-1">Keep me logged in</label>
                    </div>

                    <input id="login-btn" class="submit-btn text-light" type="submit" name="login" value="Log In" />
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>

    <script src="../js/RegisterLogin.js"></script>
</body>

</html>