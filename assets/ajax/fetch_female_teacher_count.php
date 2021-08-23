<?php

include '../conn/conn.php';
$sql = "SELECT * FROM teacher WHERE gender = 'female'";
$fire = mysqli_query($conn,$sql);
$fetchFemaleTeacherCount = mysqli_num_rows($fire);

echo $fetchFemaleTeacherCount ;

    // $sql = "SELECT COUNT(CASE WHEN UPPER(Gender) = 'male' THEN 1 END) Male,
    // COUNT(CASE WHEN UPPER(Gender) = 'female' THEN 1 END) Female
    // FROM student";
    // $fire = mysqli_query($conn,$sql);
    // // $fetchMaleCount = mysqli_num_rows($fire);
    // $json = [];
    // $json2 = [];
    // while($row = mysqli_fetch_assoc($fire)){
    //     $json[] = (int)$row['Male'];
    //     $json2[] =(int)$row['Female'];
    // }
    // // $array[] = json_decode($json, true);
    // // $array[] = json_decode($json2, true);
    // // $result = json_encode($array, JSON_PRETTY_PRINT);
    // // echo $result;
    // // echo json_encode($json);
    // // echo json_encode($json2);
    //     // $fetchMaleCount; 
    //     $newArray =array_merge($json,$json2);
    // echo json_encode($newArray);

?>