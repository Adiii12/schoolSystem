$(document).ready(function () {
  function loadLibraryCount() {
    $.ajax({
      url: "assets/ajax/library_ajax/library_total.php",
      type: "POST",
      success: function (fetchLibrary) {
        $("#libraryCount").html(fetchLibrary);
      },
    });
  }
  loadLibraryCount();

  // load more data here================
  function loadLibraryData(page) {
    $.ajax({
      url: "assets/ajax/library_ajax/fetch_library_data.php",
      method: "POST",
      data: {
        page: page,
      },
      success: function (data) {
        $("#showLibraryData").html(data);
      },
    });
  }
  loadLibraryData();
  $(document).on("click", ".l_page-item", function (e) {
    e.preventDefault();
    var page = $(this).attr("id");
    loadLibraryData(page);
  });
  // load more data here================

  $("#add_library").on("click", function () {
    $("#library_modal").show().slideDown();
  });
  $(document).on("click", "#hide_library_modal", function () {
    $("#library_modal").hide();
  });

  $("#library_formData").on("submit", function (e) {
    e.preventDefault();
    var formData = new FormData(this);
    $.ajax({
      url: "assets/ajax/library_ajax/insert_library_data.php",
      type: "POST",
      data: formData,
      contentType: false,
      cache: false,
      processData: false,
      success: function (data) {
        alert(data);
        if (data == 1) {
          loadLibraryData();
          loadLibraryCount();
          $("#library_modal").hide();
          //   loadLibraryCount();
          //   loadParentData();
          $("#library_formData").trigger("reset");
          $("#successMessageLibrary")
            .html("Data inserted successfully.")
            .slideDown();
          $("#errorMessageLibrary").slideUp();
          setInterval(function () {
            $("#errorMessageLibrary").hide();
          }, 10000);
          setInterval(function () {
            $("#successMessageLibrary").hide();
          }, 10000);
        } else {
          $("#successMessageLibrary").slideDown();
          $("#errorMessageLibrary").html("Data Insertion Failed").slideUp();
          setInterval(function () {
            $("#errorMessageLibrary").hide();
          }, 10000);
          setInterval(function () {
            $("#successMessageLibrary").hide();
          }, 10000);
        }
      },
      error: function () {
        alert("Something went wrong.");
      },
    });
  });
  //   // parent action section ===================================================
  $(document).on("click", "#l_action_btn_hide", function () {
    $("#l_action_content").hide();
  });
  $(document).on("click", "#library_action_icon", function () {
    var libraryID = $(this).data("l_action");
    $("#l_action_content").toggle("l_action_btn");
    $.ajax({
      url: "assets/ajax/library_ajax/library_action.php",
      type: "POST",
      data: {
        id: libraryID,
      },
      success: function (response) {
        $("#l_action_content").html(response);
      },
    });
  });
});
