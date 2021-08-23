$(document).ready(function () {
  // count transport data =========================
  //   function loadTransportCount() {
  //     $.ajax({
  //       url: "assets/ajax/transport_ajax/transport_total.php",
  //       type: "POST",
  //       success: function (fetchTransport) {
  //         $("#transportCount").html(fetchTransport);
  //       },
  //     });
  //   }
  //   loadTransportCount();
  //   load More pages with table ==============
  // load more data here================
  function loadExpensesData(page) {
    $.ajax({
      url: "assets/ajax/expenses_ajax/fetch_expenses_data.php",
      method: "POST",
      data: {
        page: page,
      },
      success: function (data) {
        $("#showExpensesData").html(data);
      },
    });
  }
  loadExpensesData();
  $(document).on("click", ".ex_page-item", function (e) {
    e.preventDefault();
    var page = $(this).attr("id");
    loadExpensesData(page);
  });
  //   // load more data here================
  $(document).on("click", "#expenses_action_icon", function () {
    var expensesID = $(this).data("ex_action");
    $("#ex_action_content").toggle();
    $.ajax({
      url: "assets/ajax/expenses_ajax/expenses_action.php",
      type: "POST",
      data: {
        id: expensesID,
      },
      success: function (response) {
        $("#ex_action_content").html(response);
      },
    });
  });
  $(document).on("click", "#ex_action_btn_hide", function () {
    $("#ex_action_content").hide();
  });
  //   delete all her ================================================
  $("#delete_all_expenses_schedule").on("click", function () {
    if (confirm("Are You Sure You want To Delete All?")) {
      var action = "deleteAll";
      $.ajax({
        url: "assets/ajax/expenses_ajax/delete_all_expenses_data.php",
        type: "POST",
        data: {
          action: action,
        },
        success: function (response) {
          if (response == 1) {
            alert("Data Deleted successfully!");
            loadExpensesData();
          } else {
            alert("Something Wrong");
          }
          // $("#e_action_content").html(response);
        },
      });
    }
  });
  $(document).on("click", "#ex_save_btn", function (e) {
    e.preventDefault();
    var ex_name = $("#ex_name").val();
    var ex_type = $("#ex_type").val();
    var ex_amount = $("#ex_amount").val();
    var ex_status = $("#ex_status").val();
    var ex_phone = $("#ex_phone").val();
    var ex_email = $("#ex_email").val();
    var ex_date = $("#ex_date").val();
    if (
      ex_name == "" ||
      ex_type == "" ||
      ex_amount == "" ||
      ex_status == "" ||
      ex_phone == "" ||
      ex_email == "" ||
      ex_date == ""
    ) {
      alert("All field Are Required");
    } else {
      $.ajax({
        url: "assets/ajax/expenses_ajax/insert_expenses_data.php",
        type: "POST",
        data: {
          ex_name: ex_name,
          ex_type: ex_type,
          ex_amount: ex_amount,
          ex_status: ex_status,
          ex_phone: ex_phone,
          ex_email: ex_email,
          ex_date: ex_date,
        },
        success: function (response) {
          loadExpensesData();
          alert("Data Inserted Successfully!");
          $("#expenses_form").trigger("reset");
        },
      });
    }
  });
});
