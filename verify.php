

<?php
include 'db/config.php';

if (isset($_GET['email']) && isset($_GET['code'])) {
    $e = $_GET['email'];
    $c = $_GET['code'];
    $data = $conn->query("SELECT * from tbl_login where `username`='" . $_GET['email'] . "' AND `temp_code`='" . $_GET['code'] . "'")->fetch_assoc();
    if (!empty($data) && $data['status'] == 0) {
        if ($conn->query("UPDATE tbl_login SET `status`=1 WHERE `log_id`='" . $data['log_id'] . "'")) {
            echo "Account Activated. Youll be redirected to login page.";
            echo "<script>
            setTimeout(() => {
                window.location.href='login.php';
            }, 1000);
            </script>";
        } else {
            echo "Account Activation failed. Youll be redirected to login page.";
            echo "<script> 
            setTimeout(() => {
                window.location.href='login.php';
            }, 1000);
            </script>";
        }
    } else {
        echo "Error, Account activation session expired.";
        echo "<script> setTimeout(() => {
            window.location.href='login.php';
        }, 1000);
        </script>";
    }
}
// http://localhost/verify.php?email=savioalwd@gmail.com&code=cd9b743cd5377bdfc2f2e9459766fd22