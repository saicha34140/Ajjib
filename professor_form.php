
      
              
<!doctype html>
<html lang="en">
<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Checking Names In Classroom (CNIC)</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style1.css">
    <link rel="stylesheet" href="assets/css/style_box_pro.css"> 
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>        
    <link rel="shortcut icon" type="icon/cnic_logo.png" href="assets/icon/cnic_logo.png">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<style>
    body {
      margin-top: 0px;
      background: lightblue url("assets/image/bg8.jpg") no-repeat fixed center; 
    }
</style>
</head>

<body class="style fade-in">

    <nav class="navbar navbar-flex navbar-expand-lg navbar-dark top-bar font_1">

    <a class="navbar-brand" href="">CNIC-UBRU</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">

                <li class="nav-item dropdown d-sm-block d-md-none">
                    <a class="nav-link dropdown-toggle" href="#"  id="smallerscreenmenu" data-toggle="dropdown" data-toggle="collapse" aria-haspopup="true" aria-expanded="false" >
                      Menu
                    </a>
                    <div class="dropdown-menu" aria-labelledby="smallerscreenmenu">
                        <a class="dropdown-item" href="professor_form.php"><i class="fas fa-home"></i> : หน้าหลัก</a>
                        <a class="dropdown-item" href="pro_profile_show.php"><i class="fa fa-user"></i> : ข้อมูลส่วนตัว</a>
                        <a class="dropdown-item" href="view_subject.php"><i class="far fa-file-alt"></i> : ข้อมูลรายวิชา</a>       
                        <a class="dropdown-item" href="view_student.php"><i class="far fa-address-card"></i> : ข้อมูลนักศึกษา</a>
                        <a class="dropdown-item" href="select_subject.php"><i class="far fa-edit"></i> : ระบบเช็ครายชื่อนักศึกษา</a>
                        <a class="dropdown-item" href="view_leave.php"><i class="fa fa-bed"></i> : ระบบการลาเรียนนักศึกษา</a>
                        <a class="dropdown-item" href="view_report.php"><i class="fa fa-calculator"></i> : รายงานข้อมูลการเข้าเรียน</a>
                        <a class="dropdown-item" href="report_student.php"><i class="fa fa-history"></i> : รายงานข้อมูลเวลาเข้าเรียน</a>
                        <a class="dropdown-item" href="report_leave.php"><i class="fas fa-clinic-medical"></i> : รายงานข้อมูลการลาเรียนนักศึกษา</a>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link disabled text-light" href="">
                     ผศ.ดร.ภานุพงศ์ บุญรมย์</a>
                </li>

                <li class="nav-item">
                     <a href="JavaScript:if(confirm('Confirm Logout..!!') == true){window.location='logout.php ';}" class="btn btn-danger">ออกจากระบบ</a>
                </li>

          </ul>
        </div>

</nav>
  
  
  
<!--
  <nav class="navbar navbar-expand-lg navbar-dark top-bar fixed-top font_1">

    <div class="container-fluid">

        <a class="navbar-brand" href="">CNIC-UBRU</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">

                <li class="nav-item dropdown d-sm-block d-md-none">
                    <a class="nav-link dropdown-toggle" href="#"  id="smallerscreenmenu" data-toggle="dropdown" data-toggle="collapse" aria-haspopup="true" aria-expanded="false" >
                      Menu
                    </a>
                    <div class="dropdown-menu" aria-labelledby="smallerscreenmenu">
                        <a class="dropdown-item" href="professor_form.php"><i class="fas fa-home"></i> : หน้าหลัก</a>
                        <a class="dropdown-item" href="pro_profile_edit.php"><i class="fa fa-cogs"></i> : แก้ไข้อมูลส่วนตัว</a>
                        <a class="dropdown-item" href="view_subject.php"><i class="far fa-file-alt"></i> : ข้อมูลรายวิชา</a>       
                        <a class="dropdown-item" href="view_student.php"><i class="far fa-address-card"></i> : ข้อมูลนักศึกษา</a>
                        <a class="dropdown-item" href="create_subject.php"><i class="far fa-calendar-plus"></i> : เพิ่มข้อมูลรายวิชา</a>
                        <a class="dropdown-item" href="select_subject.php"><i class="far fa-edit"></i> : ระบบเช็ครายชื่อนักศึกษา</a>
                        <a class="dropdown-item" href="view_report.php"><i class="fa fa-calculator"></i> : รายงานข้อมูลการเข้าเรียน</a>
                        <a class="dropdown-item" href="report_student.php"><i class="fas fa-child"></i> : รายงานข้อมูลเวลาเข้าเรียน</a>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link disabled text-light" href="">
                     </a>
                </li>

                <li class="nav-item">
                     <a href="JavaScript:if(confirm('Confirm Logout..!!') == true){window.location='logout.php ';}" class="btn btn-danger">ออกจากระบบ</a>
                </li>

          </ul>
        </div>

     </div>

  </nav>

  --->  <!--
  <div class="col-12 text-center text-light font_1"><br>
        <h2>Menu</h2>
    </div>
-->
<p>
    <div class="container-fluid font_1">

                <div class="box">
                    <a href="pro_profile_show.php"> 
                        <div class="content">
                            <img src="assets/icons/profile_1.png">
                            <p class="text-light">ข้อมูลส่วนตัว</p> 
                        </div>
                    </a>
                </div>

                <div class="box">
                    <a href="view_subject.php">
                        <div class="content">
                            <img src="assets/icons/programming.png">
                            <p class="text-light">ข้อมูลรายวิชา</p> 
                        </div>
                    </a>
                </div>

                <div class="box">
                    <a href="view_student.php">
                        <div class="content">
                            <img src="assets/icons/team22.png">
                            <p class="text-light">ข้อมูลนักศึกษา</p>
                        </div>
                    </a>
                </div>

                <div class="box">
                    <a href="select_subject.php">
                        <div class="content">
                            <img src="assets/icons/computer11.png">
                            <p class="text-light">ระบบเช็ครายชื่อนักศึกษา</p>
                        </div>
                    </a>
                </div>

                <div class="box">
                    <a href="view_leave.php">
                        <div class="content">
                            <img src="assets/icons/stay-home.png">
                            <p class="text-light">ระบบการลาเรียนนักศึกษา</p>
                        </div>
                    </a>
                </div>

                <div class="box">
                    <a href="view_report.php">
                        <div class="content">
                            <img src="assets/icons/data_1.png">
                            <p class="text-light">ข้อมูลการเข้าเรียนนักศึกษา</p>
                        </div>
                    </a>
                </div>

                <div class="box">
                    <a href="report_student.php">
                        <div class="content">
                            <img src="assets/icons/calendar_2.png">
                            <p class="text-light">ข้อมูลเวลาเข้าเรียนนักศึกษา</p>
                        </div>
                    </a>
                </div>

                <div class="box">
                    <a href="report_leave.php">
                        <div class="content">
                            <img src="assets/icons/com11.png">
                            <p class="text-light">ข้อมูลการลาเรียนนักศึกษา</p>
                        </div>
                    </a>
                </div>

                <div class="box">
                    <a href="view_work.php">
                        <div class="content">
                            <img src="assets/icons/interface.png">
                            <p class="text-light">ระบบเก็บชั่วโมงช่วยงานสาขาวิชา</p>
                        </div>
                    </a>
                </div>
                
                
                <div class="box">
                    <a href="view_report_work.php">
                        <div class="content">
                            <img src="assets/icons/com22.png">
                            <p class="text-light">ข้อมูลการช่วยงานนักศึกษา</p>
                        </div>
                    </a>
                </div>

                <div class="box">
                    <a href="report_work.php">
                        <div class="content">
                            <img src="assets/icons/list2.png">
                            <p class="text-light">ข้อมูลเวลาการช่วยงานนักศึกษา</p>
                        </div>
                    </a>
                </div>

                <div class="box">
                    <a href="pro_search.php">
                        <div class="content">
                            <img src="assets/icons/com22.png">
                            <p class="text-light">ข้อสอบนักศึกษา</p>
                        </div>
                    </a>
                </div>
                 <!--

                <div class="box">
                    <a href="pro_profile_edit.php">
                        <div class="content">
                            <img src="assets/icons/edit11.png">
                            <p class="text-light">แก้ไข้อมูลส่วนตัว</p>
                        </div>
                    </a>
                </div>

                <div class="box">
                    <a href="pro_view_document.php">
                        <div class="content">
                            <img src="assets/icons/book22.png">
                            <p class="text-light">ข้อมูลเอกสารการสอน</p>
                        </div>
                    </a>
                </div>
            
                <div class="box">
                    <a href="#">
                        <div class="content">
                            <img src="assets/icons/maths.png">
                            <p class="text-light">Upload ข้อสอบ</p>
                        </div>
                    </a>
                </div>

                <div class="box">
                    <a href="#">
                        <div class="content">
                            <img src="assets/icons/com22.png">
                            <p class="text-light">ข้อสอบนักศึกษา</p>
                        </div>
                    </a>
                </div>
                -->
    </div> <!--END container-->

    <br>

  </body>
</html>
