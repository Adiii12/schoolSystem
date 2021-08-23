<?php
include '../../conn/conn.php';
$hostel_name = $_POST['hostel_name'];
$room_number = $_POST['room_number'];
$room_type = $_POST['room_type'];
$number_of_bed =$_POST['number_of_bed'];
$cost_per_bed = $_POST['cost_per_bed'];


$h_insert ="INSERT INTO `hostel`(`hostel_name`, `room_number`, `room_type`, `no_of_bed`, `cost_per_bed`) VALUES 
('$hostel_name','$room_number','$room_type','$number_of_bed','$cost_per_bed')";
$fire = mysqli_query($conn,$h_insert);
if($fire){
    echo 1;
}else{
    echo 0;
}

?>