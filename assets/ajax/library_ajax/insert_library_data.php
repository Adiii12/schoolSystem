<?php
include '../../conn/conn.php';
$library_book = $_POST['l_book'];
$library_subject = $_POST['l_subject'];
$library_writer = $_POST['l_writer'];
$library_class = $_POST['l_class'];
$library_publish = $_POST['l_publish'];
$library_creatingDate =$_POST['l_creatingDate'];
$sql = "INSERT INTO `library`(`book_name`, `subject`, `writer`, `class`, `publish`, `creating_date`) VALUES 
('$library_book','$library_subject','$library_writer','$library_class','$library_publish','$library_creatingDate')";

if(mysqli_query($conn,$sql)){
    echo 1; 
}else{
    echo 0;
}
?>