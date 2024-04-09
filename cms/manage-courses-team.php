<?php require 'sideandnavbar.php'?>
<main>
    <?php 
    if($_SESSION['userId']){
        if($_SESSION['userRole'] == 'tmember' || $_SESSION['userRole'] == 'tparty'){
            if($_SESSION['userRole'] == 'tmember'){
                $getCourses = getAllCourseData(); 
            }else if($_SESSION['userRole'] == 'tparty'){
                getUserCourseData($_SESSION['userId']);
            } ?>
    <div>
        <title>Manage Courses</title>
        <h4>Manage Your Courses</h4>
        <?php include 'errors.php' ?>
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Course Title</th>
                    <th>Short Descp.</th>
                    <th>Price</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($getCourses as $singleCourse){?>
            <tr>
                <th scope="row"><?php echo $singleCourse[0]; ?></th>
                <td><?php echo $singleCourse[1]; ?></td>
                <td><?php echo $singleCourse[2]; ?></td>
                <td><?php echo $singleCourse[7]; ?></td>
                <td><a href="addCourse.php?query=edit&course_id=<?php echo $singleCourse[0]; ?>"><i class="btn btn-primary fa fa-pencil" aria-hidden="true"></i></a></td>
                <td><a href="addCourse.php?query=delete&course_id=<?php echo $singleCourse[0]; ?>"><i class="btn btn-danger fa fa-trash"></i></a></td>
            </tr>
            <?php }?>
        </tbody>
        </table>
    </div>
</main>

<?php 
} else{
    echo 'Unauthorized Access';
    exit();
}
}
else{
    Header("location: ../teamlogin.html?err=sessionNp");
    exit();
}
require 'cmsfooter.php'?>