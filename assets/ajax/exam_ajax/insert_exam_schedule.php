<?php
include '../../conn/conn.php';
$exam_name = $_POST['e_name'];
$exam_type = $_POST['s_type'];
$exam_class = $_POST['s_class'];
$exam_section =$_POST['s_section'];
$exam_time = $_POST['s_time'];
$exam_date = $_POST['s_date'];


$e_insert ="INSERT INTO `exam`(`e_name`, `e_type`, `e_class`, `e_section`, `e_time`, `e_date`) VALUES 
('$exam_name','$exam_type','$exam_class','$exam_section','$exam_time','$exam_date')";
$fire = mysqli_query($conn,$e_insert);
if($fire){
    echo 1;
}else{
    echo 0;
}

?>