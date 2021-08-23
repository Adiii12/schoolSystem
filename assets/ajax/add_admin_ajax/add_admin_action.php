<?php
include "../../conn/conn.php";

$admin_ID = $_POST["id"];
$sql = "SELECT * FROM admin WHERE admin_id = {$admin_ID}";
$result = mysqli_query($conn,$sql);
$output1 = "";

        while($row = mysqli_fetch_array($result)){
            $output1 .="
                <h1 class='add_action_btn_hide' id='add_action_btn_hide'>X</h1>
                <button>Edit{$row['admin_id']}</button>
                <button>Delete{$row['admin_id']}</button>
            "; 
        }
       
       mysqli_close($conn);
       echo $output1;


?>