<?php
include '../../conn/conn.php';
$ex_name = $_POST['ex_name'];
$ex_type = $_POST['ex_type'];
$ex_amount = $_POST['ex_amount'];
$ex_status =$_POST['ex_status'];
$ex_phone  = $_POST['ex_phone'];
$ex_email  = $_POST['ex_email'];
$ex_date  = $_POST['ex_date'];



$ex_insert ="INSERT INTO `expenses`(`ex_name`, `ex_type`, `ex_amount`, `ex_status`, `ex_phone`, `ex_email`, `ex_date`) VALUES 
('$ex_name','$ex_type','$ex_amount','$ex_status','$ex_phone','$ex_email','$ex_date')";
$fire = mysqli_query($conn,$ex_insert);
if($fire){
    echo 1;
}else{
    echo 0;
}

?>