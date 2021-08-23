$(document).ready(function () {
  // show notices daata start here ==============================
  function ShowNoticeData() {
    var action = "ShowNoticeData";
    $.ajax({
      url: "assets/ajax/notice_ajax/fetch_notice_data.php",
      method: "POST",
      data: {
        action: action,
      },
      success: function (data) {
        $("#posted_notice").html(data);
      },
    });
  }
  ShowNoticeData();
  // count notices daata start here ==============================
  function countNoticeData() {
    $.ajax({
      url: "assets/ajax/notice_ajax/count_notice.php",
      method: "POST",
      success: function (fetchNoticeCount) {
        $("#ShowNoticesCount").html(fetchNoticeCount);
      },
    });
  }
 countNoticeData();
  $("#n_save_btn").on("click", function (e) {
    e.preventDefault();
    var n_title = $("#n_title").val();
    var n_posted_by = $("#n_posted_by").val();
    var n_details = $("#n_details").val();
    if (n_title == "" || n_posted_by == "" || n_details == "") {
      alert("All field are Required");
    } else {
      $.ajax({
        url: "assets/ajax/notice_ajax/insert_notice_data.php",
        type: "POST",
        data: {
          n_title: n_title,
          n_posted_by: n_posted_by,
          n_details: n_details,
        },
        success: function (data) {
          if (data == 1) {
            ShowNoticeData();
            countNoticeData();
            $("#notice_schedule_form").trigger("reset");
            alert("Posted Successfully!");
          } else {
            alert("Data not Inserted");
          }
        },
      });
    }
  });


//  delete post start here =================================
  $(document).on("click", "#delete_post", function () {
    var DelPost = $(this).attr("data-post_del");
    if (confirm("Are you sure to delete this data?")) {
      $.ajax({
        url: "assets/ajax/notice_ajax/delete_notice_data.php",
        method: "POST",
        data: {
          DelPost: DelPost,
        },
        success: function (data) {
          if (data == 1) {
            ShowNoticeData();
            countNoticeData();
            alert("Data Deleted Successfully!");
          } else {
            alert("Please Try Again");
          }
          // $("#posted_notice").html(data);
        },
      });
    } else {
      alert("Data Deletion Failed");
    }
  });
});
