function studentFunc(evt, studentName) {
  var i, s_tabcontent, s_tablinks;
  s_tabcontent = document.getElementsByClassName("student_tabcontent");
  for (i = 0; i < s_tabcontent.length; i++) {
    s_tabcontent[i].style.display = "none";
  }
  s_tablinks = document.getElementsByClassName("s_btn_tablinks");
  for (i = 0; i < s_tablinks.length; i++) {
    s_tablinks[i].className = s_tablinks[i].className.replace(" active_s", "");
  }
  document.getElementById(studentName).style.display = "block";
  evt.currentTarget.className += " active_s";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("s_defaultOpen").click();
// ajax section for teacher
// ajax section started ======================================
$(document).ready(function () {
  // fetch feMale count here ===================
  function fetchFemale_count() {
    $.ajax({
      url: "assets/ajax/student_ajax/fetch_female_student.php",
      type: "POST",
      success: function (fetch) {
        $("#fetchFemale_count").html(fetch);
      },
    });
  }
  fetchFemale_count();
  // fetch Male student here ====================
  function fetchMale_count() {
    $.ajax({
      url: "assets/ajax/student_ajax/fetch_male_student.php",
      type: "POST",
      success: function (fetch) {
        $("#fetchMale_count").html(fetch);
      },
    });
  }
  fetchMale_count();
  function loadStudent_count() {
    $.ajax({
      url: "assets/ajax/student_ajax/student_count.php",
      type: "POST",
      success: function (data) {
        $("#student_count").html(data);
      },
    });
  }
  loadStudent_count();
  // student count section end ========================
  // fetch student data =========
  function loadStudentData() {
    $.ajax({
      url: "assets/ajax/student_ajax/fetch_student_data.php",
      type: "POST",
      success: function (data) {
        $("#student_row").html(data);
      },
    });
  }
  loadStudentData();

  // student live search =============================
  $(".search_input").on("keyup", function () {
    var search_term = $(this).val();
    $.ajax({
      url: "assets/ajax/student_ajax/search_student_data.php",
      type: "POST",
      data: {
        search: search_term,
      },
      success: function (response) {
        $("#student_row").html(response);
      },
    });
  });

  // insert Student Data here ================
  $("#student_formData").on("submit", function (e) {
    e.preventDefault();
    var formData = new FormData(this);
    $.ajax({
      url: "assets/ajax/student_ajax/insert_student_data.php",
      type: "POST",
      data: formData,
      contentType: false,
      cache: false,
      processData: false,
      success: function (data) {
        alert(data);
        loadStudentData();
        loadStudent_count();
        fetchFemale_count();
        fetchMale_count();
        makeChart();
        $("#student_formData").trigger("reset");
      },
      error: function () {
        alert("Something went wrong.");
      },
    });
  });

  // Live Chart data =========================

  $(document).on("click", ".s_btn_del", function () {
    var sDelId = $(this).attr("data-sDelete");
    if (confirm("Are you sure to delete this data?")) {
      $.ajax({
        url: "assets/ajax/student_ajax/student_delete_data.php",
        type: "POST",
        data: {
          id: sDelId,
        },
        success: function (response) {
          alert(response);
          loadStudentData();
          loadStudent_count();
        },
      });
    } else {
      alert("Delete Failed.");
    }
  });
  $(document).on("click", ".s_btn_view", function () {
    $("#view_student_detail_modal").show();
    var sViewId = $(this).attr("data-sProfile");
    $.ajax({
      url: "assets/ajax/student_ajax/student_view_details.php",
      type: "POST",
      data: {
        id: sViewId,
      },
      success: function (response) {
        $(".student_details_modal_body_inner").html(response);
      },
    });
  });
  $(document).on("click", "#hide_student_details_modal", function () {
    $("#view_student_detail_modal").hide();
  });
});
