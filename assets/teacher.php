
    

<div class="teacher_section">
      <div class="teacher_tab">
        <h1>Teachers Info</h1>
        <div class="teacher_tab_inner">
          <button
            class="t_btn_tablinks"
            onclick="teacherFunc(event, 'see_teacher')"
            id="t_defaultOpen"
          >
            <i class="fas fa-info-circle"></i>
          </button>
          <button class="t_btn_tablinks" onclick="teacherFunc(event, 'add_teacher')">
            <i class="fas fa-plus-circle"></i>
          </button>
        </div>
      </div>
      <!-- view teacher section start  ======================================-->
      <div id="see_teacher" class="teacher_tabcontent">
        <div class="teacher_search">
            <input type="text" class="search_input" placeholder="Search teachers...">
        </div>
        <table>
          <tr>
            <th width="50px">Sno</th>
            <th width="150px">First Name</th>
            <th width="100px">Last Name</th>
            <th>Address</th>
            <th>Qualification</th>
            <th>Phone</th>
            <th width="100px">Gender</th>
            <th width="100px">Action</th>
          </tr>
          <tbody id="t_table_body">
            <!-- showing database data here =========== -->
          </tbody>
        </table>
      </div>
      <!-- view teacher section start  ======================================-->
      <!-- Add teacher section start  =======================================-->
      <div id="add_teacher" class="teacher_tabcontent">
        <form autocomplete="off" id="formData">
          <h2>Teacher Registration form</h2>
          <div class="first_last_name">
            <span class="f_left">
              <label for="fname">First Name</label>
              <input type="text" id="fname" name="f_name" required />
              <br />
            </span>
            <span class="l_right">
              <label for="lname">Last Name</label>
              <input type="text" id="lname" name="l_name" required />
              <br />
            </span>
          </div>
          <label for="t_address">Address</label>
          <input type="text" id="t_address" name="address" required />
          <br />
          <label for="t_qualification">Qualification</label>
          <input
            type="text"
            id="t_qualification"
            name="t_qualification"
            required
          />
          <br />
          <div class="t_city">
            <span class="t_city_left">
              <label for="t_city">City</label>
              <input type="text" id="t_city" name="t_city" required />
              <br />
            </span>
            <span class="t_city_right">
              <label for="t_state">State</label>
              <input type="text" id="t_state" name="t_state" required />
              <br />
            </span>
          </div>
          <label for="t_zipcode">Postal/Zip Code</label>
          <input
            type="text"
            id="t_zipcode"
            name="t_zipcode"
            placeholder="zip code.."
            required
          />
          <br />
          <label for="t_gender">Gender</label>
          <select name="gender" id="t_gender" required>
            <option value="">select one</option>
            <option value="female">Female</option>
            <option value="male">Male</option>
            <option value="other">Others</option>
          </select>
          <br />
          <label for="t_phone">Phone Number</label>
          <input
            type="text"
            id="t_phone"
            name="t_phone"
            placeholder="0341-5435643"
            required
          />
          <br />
          <label for="t_email">E-mail</label>
          <input
            type="text"
            id="t_email"
            name="t_email"
            placeholder="E-mail..."
            required
          />
          <br />
          <input type="submit" id="sub_teacher_btn"></input>
        </form>
      </div>
      <!-- Add teacher section end  -->
    
      <div id="errorMessage"></div>
      <div id="successMessage"></div>
    </div>
    <!-- modal section start =========== -->
    <div class="modal" id="edit_modal">
        <div class="modal_body">
            <div id="hide_edit_modal">X</div>
            <form id="t_edit_table">
              <!-- show edit form data here =================  -->
              
            </form>
        </div>
      </div>
      <!-- modal section end =========== -->

      <!-- view details modal start =========== -->
      <div class="details_modal" id="view_detail_modal">
        <div class="details_modal_body">
            <div id="hide_details_modal">X</div>
            <div class="details_modal_body_inner">
              <!-- details data show here ============ -->
              
            </div>
        </div>
      </div>