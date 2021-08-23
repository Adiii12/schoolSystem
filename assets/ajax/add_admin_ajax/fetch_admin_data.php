<?php
include '../../conn/conn.php';
$limit = 10;
$page=0; 
if(isset($_POST['page'])){
    $page = $_POST['page'];
}else{
    $page = 1;
}
// <table>
$start_from = ($page-1)*$limit;
$sql1 = "SELECT * FROM admin ORDER BY admin_id DESC LIMIT $start_from,$limit";
$result = mysqli_query($conn,$sql1);
$output = "";

$output.="
<table id='add_admin_table'>
                    <tr>
                        <th style='width:100px;'>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Confirm Password</th>
                        <th>Image</th>
                        <th style='border-right:none;'>Role</th>
                        <th style='border-left:none;width:60px;'></th>
                     </tr>   
                      <tbody id='showAddAdminData'>
                        
                      </tbody>
";
if(mysqli_num_rows($result) > 0){
   while($row = mysqli_fetch_array($result)){
       $output .="
       <tr>
                        <td style='text-align:center'>{$row['admin_id']}</td>
                        <td>{$row['username']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['password']}</td>
                        <td>{$row['c_password']}</td>
                        <td style='text-align:center'><img style='width:40px;height:40px;border-radius:50%;object-fit:cover;' src='{$row["image"]}' alt=''></td>
                        <td>{$row['a_role']}</td>
                        <td class='add_action' >
                          <i id='add_admin_action_icon' data-add_action='{$row["admin_id"]}' class='fas fa-ellipsis-h'></i>
                          <div class='add_action_content' id='add_action_content'>
                          
                          </div>
                        </td>
        </tr>
          "; 
   }
//    $output .="<tr><td colspan='10'><button data-load_more='{$last_id}' id='parent_loadBtn'>Load More</button></td></tr>";
}else{
   $output ='
      <tr>
       <td>Data Not Found!</td>
     </tr>
   ';
}
$output .="</table>";
   // Pagination Code
   $sql2 = "SELECT * FROM admin";
   $query = mysqli_query($conn,$sql2);
   $total_records = mysqli_num_rows($query);
   $total_pages = ceil($total_records/$limit);
   $output .= '<ul class="pagination">';
   if($page > 1){
       $previous = $page - 1;
    //    $output .= '<li class="page-item" id="1"><span class="page-link">First Page</span></li>';
       $output .= '<li class="add_page-item" id="'.$previous.'"><span class="page-link"><i class="fa fa-arrow-left"></i></span></li>';
   }
   for($i=1; $i<=$total_pages; $i++){
       $active_class = "";
       if($i == $page){
           $active_class = "active";
       }
       $output .= '<li class="add_page-item '.$active_class.'" id="'.$i.'"><span class="page-link">'.$i.'</span></li>';
   }
   if($page < $total_pages){
       $page++;
       $output .= '<li class="page-item" id="'.$page.'"><span class="page-link"><i class="fa fa-arrow-right"></i></span></li>';
    //    $output .= '<li class="page-item" id="'.$total_pages.'"><span class="page-link">Last Page</span></li>';
   }
   $output .= '</ul>';
   
          
          echo $output;
?>