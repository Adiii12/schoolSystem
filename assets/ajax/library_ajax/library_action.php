<?php
include "../../conn/conn.php";

$library_ID = $_POST["id"];
$sql = "SELECT * FROM library WHERE l_id = '$library_ID'";
$result5 = mysqli_query($conn,$sql);
$output1 = "";

        while($row = mysqli_fetch_array($result5)){
            $output1 .="
                <h1 class='l_action_btn_hide' id='l_action_btn_hide'>X</h1>
                <button>Edit{$row['l_id']}</button>
                <button>Delete{$row['l_id']}</button>
            "; 
        }
       
       mysqli_close($conn);
       echo $output1;


?>