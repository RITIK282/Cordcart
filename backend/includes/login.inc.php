<?php require './inc/config.php'; ?>

<?php
if (isset($_POST['usrLogin'])) {

    $usremail = $_POST['cust_email'];
    $usrpassword = $_POST['cust_pass'];

    if (empty($usremail) || empty($usrpassword)) {
        header("Location: ../../login.php?lgerror=emptyFields");
        exit();
    } else {
        $sql = "SELECT * FROM Customers WHERE cust_email=?;";
        $stmt = mysqli_stmt_init($conn_1);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../../login.php?lgerror=sqlError1");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, 's', $usremail);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result)) {
                $pwdCheck = password_verify($usrpassword, $row['cust_password']);

                if ($pwdCheck == false) {
                    header("Location: ../../login.php?lgerror=wrongPassword");
                    exit();
                } elseif ($pwdCheck == true) {
                    session_start();
                    $_SESSION['userId'] = $row['customer_uid'];
                    $_SESSION['userRole'] = $row['cust_role'];
                    $_SESSION['userName'] = $row['cust_name'];

                    // header("Location: ../../cms/mycourses.php");
                    header('Location: ../../cms/mycourses.php');
                } else {
                    header("Location: ../../login.php?lgerror=wrongPassword");
                }
            } else {
                header("Location: ../../login.php?lgerror=notAuthenticated");
                exit();
            }
        }
    }
} else {
    header('Location: ../index.php');
    exit();
}