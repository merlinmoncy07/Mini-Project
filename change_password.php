<?php
include 'db/config.php';

if (isset($_GET['email']) && isset($_GET['token'])) {
    $data = $conn->query("SELECT * FROM `tbl_login` WHERE `tbl_login`.`username` = '" . $_GET['email'] . "' AND `tbl_login`.`temp_code` = '" . $_GET['token'] . "'")->fetch_assoc();
    if (!empty($data)) {
?>
        <!DOCTYPE html>
        <html>

        <head>
            <title>login</title>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="css/login.css">
            <script src="dist/sweetalert.js"></script>
            <link rel="stylesheet" href="dist/sweetalert.css">
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

            <div id='login-form' class='login-page'>
                <div class="form-box">

                    <br>
                    <p>
                        <center><b>Change Password</b></center>
                    </p><br>
                    <input type="password" placeholder="Enter  New Password" class='input-field' id="new_password" required>
                    <div class="user-box">
                        <input type="password" placeholder="Enter Password" class='input-field' id="cnew_password" required>
                    </div>
                    <input type="hidden" name="id" id="id" value="<?= $data['log_id'] ?>">
                    <center> <button type='submit' class='submit-btn' id="submitBtn" style="margin-top:55px;">Update Paasword</button></center>


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
                id = $("#id").val();
                new_password = $("#new_password").val();
                cnew_password = $("#cnew_password").val();
                if (CheckPassword(new_password) && CheckPassword(cnew_password)) {
                    if (new_password == cnew_password) {
                        $.ajax({
                            type: "POST",
                            url: "includes/other/other.php",
                            data: {
                                'new_password': new_password,
                                'cnew_password': cnew_password,
                                'id': id,
                                'action': 2,
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
                        showError('password and confirm password not match...')
                    }
                }
            })

            function CheckPassword(inputtxt) {
                var regexExp = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;

                if (regexExp.test(inputtxt)) {
                    return true;
                } else {
                    showError('password between 6 to 20 characters which contain at least one numeric digit, one uppercase and one lowercase letter')
                    return false;
                }
            }

            function showError(msg, status) {
                if (status == 1) {
                    swal('success', msg, 'success');
                } else {
                    swal('error', msg, 'error');
                }
            }

            function swal(msg1, ms2, msg3) {
                alert(msg2);
            }
        </script>

<?php }
} ?>