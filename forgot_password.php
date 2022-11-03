<!DOCTYPE html>
<html>

<head>
    <title>login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/login.css">
    <script src="dist/sweetalert.js"></script>
    <link rel="stylesheet" href="dist/sweetalert.css">
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

    <div id='login-form' class='login-page'>
        <!---creating form box----->
        <div class="form-box">
            <br>
            <p>
                <center><b>Reset Password </b></center>
            </p><br>
            <input type="text" placeholder="Enter your email id" class='input-field' name="email" id="email" required />


            <center> <button class='submit-btn' style="margin-top:55px;" name="submitBtn" id="submitBtn">Send Code</button></center>
            <center>
                <p style="font-size:15px">Already have an Account?<a href="login.php">Login</a>
                <p>
            </center>

        </div>
    </div>

</body>
<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/script.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</html>
<script>
    $("#submitBtn").click(() => {
        email = $("#email").val();
        if (isEmailValid(email)) {
            $.ajax({
                type: "POST",
                url: "includes/other/other.php",
                data: {
                    'email': email,
                    'action': 1,
                },
                dataType: 'JSON',
                cache: false,
                success: function(response) {
                    if (response.status == 1) {
                        swal('success', response.msg, 'success');
                        setTimeout(() => {
                            window.location.href = 'login.php';
                        }, 1000);
                    } else {
                        swal('error', response.msg, 'error');
                    }
                }
            });
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