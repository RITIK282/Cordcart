<?php require 'config.php'; ?>
<?php
if (isset($_POST['intLoginBtn'])) {

    $emailteam = $_POST['emailTeam'];
    $password = $_POST['pwdEntTeam'];

    if (empty($emailteam) || empty($password)) {
        header("Location: ../../../teamlogin.html?error=emptyFields");
        exit();
    } else {
        $sql = "SELECT * FROM intmembers WHERE int_email=?;";
        $stmt = mysqli_stmt_init($conn_1);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../../../teamlogin.html?error=sqlError");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, 's', $emailteam);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result)) {
                $pwdCheck = password_verify($password, $row['int_password']);
                $roleCheck = $row['int_role'];

                if ($pwdCheck == false) {
                    header("Location: ../../../teamlogin.html?error=wrongPassword");
                    exit();
                } elseif ($pwdCheck == true) {
                    session_start();
                    $_SESSION['userId'] = $row['int_id'];
                    $_SESSION['userRole'] = $row['int_role'];
                    $_SESSION['userName'] = $row['int_name'];

                    header("Location: ../../../cms/manage-courses-team.php");
                    
                } else {
                    header("Location: ../../../teamlogin.html?error=wrongPassword");
                }
            } else {
                header("Location: ../../../teamlogin.html?error=notAuthenticated");
                exit();
            }
        }
    }
} 
else {
    header("Location: ../../../teamlogin.php?err=btnNotPressed");
    exit();
}
?>