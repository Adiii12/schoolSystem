<?php 
session_start();
if(!isset($_SESSION['username'])){
  header("location:assets/admin_login.php");
}
include "assets/conn/conn.php"; 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" 
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" 
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
      integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk"
      crossorigin="anonymous"
    />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>Islamic School System</title>
    <link rel="stylesheet" href="css/students.css">
    <link rel="stylesheet" href="css/admin.css" />
    <link rel="stylesheet" href="css/teacher.css">
    <link rel="stylesheet" href="css/dashboard.css" />
    <link rel="stylesheet" href="css/dashboard2.css" />
    <link rel="stylesheet" href="css/admin2.css">
    <link rel="stylesheet" href="css/student2.css">
    <link rel="stylesheet" href="css/student3.css">
    <link rel="stylesheet" href="css/parent.css">
    <link rel="stylesheet" href="css/library.css">
    <link rel="stylesheet" href="css/exam.css">
    <link rel="stylesheet" href="css/notice.css">
    <link rel="stylesheet" href="css/map.css">
    <link rel="stylesheet" href="css/transport.css">
    <link rel="stylesheet" href="css/hostel.css">
    <link rel="stylesheet" href="css/expenses.css">
    <link rel="stylesheet" href="css/add_admin.css">
  </head>
  <body>
    <section class="admin-top">
      <div class="row">
        <div class="admin-left" id="slideNav">
          <div class="admin">
             <img src="<?php echo $_SESSION['image']; ?>" alt="">  
            <h1 style="text-align:center;"><?php echo $_SESSION['username']; ?></h1>
          </div>
          <div class="tab">
            <div
              class="tablinks"
              onclick="openCity(event, 'dashboard_top')"
              id="defaultOpen"
            >
              <i class="fas fa-tachometer-alt"></i>
              <span class="tooltip">Dashboard</span>
              <h4>Dashboard</h4>
            </div>
            <div class="tablinks" onclick="openCity(event, 'teacher_top')">
            <i class="fas fa-chalkboard-teacher"></i>
            <span class="tooltip">Teacher</span>
              <h4>Teacher</h4>
            </div>
            <!-- students section start ============================== -->
            <div class="tablinks" onclick="openCity(event, 'student')">
              <i class="fas fa-users"></i>
              <span class="tooltip">Students</span>
              <h4>Students</h4>
            </div>
            <!-- students section start ============================== -->
            <div class="tablinks" onclick="openCity(event, 'parent')">
              <i class="fas fa-calendar-alt"></i>
              <span class="tooltip">Parents</span>
              <h4>Parents</h4>
            </div>
            <div class="tablinks" onclick="openCity(event, 'schedule')">
              <i class="fas fa-clock"></i>
              <span class="tooltip2">Classes Schedule</span>
              <h4>Classes Schedule</h4>
            </div>
            <div class="tablinks" onclick="openCity(event, 'admin')">
              <i class="far fa-chart-bar"></i>
              <span class="tooltip">Admin</span>
              <h4>Admin</h4>
            </div>
            <div class="tablinks" onclick="openCity(event, 'library')">
              <i class="fas fa-folder-open"></i>
              <span class="tooltip">Library</span>
              <h4>Library</h4>
            </div>
            <div class="tablinks" onclick="openCity(event, 'media')">
              <i class="fas fa-video"></i>
              <span class="tooltip">Media</span>
              <h4>Media</h4>
            </div>
            <div class="tablinks" onclick="openCity(event, 'expenses')">
            <i class="fas fa-money-check-alt"></i>
              <span class="tooltip">Expenses</span>
              <h4>Expenses</h4>
            </div>
            <div class="tablinks" onclick="openCity(event, 'hostel')">
            <i class="fas fa-hotel"></i>
              <span class="tooltip">Hostel</span>
              <h4>Hostel</h4>
            </div>
            <div class="tablinks" onclick="openCity(event, 'transport')">
            <i class="fas fa-car"></i>
              <span class="tooltip">Transport</span>
              <h4>Transport</h4>
            </div>
            <div class="tablinks" onclick="openCity(event, 'exam')">
              <i class="fas fa-graduation-cap"></i>
              <span class="tooltip2">Exams</span>
              <h4>Exams</h4>
            </div>
            <div class="tablinks" onclick="openCity(event, 'events')">
              <i class="fas fa-clock"></i>
              <span class="tooltip">Notices</span>
              <h4>Notices</h4>
            </div>
            <div class="tablinks" onclick="openCity(event, 'map')">
            <i class="fas fa-map-marker-alt"></i>
              <span class="tooltip2">Map</span>
              <h4>Map</h4>
            </div>
          </div>
        </div>
<!-- left section start -->
        <div class="admin-right" id="admin-right">
          <div class="header">
            <div class="header-left">
              <i class="fas fa-bars" onclick="menuAnimation()"></i>
            </div>
            <div class="header-right">
              <div class="header-right-inner-right">
                <img src="<?php echo $_SESSION['image']; ?>" onclick="admin()" class="adminImg" alt="Profile Image" />
                <div id="admin_details" class="admin_details">
                   <div class="admin_details_inner">
                     <h3><?php echo $_SESSION['username']; ?></h3>
                     <a href="assets/ajax/admin_ajax/logout.php" class="logoutBtn" id="logoutBtn">Logout</a>
                   </div>
                   <div class="admin_details_footer">
                     <h4>Activity</h4>
                     <div style="cursor:pointer;" class="admin_chat">
                       <h3 style="color:#ddd;">Chat</h3>
                       <span class='admin_msg_count'>08</span>
                     </div>
                     <h3 style="cursor:pointer;color:#ddd" >Recover Password</h3>
                     <h4 style="margin:15px 0px 10px 0px;">My Account</h4>
                   </div>
                   <div class="admin_message_section">
                       <div style='width:50%;border:1px solid #ddd;' class="admin_message_section_left">
                         <div class="admin_message_chat">
                         <i class="fas fa-comments"></i>
                              <p style="font-size: 17px;letter-spacing:4px;">Message</p>
                         </div>
                       </div>
                       <div style='width:50%;border:1px solid #ddd;'  class="admin_message_section_right">
                       <div class="admin_message_support">
                              <i class="fas fa-ticket-alt"></i>
                              <p style="font-size: 17px;letter-spacing:4px;">Support Tickets</p>
                         </div>
                       </div>
                     </div>
                     <div class="open_message">
                       <button class="openMessage">Open Message</button>
                     </div>
                </div>
              </div>
              <div class="header-right-inner-left">
                <!-- logout  -->
              </div>
            </div>
          </div>
          <!-- dashboard section start -------------------- -->
          <div id="dashboard_top" class="tabcontent">
            <?php include "assets/dashboard.php"; ?>
          </div>
            <!-- dashboard section end -------------------- -->
          <!-- teacher section start ==================== -->
          <div id="teacher_top" class="tabcontent">
             <?php include "assets/teacher.php"; ?>
          </div>
           <!-- teacher section end ==================== -->


            <!-- students section start ======================================= -->
           <div id="student" class="tabcontent">
           <?php include 'assets/students.php'; ?>
          </div>
           <!-- teacher section end ============================================ -->
      <!-- parents section start ========================== -->
          <div id="parent" class="tabcontent">
               <?php include 'assets/parent.php'; ?>
          </div>
      <!-- parents section end ========================== -->
          <div id="schedule" class="tabcontent">
            <h3>Schedule</h3>
            <p>London is the capital city of England.</p>
          </div>

          <div id="admin" class="tabcontent">
           <?php include 'assets/add_admin.php'; ?>
          </div>

          <div id="library" class="tabcontent">
          <?php include 'assets/library.php'; ?>
          </div>
          <div id="media" class="tabcontent">
            <h3>Media</h3>
            <p>London is the capital city of England.</p>
          </div>

          <div id="expenses" class="tabcontent">
            <?php include 'assets/expenses.php';  ?>
          </div>
          <div id="hostel" class="tabcontent">
           <?php include 'assets/hostel.php';  ?>
          </div>

          <div id="transport" class="tabcontent">
          <?php include 'assets/transport.php';  ?>
          </div>
          <div id="exam" class="tabcontent">
            <?php include 'assets/exam.php';  ?>
          </div>
          <div id="events" class="tabcontent">
          <?php include 'assets/notices.php';  ?>
          </div>
          <div id="map" class="tabcontent">
          <?php include 'assets/map.php';  ?>
          </div>
        </div>
      </div>
    </section>
     <!-- view details modal end =========== -->
     <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
      integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
       crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
       
 
    <script src="js/teacherFile.js"></script> 
    <script src="js/app.js"></script>
    <script src="js/student.js"></script>
    <script src="js/libraryFile.js"></script>
    <script src="js/chart.js"></script>
    <script src="js/parentFile.js"></script>
    <script src="js/exam.js"></script>
    <script src="js/notice.js"></script>
    <script src="js/transport.js"></script>
    <script src="js/hostel.js"></script>
    <script src="js/expenses.js"></script>
    <script src="js/add_admin.js"></script>
    <script>
      function admin() {
          document.getElementById("admin_details").classList.toggle("show2");
       }
    // Close the dropdown if the user clicks outside of it
      window.onclick = function(event) {
        if (!event.target.matches('.adminImg')) {
          var dropdowns = document.getElementsByClassName("admin_details");
          var i;
          for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show2')) {
              openDropdown.classList.remove('show2');
            }
          }
        }
      }

// parent action btn =========================================================
// function p_actionClick() {
//   document.getElementById("p_action_content").classList.toggle("p_action_btn");
// }
// // Close the dropdown if the user clicks outside of it
// window.onclick = function(event) {
//   if (!event.target.matches('#parent_action_icon')) {
//     var dropdowns = document.getElementsByClassName("p_action_content");
//     var i;
//     for (i = 0; i < dropdowns.length; i++) {
//       var openDropdown = dropdowns[i];
//       if (openDropdown.classList.contains('p_action_btn')) {
//         openDropdown.classList.remove('p_action_btn');
//       }
//     }
//   }
// }
    </script>
    <script>
      //   toggle menu button
      function menuAnimation() {
        var element = document.getElementById("slideNav");
        var element1 = document.getElementById("admin-right");
        if (element && element1) {
          element.classList.toggle("navSlide");
          element1.classList.toggle("navSlide1");
        }
      }

    </script>
    <?php
    $sql = "SELECT COUNT(CASE WHEN UPPER(Gender) = 'male' THEN 1 END) Male,
    COUNT(CASE WHEN UPPER(Gender) = 'female' THEN 1 END) Female
    FROM student";
    $fire = mysqli_query($conn,$sql);
    // $fetchMaleCount = mysqli_num_rows($fire);
    $json = [];
    $json2 = [];
    while($row = mysqli_fetch_assoc($fire)){
        $json[] = (int)$row['Male'];
        $json2[] =(int)$row['Female'];
    }
    // $array[] = json_decode($json, true);
    // $array[] = json_decode($json2, true);
    // $result = json_encode($array, JSON_PRETTY_PRINT);
    // echo $result;
    $newArray =array_merge($json,$json2);
    // echo json_encode($newArray);
    // echo json_encode($json2);
        // $fetchMaleCount; 

?>
<?php
    $sql2 = "SELECT COUNT(CASE WHEN UPPER(Gender) = 'male' THEN 1 END) Male,
    COUNT(CASE WHEN UPPER(Gender) = 'female' THEN 1 END) Female
    FROM teacher";
    $fire2 = mysqli_query($conn,$sql2);
    // $fetchMaleCount = mysqli_num_rows($fire);
    $jsonTeacher = [];
    $jsonTeacher2 = [];
    while($row = mysqli_fetch_assoc($fire2)){
        $jsonTeacher[] = (int)$row['Male'];
        $jsonTeacher2[] =(int)$row['Female'];
    }
    // $array[] = json_decode($json, true);
    // $array[] = json_decode($json2, true);
    // $result = json_encode($array, JSON_PRETTY_PRINT);
    // echo $result;
    $newTeacherArray = array_merge($jsonTeacher,$jsonTeacher2);
    // echo json_encode($newArray);
    // echo json_encode($json2);
        // $fetchMaleCount; 

?>
    <script>
      // chart for teacher start here ===============================
      
      // chart for student here ========================================
var ctx3 = document.getElementById("myChart3").getContext("2d");
var myChart = new Chart(ctx3, {
  type: "doughnut",
  data: {
    // labels: ["Male Students", "Female Students"],
    datasets: [
      {
        // label: '# of Votes',

        data: <?php echo json_encode($newArray); ?>,
        backgroundColor: ["rgba(247, 202, 24, 0.7)", "rgba(154,205,50,0.7)"],
        // borderColor: [
        //   "rgba(255, 99, 132, 1)",
        //   "rgba(54, 162, 235, 1)",
        //   "rgba(255, 206, 86, 1)",
        //   "rgba(75, 192, 192, 1)",
        //   "rgba(153, 102, 255, 1)",
        //   "rgba(255, 159, 64, 1)",
        // ],
        borderWidth: 1,
      },
    ],
  },
  options: {
    responsive: false,
    // scales: {
    //     y: {
    //         beginAtZero: true
    //     }
    // }
    layout: {
      padding: {
        left: 0,
        right: 0,
        top: 0,
        bottom: 0,
      },
    },
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
// function addData(chart, label, data) {
//     chart.data.labels.push(label);
//     chart.data.datasets.forEach((dataset) => {
//         dataset.data.push(data);
//     });
//     chart.update();
// }

// function removeData(chart) {
//     chart.data.labels.pop();
//     chart.data.datasets.forEach((dataset) => {
//         dataset.data.pop();
//     });
//     chart.update();
// }
// function update_student_chart(){
//   chart.data.datasets[0].data = 
//   chart.update();
// }
var ctx2 = document.getElementById("myChart2").getContext("2d");
var myChart = new Chart(ctx2, {
  type: "pie",
  data: {
    // labels: ["Male Teacher", "Female Teacher"],
    datasets: [
      {
        // label: '# of Votes',

        data: <?php echo json_encode($newTeacherArray); ?>,
        backgroundColor: ["rgba(247, 202, 24, 0.7)", "rgba(154,205,50,0.7)"],
        // borderColor: [
        //   "rgba(255, 99, 132, 1)",
        //   "rgba(54, 162, 235, 1)",
        //   "rgba(255, 206, 86, 1)",
        //   "rgba(75, 192, 192, 1)",
        //   "rgba(153, 102, 255, 1)",
        //   "rgba(255, 159, 64, 1)",
        // ],
        borderWidth: 1,
      },
    ],
  },
  options: {
    responsive: false,
    // scales: {
    //     y: {
    //         beginAtZero: true
    //     }
    // }
    layout: {
      padding: {
        left: 0,
        right: 0,
        top: 0,
        bottom: 0,
      },
    },
    legend: {
      display: false,
      // position: "bottom", // top left bottom right
      // align: "end", // start end center
      // labels: {
      //   fontColor: "red",
      //   fontSize: 16,
      //   boxWidth: 20,
      // },
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
    </script>
  </body>
</html>
