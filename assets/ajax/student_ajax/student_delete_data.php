<?php
include '../../conn/conn.php';
$student_id2 = $_POST["id"];
// $fname = $_POST['f_name'];
// $lname = $_POST['l_name'];
// $father_name = $_POST['s_father'];
// $enroll_year = $_POST['s_enroll_year'];
// $dob = $_POST['s_dob'];
// $class = $_POST['s_class'];
// $gender = $_POST['s_gender'];
// $academic_year =$_POST['s_academic_year'];
// $target_dir = "../../../images/";
// $target_file = $target_dir . basename($_FILES["file"]["name"]);





$sql3 = "DELETE FROM student WHERE student_id = {$student_id2}";
$result3 = mysqli_query($conn,$sql3);
$row = mysqli_fetch_assoc($result3);
if(unlink("images/".$row["image"])){
    echo 1;
}else{
    echo 0;
}

?>