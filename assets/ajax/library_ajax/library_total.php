<?php
include '../../conn/conn.php';
    $sql = "SELECT * FROM library";
    $result = mysqli_query($conn,$sql);
    $libraryCount = mysqli_num_rows($result);
    echo $libraryCount;

?>