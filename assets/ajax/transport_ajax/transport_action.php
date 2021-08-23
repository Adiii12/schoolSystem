<?php
include "../../conn/conn.php";

$transport_ID = $_POST["id"];
$sql = "SELECT * FROM transport WHERE id = {$transport_ID}";
$result = mysqli_query($conn,$sql);
$output1 = "";

        while($row = mysqli_fetch_array($result)){
            $output1 .="
                <h1 class='t_action_btn_hide' id='t_action_btn_hide'>X</h1>
                <button>Edit{$row['id']}</button>
                <button>Delete{$row['id']}</button>
            "; 
        }
       
       mysqli_close($conn);
       echo $output1;


?>