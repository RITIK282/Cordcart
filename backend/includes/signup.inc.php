<?php require './inc/config.php'; ?>
<?php
if (isset($_POST['usrSignUp'])) {

    $usrname = $_POST['cust_name'];
    $usremail = $_POST['cust_email'];
    $usrpassword = $_POST['cust_pass'];
    $usrphnum = $_POST['cust_phone'];

    if (empty($usrname) ||empty($usremail) || empty($usrpassword)) {
        header("Location: ../../signup.php?superror=emptyFields");
        exit();
    } else {
        $sql = "SELECT cust_email FROM Customers WHERE cust_email=?";
        $stmt = mysqli_stmt_init($conn_1);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../../signup.php?superror=sqlError1");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, 's', $usremail);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if ($resultCheck > 0) {
                header("Location: ../../signup.php?superror=emailAlreadyExists");
            } else {
                $sql = "INSERT INTO Customers (cust_name, cust_email, cust_phone, cust_password) VALUES (?, ?, ?, ?)";
                $stmt = mysqli_stmt_init($conn_1);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../../signup.php?superror=sqlError2");
                    exit();
                } else {
                    $hash = password_hash($usrpassword, PASSWORD_DEFAULT);

                    mysqli_stmt_bind_param($stmt, 'ssss', $usrname, $usremail, $usrphnum, $hash);
                    mysqli_stmt_execute($stmt);
                    header("Location: ../../signup.php?signup=success");
                    exit();
                }
            }
        }
    }
} else {
    header('Location: ../../index.php');
    exit();
}