<section class="hostel">
        <h1>Examination</h1>
        <span class="hostel_location">
                <p>Home</p>
                <i class="fas fa-chevron-right"></i>
                <p class="all_hostel_para">Hostel</p> 
        </span>
        <!-- exam add section start============================================== -->
        <div class="add_new_hostel">
                <h1>Add New Hostel Room</h1>
          <form id="hostel_form" method="POST">
             <div class="row1">
                <div class="row1_inner1">
                   <label for="h_name">Hostel name</label><br>
                   <input type="text" id="h_name" name="h_name"><br>
                </div>
                <div class="row1_inner2">
                   <label for="r_number">Room Number</label><br>
                   <input type="text" id="r_number" name="r_number"><br>  
                </div>
                </div>
                <div class="row2">
                    <div class="row2_inner1">
                       <label for="r_type">Room Type</label><br>
                       <select name="r_type" id="r_type">
                                <option value="" disabled selected hidden>Please Select</option>
                                <option value="big">Big</option>
                                <option value="medium">Medium</option>
                                <option value="small">Small</option>
                        </select>
                    </div>
                     <div class="row2_inner2">
                        <label for="n_of_bed">Number Of Bed</label><br>
                        <select name="n_of_bed" id="n_of_bed">
                                <option value="" disabled selected hidden>Please Select</option>
                                <option value="2">02</option>
                                <option value="3">03</option>
                                <option value="4">04</option>
                                <option value="5">05</option>
                        </select>
                     </div>
             </div>
             <div class="row3">
             <div class="row3_inner1">
                       <label for="c_per_bed">Cost Per Bed</label><br>
                       <input type="text" id="c_per_bed" name="c_per_bed" placeholder="$00.00">
                </div>
             </div>
             <button class="r_save_btn" id="r_save_btn">Save</button>
           </form>
        </div>
        <!-- exam add section end============================================== -->

        <!-- exam table schedule start============================================== -->
        <div class="all_hostel_schedule">
                <div class="header_hostel_schedule_table">
                       <h1>All Hostel</h1>  
                        <button id="delete_all_hostel_schedule">Delete All</button>
                </div>
           <div id="showHostelData">

           </div>
        </div>
        <!-- exam table schedule end============================================== -->
        <h1 style="font-size: 25px;">Islamic School System</h1>
</section>