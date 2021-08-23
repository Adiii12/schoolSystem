$(document).ready(function () {
  $("#adminReg_data").on("submit", function (e) {
    e.preventDefault();
    var formData = new FormData(this);
    $.ajax({
      url: "assets/ajax/admin_ajax/insert_admin_data.php",
      type: "POST",
      data: formData,
      contentType: false,
      cache: false,
      processData: false,
      success: function (fetchAdmin) {
        $("#login_after_signup").show();
        $("#login_after_signup").html(fetchAdmin);
        $("#adminReg_data").trigger("reset");
      },
      error: function () {
        alert("Something went wrong.");
      },
    });
  });
});
