<?php
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

include "../conn/conn.php";

$sql = "INSERT INTO teacher( fname, lname, address, qualification, city, state, zip, phone, email, gender) VALUES 
('{$first_name}','{$last_name}','{$teacher_address}','{$teacher_qualification}','{$teacher_city}','{$teacher_state}','{$teacher_zipcode}','{$teacher_phone}','{$teacher_email}','{$teacher_gender}')";

if(mysqli_query($conn,$sql)){
    echo 1; 
}else{
    echo 0;
}
?>
