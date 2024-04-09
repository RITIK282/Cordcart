<?php require './cms-includes/config.php'; ?>

<?php

if(isset($_POST['updateMember'])){

    $usrname = $_POST['tm-name'];
    $usremail = $_POST['tm-email'];
    $usrpassword = $_POST['tm-password'];
    $usrphnum = $_POST['tm-ph'];
    $usrrole = $_POST['tm-role'];
    $usrid = $_POST['tm-id'];

    if (empty($usrname) ||empty($usremail) || empty($usrpassword) || empty($usrphnum)) {
        header("Location: ../../cms/add-teammember.php?err=emptyFields");
        exit();
    } else {
        $sql = "UPDATE intmembers SET int_name=?, int_email=?, int_phone=?, int_password=? WHERE int_id=$usrid";
        $stmt = mysqli_stmt_init($conn_1);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../../cms/add-teammember.php?err=sqlError2");
            exit();
        } else {
            $hash = password_hash($usrpassword, PASSWORD_DEFAULT);
            mysqli_stmt_bind_param($stmt, 'ssis', $usrname, $usremail, $usrphnum, $hash);
            mysqli_stmt_execute($stmt);
            header("Location: ../../cms/add-teammember.php?err=&success=updateMem");
            exit();
        }
    }

}else{

if (isset($_POST['addMember'])) {

    $usrname = $_POST['tm-name'];
    $usremail = $_POST['tm-email'];
    $usrpassword = $_POST['tm-password'];
    $usrphnum = $_POST['tm-ph'];
    $usrrole = $_POST['tm-role'];

    if (empty($usrname) ||empty($usremail) || empty($usrpassword) || empty($usrphnum)) {
        header("Location: ../../cms/add-teammember.php?err=emptyFields");
        exit();
    } else {
        $sql = "SELECT int_email FROM intmembers WHERE int_email=?";
        $stmt = mysqli_stmt_init($conn_1);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../../cms/add-teammember.php?err=sqlError1");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, 's', $usremail);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if ($resultCheck > 0) {
                header("Location: ../../cms/add-teammember.php?err=emailAlreadyExists");
            } else {
                $sql = "INSERT INTO intmembers (int_name, int_email, int_phone, int_password, int_role) VALUES (?, ?, ?, ?, ?)";
                $stmt = mysqli_stmt_init($conn_1);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../../cms/add-teammember.php?err=sqlError2");
                    exit();
                } else {
                    $hash = password_hash($usrpassword, PASSWORD_DEFAULT);

                    mysqli_stmt_bind_param($stmt, 'ssiss', $usrname, $usremail, $usrphnum, $hash, $usrrole);
                    mysqli_stmt_execute($stmt);
                    header("Location: ../../cms/add-teammember.php?err=&success=addMem");
                    exit();
                }
            }
        }
    }

} else {
    header('Location: ../../cms/add-teammember.php');
    exit();
}}