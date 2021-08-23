function teacherFunc(evt, teacherName) {
  var i, t_tabcontent, t_tablinks;
  t_tabcontent = document.getElementsByClassName("teacher_tabcontent");
  for (i = 0; i < t_tabcontent.length; i++) {
    t_tabcontent[i].style.display = "none";
  }
  t_tablinks = document.getElementsByClassName("t_btn_tablinks");
  for (i = 0; i < t_tablinks.length; i++) {
    t_tablinks[i].className = t_tablinks[i].className.replace(" active_t", "");
  }
  document.getElementById(teacherName).style.display = "block";
  evt.currentTarget.className += " active_t";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("t_defaultOpen").click();

$(document).ready(function () {
  // fetch male teacher here==========================
  function fetchMale_teacher_count() {
    $.ajax({
      url: "assets/ajax/fetch_male_teacher_count.php",
      type: "POST",
      success: function (fetchMale) {
        $("#fetchMale_teacher_count").html(fetchMale);
      },
    });
  }
  fetchMale_teacher_count();
  // fetch female teacher count here ========================
  function fetchFemale_teacher_count() {
    $.ajax({
      url: "assets/ajax/fetch_female_teacher_count.php",
      type: "POST",
      success: function (fetchFemale) {
        $("#fetchFemale_teacher_count").html(fetchFemale);
      },
    });
  }
  fetchFemale_teacher_count();

  // function fetchFemale_teacher_count() {
  //   $.ajax({
  //     url: "assets/ajax/fetch_female_teacher_count.php",
  //     type: "POST",
  //     data: { action: "fetch" },
  //     success: function (fetchFemale) {
  //       alert(fetchFemale);
  //       $("#fetchFemale_teacher_count").html(fetchFemale);
  //     },
  //   });
  // }
  // fetchFemale_teacher_count();
  // ajax section for teacher
  function loadTeacherData() {
    $.ajax({
      url: "assets/ajax/fetch_teacher_data.php",
      type: "POST",
      success: function (data) {
        $("#t_table_body").html(data);
      },
    });
  }
  loadTeacherData();

  function loadTeacherCount() {
    $.ajax({
      url: "assets/ajax/teacherTotal.php",
      type: "POST",
      success: function (data) {
        $("#teacherCount").html(data);
      },
    });
  }
  loadTeacherCount();

  // show teacher Data start

  // show teacher data end

  // teacher live search =============================
  $(".search_input").on("keyup", function () {
    var searchTeacher = $(this).val();
    $.ajax({
      url: "assets/ajax/search_teacher_data.php",
      type: "POST",
      data: {
        searchT: searchTeacher,
      },
      success: function (data) {
        $("#t_table_body").html(data);
      },
    });
  });
  //  insert data section start
  $("#sub_teacher_btn").on("click", function (e) {
    e.preventDefault();
    var fname = $("#fname").val();
    var lname = $("#lname").val();
    var teacher_address = $("#t_address").val();
    var teacher_qualification = $("#t_qualification").val();
    var teacher_city = $("#t_city").val();
    var teacher_state = $("#t_state").val();
    var teacher_zipcode = $("#t_zipcode").val();
    var teacher_phone = $("#t_phone").val();
    var teacher_email = $("#t_email").val();
    var teacher_gender = $("#t_gender").val();
    if (
      fname == "" ||
      lname == "" ||
      teacher_address == "" ||
      teacher_qualification == "" ||
      teacher_city == "" ||
      teacher_state == "" ||
      teacher_zipcode == "" ||
      teacher_phone == "" ||
      teacher_email == "" ||
      teacher_gender == ""
    ) {
      $("#errorMessage").html("All field are required.").slideDown();
      setInterval(function () {
        $("#errorMessage").hide();
      }, 10000);
    } else {
      $.ajax({
        url: "assets/ajax/insert_teacher_data.php",
        type: "POST",
        data: {
          first_name: fname,
          last_name: lname,
          teacher_address: teacher_address,
          teacher_qualification: teacher_qualification,
          teacher_city: teacher_city,
          teacher_state: teacher_state,
          teacher_zipcode: teacher_zipcode,
          teacher_phone: teacher_phone,
          teacher_email: teacher_email,
          teacher_gender: teacher_gender,
        },
        success: function (data) {
          if (data == 1) {
            loadTeacherData();
            loadTeacherCount();
            fetchMale_teacher_count();
            $("#formData").trigger("reset");
            $("#successMessage")
              .html("Data inserted successfully.")
              .slideDown();
            setInterval(function () {
              $("#successMessage").hide();
            }, 10000);
          } else {
            $("#errorMessage").html("Can't save Record.").slideDown();
            setInterval(function () {
              $("#successMessage").hide();
            }, 10000);
          }
        },
      });
    }
  });
  //  insert data section end ===================================

  //  delete data section start ==========================================
  $(document).on("click", ".t_dlt_btn", function () {
    if (confirm("Do you really want to delete this record?")) {
      var teacherId = $(this).data("id");
      var elem = this;
      $.ajax({
        url: "assets/ajax/del_teacher_data.php",
        type: "POST",
        data: {
          id: teacherId,
        },
        success: function (data) {
          if (data == 1) {
            loadTeacherData();
            loadTeacherCount();
            fetchMale_teacher_count();
            $(elem).closest("tr").fadeOut();
            $("#successMessage").html("Data Deleted successfully.").slideDown();
            $("#errorMessage").slideUp();
            setInterval(function () {
              $("#errorMessage").hide();
            }, 10000);
            setInterval(function () {
              $("#successMessage").hide();
            }, 10000);
          } else {
            $("#successMessage").slideDown();
            $("#errorMessage").html("Can't delete Record.").slideUp();
            setInterval(function () {
              $("#errorMessage").hide();
            }, 10000);
            setInterval(function () {
              $("#successMessage").hide();
            }, 10000);
          }
        },
      });
    }
  });
  //  delete data section end

  // edit modal section start
  $(document).on("click", ".t_edit_btn", function () {
    $("#edit_modal").show();
    var teacherID = $(this).data("eid");
    $.ajax({
      url: "assets/ajax/update_teacher_data.php",
      type: "POST",
      data: {
        id: teacherID,
      },
      success: function (response) {
        $("#t_edit_table").html(response);
      },
    });
  });

  $(document).on("click", "#hide_edit_modal", function () {
    $("#edit_modal").hide();
  });

  // edit modal section start

  // save update form
  $(document).on("click", "#edit_teacher_btn", function (e) {
    e.preventDefault();
    var teacher_edit_id = $("#edit_id").val();
    var fname = $("#edit_fname").val();
    var lname = $("#edit_lname").val();
    var teacher_address = $("#edit_t_address").val();
    var teacher_qualification = $("#edit_t_qualification").val();
    var teacher_city = $("#edit_t_city").val();
    var teacher_state = $("#edit_t_state").val();
    var teacher_zipcode = $("#edit_t_zipcode").val();
    var teacher_phone = $("#edit_t_phone").val();
    var teacher_email = $("#edit_t_email").val();
    var teacher_gender = $("#edit_t_gender").val();

    $.ajax({
      url: "assets/ajax/edit_teacher_data.php",
      type: "POST",
      data: {
        id: teacher_edit_id,
        first_name: fname,
        last_name: lname,
        teacher_address: teacher_address,
        teacher_qualification: teacher_qualification,
        teacher_city: teacher_city,
        teacher_state: teacher_state,
        teacher_zipcode: teacher_zipcode,
        teacher_phone: teacher_phone,
        teacher_email: teacher_email,
        teacher_gender: teacher_gender,
      },
      success: function (data) {
        if (data == 1) {
          $("#edit_modal").hide();
          loadTeacherData();
          $("#successMessage").html("Data updated successfully.").slideDown();
          setInterval(function () {
            $("#successMessage").hide();
          }, 10000);
        } else {
          alert(data);
          $("#errorMessage").html("Can't save Record.").slideDown();
          setInterval(function () {
            $("#errorMessage").hide();
          }, 10000);
        }
      },
    });
  });

  $(document).on("click", ".t_view_details", function () {
    $("#view_detail_modal").show();
    var t_view_id = $(this).data("details");

    $.ajax({
      url: "assets/ajax/teacher_view_details.php",
      type: "POST",
      data: {
        id: t_view_id,
      },
      success: function (data) {
        $(".details_modal_body_inner").html(data);
      },
    });
  });

  $(document).on("click", "#hide_details_modal", function () {
    $("#view_detail_modal").hide();
  });
});
