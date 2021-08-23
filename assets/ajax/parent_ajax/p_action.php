<?php
include "../../conn/conn.php";

$parent_ID = $_POST["id"];
$sql = "SELECT * FROM parents WHERE id = {$parent_ID}";
$result = mysqli_query($conn,$sql);
$output1 = "";

        while($row = mysqli_fetch_array($result)){
            $output1 .="
                <h1 class='p_action_btn_hide' id='p_action_btn_hide'>X</h1>
                <button>Edit{$row['id']}</button>
                <button>Delete{$row['id']}</button>
                <a class='email' href = 'mailto: {$row['p_email']}'>Email{$row['id']}</a>
            "; 
        }
       
       mysqli_close($conn);
       echo $output1;


?>