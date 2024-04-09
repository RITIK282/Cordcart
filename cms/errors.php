<?php

if(isset($_GET['err'])){
    if($_GET['err']=='emptyFields'){ ?>

    <div class="alert alert-danger">
        <strong>Oops ☹️ ! </strong>You left out some fields !!
    </div>

<?php } else if($_GET['err']=='updateSqlError1' || $_GET['err']=='sqlError1' || $_GET['err']=='sqlError2'){ ?>
    
    <div class="alert alert-danger">
        <strong>Oops ☹️ ! </strong>Some Error occured at our end please contact support !!
    </div>

<?php } else if($_GET['err']=='imageNotUploaded'){ ?>
    <div class="alert alert-danger">
        <strong>Oops ☹️ ! </strong>You Forgot to upload Image !!
    </div>
<?php } else if($_GET['success']=='publishSuccess'){ ?>

    <div class="alert alert-success">
        <strong>Hurray 🤩 ! </strong>You have successfully published a course !!
    </div>

<?php } else if($_GET['success']=='updateSuccess'){ ?>

    <div class="alert alert-success">
        <strong>Hurray 🤩 ! </strong>You have successfully updated a course !!
    </div>

<?php } else if($_GET['success']=='updateMem'){ ?>

    <div class="alert alert-success">
        <strong>Hurray 🤩 ! </strong>You have successfully updated a member !!
    </div>

<?php } else if($_GET['success']=='addMem'){ ?>

    <div class="alert alert-success">
        <strong>Hurray 🤩 ! </strong>You have successfully added a member !!
    </div>

<?php } else if($_GET['success']=='delCourse'){ ?>

    <div class="alert alert-warning" role="alert">
        <strong>Done ☑️</strong> You have deleted a course !!
    </div>

<?php } else if($_GET['success']=='delMem'){ ?>

    <div class="alert alert-warning" role="alert">
        <strong>Done ☑️</strong> You have deleted a member !!
    </div>

<?php }
} ?>