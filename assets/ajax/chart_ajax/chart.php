<?php
include '../../conn/conn.php';

    $sql = "SELECT jan, SUM(february) AS sum
    FROM fee";
    $fire = mysqli_query($conn,$sql);
    while($row =  mysqli_fetch_assoc($fire)){
        echo $row['sum'];
    } 


?>