$(document).ready(function () {
  $("#add_admin_form").on("submit", function (e) {
    e.preventDefault();
    var formData = new FormData(this);
    $.ajax({
      url: "assets/ajax/add_admin_ajax/insert_admin_data.php",
      type: "POST",
      data: formData,
      contentType: false,
      cache: false,
      processData: false,
      success: function (fetchAdmin) {
        alert(fetchAdmin);
        $("#add_admin_form").trigger("reset");
      },
      error: function () {
        alert("Something went wrong.");
      },
    });
  });

  // count transport data =========================
  //   function loadHostelCount() {
  //     $.ajax({
  //       url: "assets/ajax/hostel_ajax/hostel_count.php",
  //       type: "POST",
  //       success: function (fetchHostel) {
  //         $("#hostelCount").html(fetchHostel);
  //       },
  //     });
  //   }
  //   loadHostelCount();
  //     load More pages with table ==============
  //   load more data here================
  function loadAddAdminData(page) {
    $.ajax({
      url: "assets/ajax/add_admin_ajax/fetch_admin_data.php",
      method: "POST",
      data: {
        page: page,
      },
      success: function (data) {
        $("#showAddAdminData").html(data);
      },
    });
  }
  loadAddAdminData();
  $(document).on("click", ".add_page-item", function (e) {
    e.preventDefault();
    var page = $(this).attr("id");
    loadAddAdminData(page);
  });
  //   // load more data here================
  $(document).on("click", "#add_admin_action_icon", function () {
    var transportID = $(this).data("add_action");
    $("#add_action_content").toggle();
    $.ajax({
      url: "assets/ajax/add_admin_ajax/add_admin_action.php",
      type: "POST",
      data: {
        id: transportID,
      },
      success: function (response) {
        $("#add_action_content").html(response);
      },
    });
  });
  $(document).on("click", "#add_action_btn_hide", function () {
    $("#add_action_content").hide();
  });
  //   delete all her ================================================
  $("#delete_all_add_admin_schedule").on("click", function () {
    if (confirm("Are You Sure You want To Delete All?")) {
      var action = "deleteAll";
      $.ajax({
        url: "assets/ajax/add_admin_ajax/delete_all_admin.php",
        type: "POST",
        data: {
          action: action,
        },
        success: function (response) {
          if (response == 1) {
            alert("Data Deleted successfully!");
            loadAddAdminData();
          } else {
            alert("Something Wrong");
          }
          // $("#e_action_content").html(response);
        },
      });
    }
  });
});
