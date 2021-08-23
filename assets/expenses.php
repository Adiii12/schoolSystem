<section class="expenses">
        <h1>Expenses</h1>
        <span class="expenses_location">
                <p>Home</p>
                <i class="fas fa-chevron-right"></i>
                <p class="all_expenses_para">Expenses</p> 
        </span>
        <!-- exam add section start============================================== -->
        <div class="add_new_expenses">
                <h1>Add New Expenses</h1>
          <form id="expenses_form" method="POST">
             <div class="row1">
                <div class="row1_inner1">
                   <label for="ex_name">Name</label><br>
                   <input type="text" id="ex_name" name="ex_name"><br>
                </div>
                <div class="row1_inner2">
                        <label for="ex_type">Expense Type</label><br>
                        <select name="ex_type" id="ex_type">
                                <option value="" disabled selected hidden>Please Select</option>
                                <option value="salary">Salary</option>
                                <option value="transport">Transport</option>
                                <option value="maintanance">Maintanance</option>
                                <option value="purchase">Purchase</option>
                        </select>     
                </div>
                </div>
                <div class="row2">
                    <div class="row2_inner1">
                       <label for="ex_amount">Expenses Amount</label><br>
                       <input type="text" id="ex_amount" name="ex_amount"><br>
                    </div>
                     <div class="row2_inner2">
                        <label for="ex_status">Expenses Status</label><br>
                        <select name="ex_status" id="ex_status">
                                <option value="" disabled selected hidden>Please Select</option>
                                <option value="paid">Paid</option>
                                <option value="due">Due</option>
                                <option value="other">Other</option>
                        </select>   
                     </div>
             </div>
             <div class="row3">
                <div class="row3_inner1">
                       <label for="ex_phone">Phone Number</label><br>
                       <input type="text" id="ex_phone" name="ex_phone">
                </div>
                <div class="row3_inner2">
                       <label for="ex_email">Email</label><br>
                       <input type="text" id="ex_email" name="ex_email">
                </div>
             </div>
             <div class="row4">
                <div class="row4_inner1">
                       <label for="ex_date">Date</label><br>
                       <input type="text" id="ex_date" name="ex_date">
                </div>
                <!-- <div class="row4_inner2">
                       <label for="p_number">Phone Number</label><br>
                       <input type="text" id="p_number" name="p_number">
                </div> -->
             </div>
             <button class="ex_save_btn" id="ex_save_btn">Save</button>
           </form>
        </div>
        <!-- exam add section end============================================== -->

        <!-- exam table schedule start============================================== -->
        <div class="all_expenses_schedule">
                <div class="header_expenses_schedule_table">
                       <h1>All Exam Schedule</h1>  
                        <button id="delete_all_expenses_schedule">Delete All</button>
                </div>
           <div id="showExpensesData">

           </div>
        </div>
        <!-- exam table schedule end============================================== -->
        <h1 style="font-size: 25px;">Islamic School System</h1>
</section>