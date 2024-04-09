<?php require './cms-includes/config.php'; ?>

<?php

if(isset($_POST['add-update-course-btn'])){

    $ctitle = $_POST['courseTitle'];
    $csdesc = $_POST['courseShortDesc'];
    $cwyll = $_POST['courseWylleft'];
    $cwylr = $_POST['courseWylright'];
    $cldesc = $_POST['courseLongDesc'];
    $cprice = $_POST['coursePrice'];
    $updateCourseId = $_POST['updateCourseId'];
    $creatorid = $_SESSION['userId'];
    
    if (empty($ctitle) ||empty($csdesc) || empty($cwyll) || empty($cwylr) || empty($cldesc) || empty($cprice)) {
        header("Location: ../../cms/addCourse.php?err=emptyFields");
        exit();
    }else{
        $sql = "UPDATE Course_details SET course_title=?, course_short_desc=?, course_wylleft=?, course_wylright=?, course_long_desc=?, course_price=?, creator_id=? WHERE course_id=$updateCourseId";
        $stmt = mysqli_stmt_init($conn_1);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../../cms/addCourse.php?err=updateSqlError1");
            exit();
        }else{
            mysqli_stmt_bind_param($stmt, 'sssssii', $ctitle, $csdesc, $cwyll, $cwylr, $cldesc, $cprice, $creatorid);
            mysqli_stmt_execute($stmt);
            header("Location: ../../cms/addCourse.php?err=&success=updateSuccess");
            exit();
        }
    }

}else{

if(isset($_POST['add-edit-course-btn'])){

    $ctitle = $_POST['courseTitle'];
    $csdesc = $_POST['courseShortDesc'];
    $cwyll = $_POST['courseWylleft'];
    $cwylr = $_POST['courseWylright'];
    $cldesc = $_POST['courseLongDesc'];
    $cprice = $_POST['coursePrice'];
    $cImage = $_FILES['courseImage']['name'];;
    $creatorid = $_SESSION['userId'];

    if (empty($ctitle) ||empty($csdesc) || empty($cwyll) || empty($cwylr) || empty($cldesc) || empty($cprice) || empty($cImage)) {
        header("Location: ../../cms/addCourse.php?err=emptyFields");
        exit();
    }else{
        $target = "../../Course Images/" . basename($cImage);
        if (!move_uploaded_file($_FILES['courseImage']['tmp_name'], $target)) {
            header('Location: ../../cms/addCourse.php?err=imageNotUploaded');
            exit();
        }else{
        $sql = "INSERT INTO Course_details (course_title, course_short_desc, course_wylleft, course_wylright, course_long_desc, course_price, course_image, creator_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_stmt_init($conn_1);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../../cms/addCourse.php?err=sqlError1");
            exit();
        }else{
            mysqli_stmt_bind_param($stmt, 'sssssisi', $ctitle, $csdesc, $cwyll, $cwylr, $cldesc, $cprice, $cImage, $creatorid);
            mysqli_stmt_execute($stmt);
            header("Location: ../../cms/addCourse.php?err=&success=publishSuccess");
            exit();
        }}
    }


}else{
    echo 'Publish Button Not pressed';
}}
