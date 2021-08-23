<?php
include "../../conn/conn.php";

$hostel_ID = $_POST["id"];
$sql = "SELECT * FROM hostel WHERE id = {$hostel_ID}";
$result = mysqli_query($conn,$sql);
$output1 = "";

        while($row = mysqli_fetch_array($result)){
            $output1 .="
                <h1 class='h_action_btn_hide' id='h_action_btn_hide'>X</h1>
                <button>Edit{$row['id']}</button>
                <button>Delete{$row['id']}</button>
            "; 
        }
       
       mysqli_close($conn);
       echo $output1;


?>