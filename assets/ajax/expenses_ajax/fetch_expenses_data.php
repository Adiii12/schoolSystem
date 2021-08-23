<?php
include '../../conn/conn.php';
$limit = 10;
$page=0; 
if(isset($_POST['page'])){
    $page = $_POST['page'];
}else{
    $page = 1;
}

$start_from = ($page-1)*$limit;
$sql4 = "SELECT * FROM expenses ORDER BY id DESC LIMIT $start_from,$limit";
$result4 = mysqli_query($conn,$sql4);
$output = "";

$output.="
<table id='expenses_table'>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Expense Type</th>
                        <th>Amount</th>
                        <th>Status</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th style='border-right:none'>Date</th>
                        <th style='border-left:none'></th>
                     </tr>   
                      <tbody id='showExpensesData'>
                        
                      </tbody>
";
if(mysqli_num_rows($result4) > 0){
   while($row = mysqli_fetch_assoc($result4)){
       $output .="
       <tr>
                        <td>{$row['id']}</td>
                        <td>{$row['ex_name']}</td>
                        <td>{$row['ex_type']}</td>
                        <td>{$row['ex_amount']}</td>
                        <td>{$row['ex_status']}</td>
                        <td>{$row['ex_phone']}</td>
                        <td>{$row['ex_email']}</td>
                        <td>{$row['ex_date']}</td>
                        <td class='ex_action' >
                          <i id='expenses_action_icon' data-ex_action='{$row["id"]}' class='fas fa-ellipsis-h'></i>
                          <div class='ex_action_content' id='ex_action_content'>
                        
                          </div>
                        </td>
        </tr>
          "; 
   }
}else{
   $output ='
      <tr>
       <td>Data Not Found!</td>
     </tr>
   ';
}
$output .="</table>";
   // Pagination Code
   $sql2 = "SELECT * FROM expenses";
   $query = mysqli_query($conn,$sql2);
   $total_records = mysqli_num_rows($query);
   $total_pages = ceil($total_records/$limit);
   $output .= '<ul class="pagination">';
   if($page > 1){
       $previous = $page - 1;
    //    $output .= '<li class="page-item" id="1"><span class="page-link">First Page</span></li>';
       $output .= '<li class="ex_page-item" id="'.$previous.'"><span class="page-link"><i class="fa fa-arrow-left"></i></span></li>';
   }
   for($i=1; $i<=$total_pages; $i++){
       $active_class = "";
       if($i == $page){
           $active_class = "active";
       }
       $output .= '<li class="ex_page-item '.$active_class.'" id="'.$i.'"><span class="page-link">'.$i.'</span></li>';
   }
   if($page < $total_pages){
       $page++;
       $output .= '<li class="ex_page-item" id="'.$page.'"><span class="page-link"><i class="fa fa-arrow-right"></i></span></li>';
    //    $output .= '<li class="page-item" id="'.$total_pages.'"><span class="page-link">Last Page</span></li>';
   }
   $output .= '</ul>';
   
          
          echo $output;
?>