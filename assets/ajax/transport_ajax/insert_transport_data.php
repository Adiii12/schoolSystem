<?php
include '../../conn/conn.php';
$route_name = $_POST['route_name'];
$vehicle_number = $_POST['vehicle_number'];
$driver_name = $_POST['driver_name'];
$license_number =$_POST['license_number'];
$phone_number  = $_POST['phone_number'];



$t_insert ="INSERT INTO `transport`(`route_name`, `vehicle_no`, `driver_name`, `driver_license`, `contact_number`) VALUES 
('$route_name','$vehicle_number','$driver_name','$license_number','$phone_number')";
$fire = mysqli_query($conn,$t_insert);
if($fire){
    echo 1;
}else{
    echo 0;
}

?>