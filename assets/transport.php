<section class="transport">
        <h1>Transport</h1>
        <span class="transport_location">
                <p>Home</p>
                <i class="fas fa-chevron-right"></i>
                <p class="all_transport_para">Transport</p> 
        </span>
        <!-- exam add section start============================================== -->
        <div class="add_new_transport">
                <h1>Add New Transport</h1>
          <form id="transport_form" method="POST">
             <div class="row1">
                <div class="row1_inner1">
                   <label for="r_name">Route Name</label><br>
                   <input type="text" id="r_name" name="r_name"><br>
                </div>
                <div class="row1_inner2">
                        <label for="v_number">Vehicle Number</label><br>
                        <input type="text" id="v_number" name="v_number"><br>     
                </div>
                </div>
                <div class="row2">
                    <div class="row2_inner1">
                       <label for="d_name">Driver Name</label><br>
                       <input type="text" id="d_name" name="d_name"><br>
                    </div>
                     <div class="row2_inner2">
                        <label for="l_number">License Number</label><br>
                        <input type="text" id="l_number" name="l_number"><br>
                     </div>
             </div>
             <div class="row3">
                <div class="row3_inner1">
                       <label for="p_number">Phone Number</label><br>
                       <input type="text" id="p_number" name="p_number">
                </div>
             </div>
             <button class="t_save_btn" id="t_save_btn">Save</button>
           </form>
        </div>
        <!-- exam add section end============================================== -->

        <!-- exam table schedule start============================================== -->
        <div class="all_transport_schedule">
                <div class="header_transport_schedule_table">
                       <h1>All Exam Schedule</h1>  
                        <button id="delete_all_transport_schedule">Delete All</button>
                </div>
           <div id="showTransportData">

           </div>
        </div>
        <!-- exam table schedule end============================================== -->
        <h1 style="font-size: 25px;">Islamic School System</h1>
</section>