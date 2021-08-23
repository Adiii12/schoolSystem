<?php
include "../../conn/conn.php";

$exam_ID = $_POST["id"];
$sql = "SELECT * FROM exam WHERE e_id = {$exam_ID}";
$result = mysqli_query($conn,$sql);
$output1 = "";

        while($row = mysqli_fetch_array($result)){
            $output1 .="
                <h1 class='e_action_btn_hide' id='e_action_btn_hide'>X</h1>
                <button>Edit{$row['e_id']}</button>
                <button>Delete{$row['e_id']}</button>
            "; 
        }
       
       mysqli_close($conn);
       echo $output1;


?>