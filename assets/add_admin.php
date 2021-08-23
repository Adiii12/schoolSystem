<section class="add_admin">
        <h1>Admin</h1>
        <span class="add_admin_location">
                <p>Home</p>
                <i class="fas fa-chevron-right"></i>
                <p class="all_add_admin_para">Add Admin</p> 
        </span>
        <!-- exam add section start============================================== -->
        <div class="add_new_add_admin">
                <h1>Add New Admin</h1>
          <form id="add_admin_form" enctype='multipart/form-data' method="post">
             <div class="row1">
                <div class="row1_inner1">
                <label for="u_reg_name">User Name</label><br>
                        <input type="text" id="u_reg_name" name="u_reg_name"><br>
                </div>
                <div class="row1_inner2">
                    <label for="u_reg_email">Email</label><br>
                    <input type="text" id="u_reg_email" name="u_reg_email"><br>
                </div>
                </div>
                <div class="row2">
                    <div class="row2_inner1">
                        <label for="u_reg_password">Password</label><br>
                        <input type="password" id="u_reg_password" name="u_reg_password">
                    </div>
                     <div class="row2_inner2">
                        <label for="u_c_password">Confirm Password</label><br>
                        <input type="password" id="u_c_password" name="u_c_password">
                     </div>
             </div>
             <div class="row3">
                   <div class="row3_inner1">
                        <label for="admin_img">Image</label><br>
                        <input type="file" id="file" name="file">
                   </div>
                   <div class="row3_inner1">
                        <label for="a_role">Admin Role</label><br>
                        <input type="text" id="a_role" name="a_role">
                   </div>
             </div>
             <button class="add_save_btn" id="add_save_btn">Save</button>
           </form>
        </div>
        <!-- exam add section end============================================== -->

        <!-- exam table schedule start============================================== -->
        <div class="all_add_admin_schedule">
                <div class="header_add_admin_schedule_table">
                       <h1>Admin Info</h1>  
                        <button id="delete_all_add_admin_schedule">Delete All</button>
                </div>
           <div id="showAddAdminData">

           </div>
        </div>
        <!-- exam table schedule end============================================== -->
        <h1 style="font-size: 25px;">Islamic School System</h1>
</section>          
                  
                  
                  
                  
                  
                
                
                <!-- <div class="admin_form2">
                    
                    <form class="form2" enctype='multipart/form-data' id="adminReg_data" method="post">
                        <h1>Sign Up</h1>
                        <label for="u_reg_name">User Name</label><br>
                        <input type="text" id="u_reg_name" name="u_reg_name"><br>
                        <label for="u_reg_email">Email</label><br>
                        <input type="text" id="u_reg_email" name="u_reg_email"><br>
                        <label for="u_reg_password">Password</label><br>
                        <input type="password" id="u_reg_password" name="u_reg_password">
                        <label for="u_c_password">Confirm Password</label><br>
                        <input type="password" id="u_c_password" name="u_c_password">
                        <label for="admin_img">Image</label><br>
                        <input type="file" id="file" name="file">
                        <br />
                             <input type="checkbox" id="psw" onclick="showPassSignUp()" />
                             <label for="pass">Show Password</label>
                        <br>
                 <input type="submit" name='submit' value="Login"> 
                        <br>
                    </form>
                </div> -->