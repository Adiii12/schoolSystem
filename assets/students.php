<div class="student_section">
              <!-- students tab button start =================== -->
               <div class="student_tab">
                  <h1>Students Info</h1>
                  <div class="student_tab_inner">
                    <button
                      class="s_btn_tablinks"
                      onclick="studentFunc(event, 'see_student')"
                      id="s_defaultOpen"
                    >
                      <i class="fas fa-info-circle"></i>
                    </button>
                    <button class="s_btn_tablinks" onclick="studentFunc(event, 'add_student')">
                      <i class="fas fa-plus-circle"></i>
                    </button>
                  </div>
              </div>
              <!-- students tab button start =================== -->

              <!-- students tabcontent button start =================== -->
              <div class="student_tabcontent_data">
                <div id="see_student" class="student_tabcontent">
                     <div class="student_search">
                       <form action="#" id="student_data_search">
                         <input type="text" class="search_input" placeholder="Search students...">
                       </form>
                     </div>
                     <div class="row" id="student_row">
                          <!-- show student data here ================ --> 
                      </div>
                      <!-- student modal start ======================= -->
                      <div class="student_details_modal" id="view_student_detail_modal">
                        <div class="student_details_modal_body">
                            <div id="hide_student_details_modal">X</div>
                            <div class="student_details_modal_body_inner">
                              <!-- details data show here ============ -->
                            </div>
                        </div>
                      </div>
                      <!-- student modal end ======================= -->
                </div>
                
                <div id="add_student" class="student_tabcontent">
                <form enctype="multipart/form-data" id="student_formData" >
                    <h2>Student Registration form</h2>
                    <div class="first_last_name">
                      <span class="f_left">
                        <label for="s_fname">First Name</label>
                        <input type="text" id="s_fname" name="f_name" required />
                        <br />
                      </span>
                      <span class="l_right">
                        <label for="s_lname">Last Name</label>
                        <input type="text" id="s_lname" name="l_name" required />
                        <br />
                      </span>
                    </div>
                    <label for="s_father">Father Name</label>
                    <input type="text" id="s_father" name="s_father" required />
                    <br />
                    <label for="s_enroll_year">Enroll Year</label>
                    <input
                      type="text"
                      id="s_enroll_year"
                      name="s_enroll_year"
                      required
                    />
                    <br />
                    <div class="s_class">
                      <span class="s_class_left">
                        <label for="s_dob">Date Of Birth</label>
                        <input type="text" id="s_dob" name="s_dob" required />
                        <br />
                      </span>
                      <span class="s_class_right">
                        <label for="s_class">Class</label>
                        <input type="text" id="s_class" name="s_class" required />
                        <br />
                      </span>
                   </div>
                    <label for="s_gender">Gender</label>
                    <select name="s_gender" id="s_gender" required>
                      <option value="">select one</option>
                      <option value="female">Female</option>
                      <option value="male">Male</option>
                      <option value="other">Others</option>
                    </select>
                    <br />
                    <label for="s_academic_year">Academic Year</label>
                    <input
                      type="text"
                      id="s_academic_year"
                      name="s_academic_year"
                      required
                    />
                    <br />
                    <label for="s_image">Profile Image</label>
                    <input
                      type="file"
                      id="s_image"
                      name="file"
                      required
                    />
                    <br>
                    <input type="submit" name="s_submit" id="s_student_btn"></input>
                </form>
                </div>
              </div>
              <!-- students tabcontent button start =================== -->
            </div>