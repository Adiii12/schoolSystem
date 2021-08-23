<?php
include '../../conn/conn.php';

    $sql = "SELECT * FROM parents";
    $result = mysqli_query($conn,$sql);
    $parentCount = mysqli_num_rows($result);
    echo $parentCount;
?>