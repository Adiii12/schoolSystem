<?php
include '../../conn/conn.php';
$n_title = $_POST['n_title'];
$n_posted_by = $_POST['n_posted_by'];
$n_details = $_POST['n_details'];


$notice_query = "INSERT INTO `notices`(`n_title`, `n_posted_by`, `n_details`) VALUES 
('$n_title','$n_posted_by','$n_details')";
$fire =mysqli_query($conn,$notice_query);
if($fire){
    echo 1;
}else{
    echo 0;
}

?>