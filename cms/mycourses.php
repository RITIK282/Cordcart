<?php require 'sideandnavbar.php'?>

<main>
    <title>My Courses</title>
    <?php
    if(isset($_SESSION['userId'])){

        $userid = $_SESSION['userId'];

        $guc = getUserCourses($userid);

        foreach($guc as $g){
            $id = $g[2];
            $gcd = getSpecificCourseData($id); ?>
    <div class="card" style="width: 18rem">
        <img class="card-img-top" src="https://nareshit.com/wp-content/uploads/2018/08/C-Programming-online-training-nareshit.jpg" alt="Card image cap" />
        <div class="card-body">
            <h5 class="card-title"><?php echo $gcd[1] ?></h5>
            <p class="card-text"><?php echo $gcd[2] ?></p>
            <a href="#" class="btn btn-primary">Go to Course</a>
        </div>
    </div>
    <?php } ?>
</main>

<?php 
}
else{
    Header("location: ../login.php?err=sessionnp");
    exit();
}
require 'cmsfooter.php'?>