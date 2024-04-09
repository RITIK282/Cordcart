<?php require 'sideandnavbar.php'?>

<title>Add Course</title>

<?php 
if(isset($_SESSION['userId'])){
if(isset($_GET['course_id']) && $_GET['query']=='edit'){

  $courseid = $_GET['course_id'];
  $getcoursedata = getSpecificCourseData($courseid);
?>

<main>
<?php include 'errors.php' ?>
  <form method="POST" action="../backend/cms/add-edit-course.php">
  <div class="form-group">
    <label>Course Title <span class="star-red">*</span></label>
    <input type="text" class="form-control" name="courseTitle" placeholder="Course Title" value="<?php echo $getcoursedata[1] ?>">
  </div>
  <div class="form-group">
    <label>Course Short Description <span class="star-red">*</span></label>
    <input type="text" class="form-control" name="courseShortDesc" placeholder="Course Short Description" value="<?php echo $getcoursedata[2] ?>">
  </div>
  <div class="form-group">
    <label>What you'll learn Left Side <span class="star-red">*</span></label>
    <textarea name="courseWylleft" id="what-y-l-left" placeholder="Please mention your points as bulleted points"><?php echo $getcoursedata[3] ?></textarea>
  </div>
  <div class="form-group">
    <label>What you'll learn Right Side <span class="star-red">*</span></label>
    <textarea name="courseWylright" id="what-y-l-right"><?php echo $getcoursedata[4] ?></textarea>
  </div>
  <div class="form-group">
    <label>Course Description <span class="star-red">*</span></label>
    <textarea name="courseLongDesc" id="course-long-desc"><?php echo $getcoursedata[5] ?></textarea>
  </div>
  <div class="form-group">
    <label>Course Price <span class="star-red">*</span></label>
    <input type="number" class="form-control" name="coursePrice" placeholder="Course Price" value="<?php echo $getcoursedata[7] ?>">
  </div>
  <input type="hidden" value=<?php echo $courseid; ?> name="updateCourseId"/>
  <button type="submit" class="btn btn-success" name="add-update-course-btn">Update</button>
</form>
</main>

<?php }

else if(isset($_GET['course_id']) && $_GET['query']=='delete'){
  $courseid = $_GET['course_id'];
  echo deleteCourse($courseid);
  header("Location: ../../cms/manage-courses-team.php?err=&success=delCourse");
  exit();
}

else{ ?>

<main>
  <?php include 'errors.php' ?>
<form method="POST" action="../backend/cms/add-edit-course.php" enctype="multipart/form-data">
  <div class="form-group">
    <label>Course Image <span class="star-red">*</span></label>
    <input type="file" class="form-control" name="courseImage">
  </div>
  <div class="form-group">
    <label>Course Title <span class="star-red">*</span></label>
    <input type="text" class="form-control" name="courseTitle" placeholder="Course Title">
  </div>
  <div class="form-group">
    <label>Course Short Description <span class="star-red">*</span></label>
    <input type="text" class="form-control" name="courseShortDesc" placeholder="Course Short Description">
  </div>
  <div class="form-group">
    <label>What you'll learn Left Side <span class="star-red">*</span></label>
    <textarea name="courseWylleft" id="what-y-l-left" placeholder="Please mention your points as bulleted points"></textarea>
  </div>
  <div class="form-group">
    <label>What you'll learn Right Side <span class="star-red">*</span></label>
    <textarea name="courseWylright" id="what-y-l-right"></textarea>
  </div>
  <div class="form-group">
    <label>Course Description <span class="star-red">*</span></label>
    <textarea name="courseLongDesc" id="course-long-desc"></textarea>
  </div>
  <div class="form-group">
    <label>Course Price <span class="star-red">*</span></label>
    <input type="number" class="form-control" name="coursePrice" placeholder="Course Price">
  </div>
  <button type="submit" class="btn btn-success" name="add-edit-course-btn">Publish</button>
</form>
</main>

<?php }?>

<?php }
else{
    Header("location: ../login.html");
    exit();
}

require 'cmsfooter.php'?>