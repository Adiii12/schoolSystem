$(document).ready(function () {
  //   function extractFee() {
  //     $.ajax({
  //       url: "assets/ajax/chart_ajax/chart.php",
  //       method: "POST",
  //       success: function (data) {
  //         // alert(data);
  //         // $("#fetchChartData").html(data);
  //       },
  //     });
  //   }
  //   extractFee();
  //   function fetchMale_count() {
  //     $.ajax({
  //       url: "assets/ajax/student_ajax/fetch_male_student.php",
  //       type: "POST",
  //       success: function (fetch) {
  //         alert(fetch);
  //         $("#fetchMale_count").html(fetch);
  //       },
  //     });
  //   }
  //   fetchMale_count();
  // fetch male teacher here==========================
  //   function fetchMale_teacher_count() {
  //     $.ajax({
  //       url: "assets/ajax/fetch_male_teacher_count.php",
  //       type: "POST",
  //       data: {
  //         action: "fetch_male_teacher",
  //       },
  //       success: function (fetchMale) {
  //         $("#fetchMale_teacher_count").html(fetchMale);
  //       },
  //     });
  //   }
  //   fetchMale_teacher_count();
});

// $(document).ready(function(){
//   makeChart();
//   function makeChart() {
//     $.ajax({
//       url: "assets/ajax/student_ajax/student_fetch_chart.php",
//       method: "POST",
//       data: { action: "fetch" },
//       dataType: "JSON",
//       success: function (data) {
//         alert(data);
//         var gender= [];
//         var total = [];
//         var color = [];

//         for (var count = 0; count < data.length; count++) {
//           gender.push(data[count].gender);
//           total.push(data[count].total);
//           color.push(data[count].color);
//         }

//         var chart_data = {
//           labels: gender,
//           datasets: [
//             {
//               label: "Vote",
//               backgroundColor: color,
//               color: "#fff",
//               data: total,
//             },
//           ],
//         };

//         var options = {
//           responsive: false,
//           scales: {
//             yAxes: [
//               {
//                 ticks: {
//                   min: 0,
//                 },
//               },
//             ],
//           },
//         };

//         var group_chart1 = $("#myChart2");

//         var graph1 = new Chart(group_chart1, {
//           type: "pie",
//           data: chart_data,
//         });
//       },
//     });
//   }
// });

var ctx = document.getElementById("myChart4").getContext("2d");

var myChart = new Chart(ctx, {
  type: "line",
  data: {
    labels: [
      "January",
      "February",
      "March",
      "April",
      "May",
      "jun",
      "July",
      "August",
      "September",
      "October",
      "November",
      "December",
    ],
    datasets: [
      {
        // label: '# of Votes',

        data: [1345, 19, 56, 4, 56, 54, 45, 345, 456, 767, 554, 456],
        backgroundColor: "rgba(240, 202, 24, 0.7)",
        borderColor: "rgba(255, 99, 132, 1)",
        borderWidth: 1,
      },
    ],
  },
  options: {
    responsive: true,
    // scales: {
    //     y: {
    //         beginAtZero: true
    //     }
    // }
    // layout: {
    //   padding: {
    //     left: 0,
    //     right: 0,
    //     top: 0,
    //     bottom: 0,
    //   },
    // },
    legend: {
      display: false,
      position: "bottom", // top left bottom right
      align: "end", // start end center
      labels: {
        fontColor: "red",
        fontSize: 16,
        boxWidth: 20,
      },
    },
    // Configure ToolTips
    tooltips: {
      enabled: true, // Enable/Disable ToolTip By Default Its True
      backgroundColor: "rgba(247, 202, 24, 1)", // Set Tooltip Background Color
      titleFontFamily: "Comic Sans MS", // Set Tooltip Title Font Family
      titleFontSize: 30, // Set Tooltip Font Size
      titleAlign: "center",
      titleSpacing: 3,
      titleMarginBottom: 20,
      // bodyFontFamily: "Comic Sans MS",
      bodyFontSize: 20,
      // bodyFontStyle: "italic",
      bodyFontColor: "black",
      bodyAlign: "center",
      bodySpacing: 2,
    },

    // title: {
    //   display: true,
    //   text: "Custom Chart Title",
    //   position: "bottom",
    //   fontSize: 25,
    //   fontFamily: "Comic Sans MS",
    //   fontColor: "red",
    //   fontStyle: "bold italic",
    //   padding: 20,
    //   lineHeight: 5,
    // },
  },
});
