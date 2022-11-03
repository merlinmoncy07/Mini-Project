<!DOCTYPE html>
<html lang="en">

<head>
    <title>User Registration</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />

    <style>
        body {
            background-image: url('images/l.png');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
    </style>

</head>


<body>
    <nav class="nav-menu">
        <div class="burger-container" id="burger">
            <i class="fa-solid fa-bars"></i>
        </div>
        <h3>EYE MATIC</h3>
        <ul class="menu">
            <li>
                <a href="index.php">Home</a>
            </li>
            <li>
                <a href="about.php">about us</a>
            </li>
            <li>
                <a href="products.php">Products</a>
            </li>
            <li>
                <a href="login.php">Login</a>
            </li>
            <li>
                <a href="register.php">Patient Register</a>
            </li>
            <li>
                <a href="doctorreg.php">Doctor Register</a>
            </li>
        </ul>
    </nav>
    <div class="row">
        <div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
            <br><br>

            <div class="box-register">
                <center>
                    <h2>Login</h2>
                </center>

                <fieldset>
                    <legend>

                    </legend>
                    <p  style="color: black;">
                        Enter Email:
                    </p>
                    <div class="form-group">
                        <input type="text" class="form-control" name="email" id="email" placeholder="Email" autocomplete="off" required>

                    </div> <br>
                    <p  style="color: black;">
                        Enter Password:
                    </p>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password" autocomplete="off" required>
                    </div> <br>

                    <div class="form-actions">
                        <p style="color: black;">
                            Dont have an account
                            <a style="color: black;text-decoration: underline;" href="register.php">
                                Register
                            </a>
                        </p><br>
                        <p style="color: black;">
                            Forgot password
                            <a style="color: black;text-decoration: underline;" href="forgot_password.php">
                                Click here
                            </a>
                        </p><br>
                        <center>
                            <button class="btn btn-primary" id="signup_btn">
                                Login <i class="fa fa-arrow-circle-right"></i>
                            </button>
                        </center>
                    </div>
                </fieldset>

            </div>
        </div>

</body>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<script>
    const modal = document.querySelector(".modal");
    const overlay = document.querySelector(".overlay");
    const openModalBtn = document.querySelector(".btn-open");

    $('#signup_btn').click(() => {

        email = $("#email").val();
        password = $("#password").val();
        if (isEmailValid(email)) {
            if (password != '') {
                $.ajax({
                    type: "POST",
                    url: "includes/login/login.php",
                    data: {
                        'email': email,
                        'password': password,
                        'action': 1,
                    },
                    dataType: 'JSON',
                    cache: false,
                    success: function(response) {
                        if (response.status == 1) {
                            swal('success', response.msg, 'success');
                            setTimeout(() => {
                                if (response.type == 1) {
                                    window.location.href = 'admin/index.php';
                                } else if (response.type == 2) {
                                    window.location.href = 'doctor/index.php';
                                } else if (response.type == 3) {
                                    window.location.href = 'user/index.php';
                                }
                            }, 1000);

                        } else {
                            swal('error', response.msg, 'error');
                        }
                    }
                });
            } else {
                showError('Please enter valid password')
            }
        } else {
            showError('Please enter a valid email');
        }
    })


    const isEmailValid = (email) => {
        const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
    };

    function showError(msg, status) {
        if (status == 1) {
            swal('success', msg, 'success');
        } else {
            swal('error', msg, 'error');
        }
    }

    function swal(msg1, msg2, msg3) {
        alert(msg2);
    }
</script>

</html>