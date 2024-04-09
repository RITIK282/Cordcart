<?php

function getAllMembers(){
    global $conn_1;
    $record = array();

    $sql = "SELECT * FROM intmembers";
    $result = $conn_1->query($sql);
    while($row = $result -> fetch_row()){
        $record[] = $row;
    }
    
    return $record;
}

function getUserCourseData($userid){
    global $conn_1;
    $record = array();

    $sql = "SELECT * FROM Course_Details WHERE creator_id=$userid";
    $result = $conn_1->query($sql);
    while($row = $result -> fetch_row()){
        $record[] = $row;
    }
    
    return $record;
}

function getAllCourseData(){
    global $conn_1;
    $record = array();

    $sql = "SELECT * FROM Course_Details";
    $result = $conn_1->query($sql);
    while($row = $result -> fetch_row()){
        $record[] = $row;
    }
    
    return $record;
}

function getSpecificCourseData($id){ // Also used for updating the course, dynamix course page and mycourses page
    global $conn_1;

    $sql = "SELECT * FROM Course_Details WHERE course_id='$id'";
    $result = $conn_1->query($sql);
    $row = mysqli_fetch_array($result);
    
    return $row;
}

function entryCourse($courseid, $userid){

    global $conn_1;

    $sql = "INSERT INTO customer_courses(customer_id, course_id) VALUES(?, ?)";
    $stmt = mysqli_stmt_init($conn_1);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        return 'Error SQL 1';
        exit();
    }else{
        mysqli_stmt_bind_param($stmt, 'ii', $userid, $courseid);
        mysqli_stmt_execute($stmt);
        return 'SuccessFully Executed';
        exit();
    }
}

function getUserCourses($userid){
    global $conn_1;
    $record = array();

    $sql = "SELECT * FROM customer_courses WHERE customer_id=$userid";
    $result = $conn_1->query($sql);
    while($row = $result -> fetch_row()){
        $record[] = $row;
    }
    
    return $record;
}

function intDeleteMember($memberid){
    global $conn_1;

    $sql = "DELETE FROM intmembers WHERE int_id=$memberid";
    $result = $conn_1->query($sql);
    if($result==TRUE){
        return 'Record Deleted Successfully';
    }else{
        return 'Some Error Occured Deleting Record';
    }
}

function intUpdateMember($memberid){
    global $conn_1;

    $sql = "SELECT * FROM intmembers WHERE int_id=$memberid";
    $result = $conn_1->query($sql);
    $row = mysqli_fetch_array($result);
    
    return $row;
}

function deleteCourse($courseid){
    global $conn_1;

    $sql = "DELETE FROM Course_details WHERE course_id='$courseid'";
    $result = $conn_1->query($sql);
    if($result==TRUE){
        return 'Record Deleted Successfully';
    }else{
        return 'Some Error Occured Deleting Record';
    }
}