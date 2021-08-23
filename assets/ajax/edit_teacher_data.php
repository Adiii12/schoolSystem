<?php
include "../conn/conn.php";
$teacher_edit_Id = $_POST["id"];
$first_name = $_POST['first_name'];
$last_name  = $_POST['last_name'];
$teacher_address = $_POST['teacher_address'];
$teacher_qualification = $_POST['teacher_qualification'];
$teacher_city = $_POST['teacher_city'];
$teacher_state = $_POST['teacher_state'];
$teacher_zipcode = $_POST['teacher_zipcode'];
$teacher_phone = $_POST['teacher_phone'];
$teacher_email = $_POST['teacher_email'];
$teacher_gender = $_POST['teacher_gender'];


$sql = "UPDATE teacher SET fname='{$first_name}',lname='{$last_name}',
address='{$teacher_address}',qualification='{$teacher_qualification}',city='{$teacher_city}',
state='{$teacher_state}',zip='{$teacher_zipcode}',phone='{$teacher_phone}',email='{$teacher_email}',
gender='{$teacher_gender}' WHERE id = {$teacher_edit_Id}";

if(mysqli_query($conn,$sql)){
    echo 1;
}else{
    echo 0;
}
?>