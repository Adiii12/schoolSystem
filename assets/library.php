<div class="library_header">
                <h1>Parents</h1>
              </div>
              <span class="library_location">
                <p>Home</p>
                <i class="fas fa-chevron-right"></i>
                <p class="all_library_para">Library</p> 
              </span>
             <div class="library_data">
               <div class="library_data_header">
                 <h1>All Library Data</h1>
                 <button class="library_data_btn" id="add_library">Add</button>
               </div>
               <div style="background-color:green;padding:15px 25px;width:400px;border-radius:10px;display:none;" id="successMessageLibrary"></div>
               <div style="background-color:red;padding:15px 25px;width:400px;border-radius:10px;display:none;" id="errorMessageLibrary"></div>
               <div id="showLibraryData">
                  <!-- show library table here ============= -->
               </div>
              <!-- <button id='parent_loadBtn'>Load More</button> -->
                     <!-- student modal start ======================= -->
                    <div class="library_modal" id="library_modal">
                        <div class="library_modal_body">
                            <div id="hide_library_modal">X</div>
                            <div class="library_modal_body_inner">
                              <!-- parent data form start here ============ -->
                              <form enctype="multipart/form-data" id="library_formData" >
                                    <h2>Library Registration form</h2>
                                    <label for="l_book">Book Name</label>
                                    <input
                                      type="text"
                                      id="l_book"
                                      name="l_book"
                                      required
                                    />
                                    <br>
                                        <label for="l_subject">Subject</label>
                                        <input type="text" id="l_subject" name="l_subject" required />
                                        <br />
                                    <label for="l_writer">Writer</label>
                                    <input type="text" id="l_writer" name="l_writer" required />
                                    <br />
                                    <label for="l_class">Class</label>
                                    <input type="text" id="l_class" name="l_class" required />
                                    <br />
                                    <label for="l_publish">Publish</label>
                                    <input
                                      type="text"
                                      id="l_publish"
                                      name="l_publish"
                                      required
                                    />
                                    <br />
                                    <label for="l_creatingDate">Creating Date</label>
                                    <input
                                      type="text"
                                      id="l_creatingDate"
                                      name="l_creatingDate"
                                      required
                                    />
                                    <br />
                                    <input type="submit" name="l_submit" id="l_library_btn"></input>
                              </form>
                              <!-- parent data form end here ============== -->
                            </div>
                        </div>
                      </div>
                      <!-- student modal end ======================= -->
</div>
<h1 style="margin:35px 0px 20px 0px;">Islamic School System</h1>