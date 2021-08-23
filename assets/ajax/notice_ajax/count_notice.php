<?php
include '../../conn/conn.php';


    $sql = "SELECT * FROM notices";
    $result = mysqli_query($conn,$sql);
    $noticesCount = mysqli_num_rows($result);
    echo $noticesCount;

?>