
      
              
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
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'> 
    <link rel="shortcut icon" type="icon/cnic_logo.png" href="assets/icon/cnic_logo.png">
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

</head>
<body class="style fade-in" style="background-color:gray;">

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

  --->  
  <div class="container-fluid">
    <div class="row font_1" >
      <div class="col py-3 table-responsive">

      <div class="card text-center">
        <h5 class="card-header">ข้อมูลการเก็บชั่วโมง </h5>
        <div class="card-body">
          <div class="col-auto">
            <div>
              <div class="form-group text-right">
                <a href="create_work.php" class="btn btn-success" ><i class="fa fa-plus"></i> เพิ่มข้อมูลการเก็บชั่วโมง</a>
              </div>
            </div>
          </div>  

        <form action="view_work.php" method="post" name="form_search" >
          <div class="form-group">
            <div class="col-auto">
              <div class="input-group ">
                  <input type="text" class="form-control" name="keyword" placeholder="ภาคเรียน/หัวข้อ" >
                <div class="input-group-append">
                  <button type="submit" class="btn btn-primary" type="button">Search</button>
                </div>
              </div>    
            </div>
          </div>
        </form>
           
        <div class="table-responsive">
          <table class="table table-borderless table-condensed" >
            
          <thead class="bg-primary">
            <tr class="text-center"  width="100%" >
              <th width="5%" style="vertical-align:middle;">ลำดับ</th>
              <th width="10%" style="vertical-align:middle;">ภาคเรียน</th>
              <th width="20%" style="vertical-align:middle;">หัวข้อ</th>
              <th width="15%" style="vertical-align:middle;">สถานที่</th>
              <th width="10%" style="vertical-align:middle;">จำนวนชั่วโมง</th>
              <th width="25%" style="vertical-align:middle;">หมายเหตุ</th>
              <th width="5%" style="vertical-align:middle;">Select</th>
              <!--
              <th width="5%" style="vertical-align:middle;">ลบ</th>
              -->
            </tr>
          </thead>

          
          <tbody> 
            <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">1 </td>
              <td class="text-center" style="vertical-align:middle;">1/2563 </td>
              <td class="text-center" style="vertical-align:middle;">จัดกิจกรรมเตรียมความพร้อม </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">5 </td>
              <td class="text-center" style="vertical-align:middle;">จัดกิจกรรมเตรียมความพร้อม ให้กับนักศึกษาชั้นปีที่ 1 </td>
              <td class="text-center " style="vertical-align:middle;"> 
              <a href="add_std_work.php?wr_id=Mw==" target='_blank'><i class='far fa-edit' style='font-size:24px;color:black'></i></a> </td>
              <!--
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="JavaScript:if(confirm('Confirm Delete?') == true){window.location='work_delete.php?wrid=3';}" ><i class='fa fa-window-close' style='font-size:24px;color:black'></i></a> </td>
              -->
          </tbody>

          
          <tbody> 
            <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">2 </td>
              <td class="text-center" style="vertical-align:middle;">1/2563 </td>
              <td class="text-center" style="vertical-align:middle;">เตรียมงานประกวดเฟรชซี่/น้องหล้า </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">8 </td>
              <td class="text-center" style="vertical-align:middle;"> </td>
              <td class="text-center " style="vertical-align:middle;"> 
              <a href="add_std_work.php?wr_id=OQ==" target='_blank'><i class='far fa-edit' style='font-size:24px;color:black'></i></a> </td>
              <!--
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="JavaScript:if(confirm('Confirm Delete?') == true){window.location='work_delete.php?wrid=9';}" ><i class='fa fa-window-close' style='font-size:24px;color:black'></i></a> </td>
              -->
          </tbody>

          
          <tbody> 
            <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">3 </td>
              <td class="text-center" style="vertical-align:middle;">1/2563 </td>
              <td class="text-center" style="vertical-align:middle;">เตรียมงานประกวดเฟรชซี่/น้องหล้า </td>
              <td class="text-center" style="vertical-align:middle;"> </td>
              <td class="text-center" style="vertical-align:middle;">4 </td>
              <td class="text-center" style="vertical-align:middle;"> </td>
              <td class="text-center " style="vertical-align:middle;"> 
              <a href="add_std_work.php?wr_id=MTA=" target='_blank'><i class='far fa-edit' style='font-size:24px;color:black'></i></a> </td>
              <!--
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="JavaScript:if(confirm('Confirm Delete?') == true){window.location='work_delete.php?wrid=10';}" ><i class='fa fa-window-close' style='font-size:24px;color:black'></i></a> </td>
              -->
          </tbody>

          
          <tbody> 
            <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">4 </td>
              <td class="text-center" style="vertical-align:middle;">1/2563 </td>
              <td class="text-center" style="vertical-align:middle;">โครงการอบรมระบบสมองกลฝังตัวและหุ่นยนต์ </td>
              <td class="text-center" style="vertical-align:middle;"> </td>
              <td class="text-center" style="vertical-align:middle;">8 </td>
              <td class="text-center" style="vertical-align:middle;">24 ตุลาคม 2563 </td>
              <td class="text-center " style="vertical-align:middle;"> 
              <a href="add_std_work.php?wr_id=MTY=" target='_blank'><i class='far fa-edit' style='font-size:24px;color:black'></i></a> </td>
              <!--
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="JavaScript:if(confirm('Confirm Delete?') == true){window.location='work_delete.php?wrid=16';}" ><i class='fa fa-window-close' style='font-size:24px;color:black'></i></a> </td>
              -->
          </tbody>

          
          <tbody> 
            <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">5 </td>
              <td class="text-center" style="vertical-align:middle;">1/2563 </td>
              <td class="text-center" style="vertical-align:middle;">โครงการอบรมระบบสมองกลฝังตัวและหุ่นยนต์ </td>
              <td class="text-center" style="vertical-align:middle;"> </td>
              <td class="text-center" style="vertical-align:middle;">8 </td>
              <td class="text-center" style="vertical-align:middle;">25 ตุลาคม 2563 </td>
              <td class="text-center " style="vertical-align:middle;"> 
              <a href="add_std_work.php?wr_id=MTc=" target='_blank'><i class='far fa-edit' style='font-size:24px;color:black'></i></a> </td>
              <!--
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="JavaScript:if(confirm('Confirm Delete?') == true){window.location='work_delete.php?wrid=17';}" ><i class='fa fa-window-close' style='font-size:24px;color:black'></i></a> </td>
              -->
          </tbody>

          
          <tbody> 
            <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">6 </td>
              <td class="text-center" style="vertical-align:middle;">1/2564 </td>
              <td class="text-center" style="vertical-align:middle;">โครงการโครงการเตรียมความพร้อมนักศึกษาชั้นปีที่ 1 ก่อนเปิดเรียน </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">8 </td>
              <td class="text-center" style="vertical-align:middle;">24 มิถุนายน 2564 </td>
              <td class="text-center " style="vertical-align:middle;"> 
              <a href="add_std_work.php?wr_id=MTk=" target='_blank'><i class='far fa-edit' style='font-size:24px;color:black'></i></a> </td>
              <!--
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="JavaScript:if(confirm('Confirm Delete?') == true){window.location='work_delete.php?wrid=19';}" ><i class='fa fa-window-close' style='font-size:24px;color:black'></i></a> </td>
              -->
          </tbody>

          
          <tbody> 
            <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">7 </td>
              <td class="text-center" style="vertical-align:middle;">1/2564 </td>
              <td class="text-center" style="vertical-align:middle;">เตรียมความพร้อมนักศึกษาชั้นปีที่ 1 ก่อนเปิดเรียน </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">7 </td>
              <td class="text-center" style="vertical-align:middle;">25 มิถุนายน 2564 </td>
              <td class="text-center " style="vertical-align:middle;"> 
              <a href="add_std_work.php?wr_id=MjA=" target='_blank'><i class='far fa-edit' style='font-size:24px;color:black'></i></a> </td>
              <!--
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="JavaScript:if(confirm('Confirm Delete?') == true){window.location='work_delete.php?wrid=20';}" ><i class='fa fa-window-close' style='font-size:24px;color:black'></i></a> </td>
              -->
          </tbody>

          
          <tbody> 
            <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">8 </td>
              <td class="text-center" style="vertical-align:middle;">1/2564 </td>
              <td class="text-center" style="vertical-align:middle;">การเตรียมความพร้อมนักศึกษาชั้นปีที่ 1 ก่อนเปิดเรียน (พิเศษ) </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">8 </td>
              <td class="text-center" style="vertical-align:middle;">วันที่ 25 มิถุนายน 2564 </td>
              <td class="text-center " style="vertical-align:middle;"> 
              <a href="add_std_work.php?wr_id=MjI=" target='_blank'><i class='far fa-edit' style='font-size:24px;color:black'></i></a> </td>
              <!--
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="JavaScript:if(confirm('Confirm Delete?') == true){window.location='work_delete.php?wrid=22';}" ><i class='fa fa-window-close' style='font-size:24px;color:black'></i></a> </td>
              -->
          </tbody>

          
          <tbody> 
            <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">9 </td>
              <td class="text-center" style="vertical-align:middle;">1/2565 </td>
              <td class="text-center" style="vertical-align:middle;">กิจกรรมซ้อมบูมสาขาวิชาคอมพิวเตอร์ศึกษา </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">4 </td>
              <td class="text-center" style="vertical-align:middle;">8 กรกฎาคม 2565 </td>
              <td class="text-center " style="vertical-align:middle;"> 
              <a href="add_std_work.php?wr_id=MjU=" target='_blank'><i class='far fa-edit' style='font-size:24px;color:black'></i></a> </td>
              <!--
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="JavaScript:if(confirm('Confirm Delete?') == true){window.location='work_delete.php?wrid=25';}" ><i class='fa fa-window-close' style='font-size:24px;color:black'></i></a> </td>
              -->
          </tbody>

          
          <tbody> 
            <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">10 </td>
              <td class="text-center" style="vertical-align:middle;">1/2565 </td>
              <td class="text-center" style="vertical-align:middle;">กิจกรรมซ้อมบูมสาขาวิชาคอมพิวเตอร์ศึกษา </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">4 </td>
              <td class="text-center" style="vertical-align:middle;">9 กรกฎาคม 2565 </td>
              <td class="text-center " style="vertical-align:middle;"> 
              <a href="add_std_work.php?wr_id=MjY=" target='_blank'><i class='far fa-edit' style='font-size:24px;color:black'></i></a> </td>
              <!--
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="JavaScript:if(confirm('Confirm Delete?') == true){window.location='work_delete.php?wrid=26';}" ><i class='fa fa-window-close' style='font-size:24px;color:black'></i></a> </td>
              -->
          </tbody>

          
          <tbody> 
            <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">11 </td>
              <td class="text-center" style="vertical-align:middle;">1/2565 </td>
              <td class="text-center" style="vertical-align:middle;">กิจกรรมซ้อมบูมสาขาวิชาคอมพิวเตอร์ศึกษา </td>
              <td class="text-center" style="vertical-align:middle;"> </td>
              <td class="text-center" style="vertical-align:middle;">4 </td>
              <td class="text-center" style="vertical-align:middle;">10 กรกฎาคม 2565 </td>
              <td class="text-center " style="vertical-align:middle;"> 
              <a href="add_std_work.php?wr_id=Mjc=" target='_blank'><i class='far fa-edit' style='font-size:24px;color:black'></i></a> </td>
              <!--
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="JavaScript:if(confirm('Confirm Delete?') == true){window.location='work_delete.php?wrid=27';}" ><i class='fa fa-window-close' style='font-size:24px;color:black'></i></a> </td>
              -->
          </tbody>

          
          <tbody> 
            <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">12 </td>
              <td class="text-center" style="vertical-align:middle;">1/2565 </td>
              <td class="text-center" style="vertical-align:middle;">กิจกรรมบูมสาขาวิชาคอมพิวเตอร์ศึกษา </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">4 </td>
              <td class="text-center" style="vertical-align:middle;">12 กรกฎาคม 2565 </td>
              <td class="text-center " style="vertical-align:middle;"> 
              <a href="add_std_work.php?wr_id=Mjg=" target='_blank'><i class='far fa-edit' style='font-size:24px;color:black'></i></a> </td>
              <!--
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="JavaScript:if(confirm('Confirm Delete?') == true){window.location='work_delete.php?wrid=28';}" ><i class='fa fa-window-close' style='font-size:24px;color:black'></i></a> </td>
              -->
          </tbody>

          
          <tbody> 
            <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">13 </td>
              <td class="text-center" style="vertical-align:middle;">1/2565 </td>
              <td class="text-center" style="vertical-align:middle;">ซ้อมกิจกรรมสานสัมพันธ์ฉันท์พี่น้อง ปีการศึกษา 2565 </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">5 </td>
              <td class="text-center" style="vertical-align:middle;">19 กรกฎาคม 2565 </td>
              <td class="text-center " style="vertical-align:middle;"> 
              <a href="add_std_work.php?wr_id=Mjk=" target='_blank'><i class='far fa-edit' style='font-size:24px;color:black'></i></a> </td>
              <!--
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="JavaScript:if(confirm('Confirm Delete?') == true){window.location='work_delete.php?wrid=29';}" ><i class='fa fa-window-close' style='font-size:24px;color:black'></i></a> </td>
              -->
          </tbody>

          
          <tbody> 
            <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">14 </td>
              <td class="text-center" style="vertical-align:middle;">1/2565 </td>
              <td class="text-center" style="vertical-align:middle;">พิธีบายศรีสู่ขวัญและไหว้ครูสาขาวิชาคอมพิวเตอร์ศึกษา </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">4 </td>
              <td class="text-center" style="vertical-align:middle;">วันที่ 20 กรกฎาคม 2565 </td>
              <td class="text-center " style="vertical-align:middle;"> 
              <a href="add_std_work.php?wr_id=MzA=" target='_blank'><i class='far fa-edit' style='font-size:24px;color:black'></i></a> </td>
              <!--
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="JavaScript:if(confirm('Confirm Delete?') == true){window.location='work_delete.php?wrid=30';}" ><i class='fa fa-window-close' style='font-size:24px;color:black'></i></a> </td>
              -->
          </tbody>

          
          <tbody> 
            <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">15 </td>
              <td class="text-center" style="vertical-align:middle;">1/2565 </td>
              <td class="text-center" style="vertical-align:middle;">ซ้อมกิจกรรมสานสัมพันธ์ฉันท์พี่น้อง ปีการศึกษา 2565 </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">6 </td>
              <td class="text-center" style="vertical-align:middle;">20 กรกฎาคม 2565 </td>
              <td class="text-center " style="vertical-align:middle;"> 
              <a href="add_std_work.php?wr_id=MzE=" target='_blank'><i class='far fa-edit' style='font-size:24px;color:black'></i></a> </td>
              <!--
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="JavaScript:if(confirm('Confirm Delete?') == true){window.location='work_delete.php?wrid=31';}" ><i class='fa fa-window-close' style='font-size:24px;color:black'></i></a> </td>
              -->
          </tbody>

          
          <tbody> 
            <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">16 </td>
              <td class="text-center" style="vertical-align:middle;">1/2565 </td>
              <td class="text-center" style="vertical-align:middle;">ซ้อมกิจกรรมน้องหล้าคำแพงและเฟรชชี่ </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">6 </td>
              <td class="text-center" style="vertical-align:middle;">22 กรกฎาคม 2565 </td>
              <td class="text-center " style="vertical-align:middle;"> 
              <a href="add_std_work.php?wr_id=MzI=" target='_blank'><i class='far fa-edit' style='font-size:24px;color:black'></i></a> </td>
              <!--
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="JavaScript:if(confirm('Confirm Delete?') == true){window.location='work_delete.php?wrid=32';}" ><i class='fa fa-window-close' style='font-size:24px;color:black'></i></a> </td>
              -->
          </tbody>

          
          <tbody> 
            <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">17 </td>
              <td class="text-center" style="vertical-align:middle;">1/2565 </td>
              <td class="text-center" style="vertical-align:middle;">ซ้อมกิจกรรมน้องหล้าคำแพงและเฟรชชี่ </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">4 </td>
              <td class="text-center" style="vertical-align:middle;">23 กรกฎาคม 2565 </td>
              <td class="text-center " style="vertical-align:middle;"> 
              <a href="add_std_work.php?wr_id=MzM=" target='_blank'><i class='far fa-edit' style='font-size:24px;color:black'></i></a> </td>
              <!--
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="JavaScript:if(confirm('Confirm Delete?') == true){window.location='work_delete.php?wrid=33';}" ><i class='fa fa-window-close' style='font-size:24px;color:black'></i></a> </td>
              -->
          </tbody>

          
          <tbody> 
            <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">18 </td>
              <td class="text-center" style="vertical-align:middle;">1/2565 </td>
              <td class="text-center" style="vertical-align:middle;">ซ้อมกิจกรรมน้องหล้าคำแพงและเฟรชชี่ </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">6 </td>
              <td class="text-center" style="vertical-align:middle;">24 กรกฎาคม 2565 </td>
              <td class="text-center " style="vertical-align:middle;"> 
              <a href="add_std_work.php?wr_id=MzQ=" target='_blank'><i class='far fa-edit' style='font-size:24px;color:black'></i></a> </td>
              <!--
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="JavaScript:if(confirm('Confirm Delete?') == true){window.location='work_delete.php?wrid=34';}" ><i class='fa fa-window-close' style='font-size:24px;color:black'></i></a> </td>
              -->
          </tbody>

          
          <tbody> 
            <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">19 </td>
              <td class="text-center" style="vertical-align:middle;">2/2565 </td>
              <td class="text-center" style="vertical-align:middle;">ซ้อมกิจกรรมน้องหล้าคำแพงและเฟรชชี่ </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">6 </td>
              <td class="text-center" style="vertical-align:middle;">25 กรกฎาคม 2565 </td>
              <td class="text-center " style="vertical-align:middle;"> 
              <a href="add_std_work.php?wr_id=MzU=" target='_blank'><i class='far fa-edit' style='font-size:24px;color:black'></i></a> </td>
              <!--
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="JavaScript:if(confirm('Confirm Delete?') == true){window.location='work_delete.php?wrid=35';}" ><i class='fa fa-window-close' style='font-size:24px;color:black'></i></a> </td>
              -->
          </tbody>

          
          <tbody> 
            <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">20 </td>
              <td class="text-center" style="vertical-align:middle;">1/2565 </td>
              <td class="text-center" style="vertical-align:middle;">ซ้อมกิจกรรมน้องหล้าคำแพงและเฟรชชี่ </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">6 </td>
              <td class="text-center" style="vertical-align:middle;">26 กรกฏาคม 2565 </td>
              <td class="text-center " style="vertical-align:middle;"> 
              <a href="add_std_work.php?wr_id=MzY=" target='_blank'><i class='far fa-edit' style='font-size:24px;color:black'></i></a> </td>
              <!--
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="JavaScript:if(confirm('Confirm Delete?') == true){window.location='work_delete.php?wrid=36';}" ><i class='fa fa-window-close' style='font-size:24px;color:black'></i></a> </td>
              -->
          </tbody>

          
          <tbody> 
            <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">21 </td>
              <td class="text-center" style="vertical-align:middle;">1/2565 </td>
              <td class="text-center" style="vertical-align:middle;">ซ้อมกิจกรรมน้องหล้าคำแพงและเฟรชชี่ </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">6 </td>
              <td class="text-center" style="vertical-align:middle;">27 กรกฎาคม 2565 </td>
              <td class="text-center " style="vertical-align:middle;"> 
              <a href="add_std_work.php?wr_id=Mzc=" target='_blank'><i class='far fa-edit' style='font-size:24px;color:black'></i></a> </td>
              <!--
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="JavaScript:if(confirm('Confirm Delete?') == true){window.location='work_delete.php?wrid=37';}" ><i class='fa fa-window-close' style='font-size:24px;color:black'></i></a> </td>
              -->
          </tbody>

          
          <tbody> 
            <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">22 </td>
              <td class="text-center" style="vertical-align:middle;">1/2565 </td>
              <td class="text-center" style="vertical-align:middle;">ซ้อมกิจกรรมน้องหล้าคำแพงและเฟรชชี่ </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">6 </td>
              <td class="text-center" style="vertical-align:middle;">28 กรกฎาคม 2565 </td>
              <td class="text-center " style="vertical-align:middle;"> 
              <a href="add_std_work.php?wr_id=Mzg=" target='_blank'><i class='far fa-edit' style='font-size:24px;color:black'></i></a> </td>
              <!--
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="JavaScript:if(confirm('Confirm Delete?') == true){window.location='work_delete.php?wrid=38';}" ><i class='fa fa-window-close' style='font-size:24px;color:black'></i></a> </td>
              -->
          </tbody>

          
          <tbody> 
            <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">23 </td>
              <td class="text-center" style="vertical-align:middle;">1/2565 </td>
              <td class="text-center" style="vertical-align:middle;">ซ้อมกิจกรรมน้องหล้าคำแพงและเฟรชชี่ </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">6 </td>
              <td class="text-center" style="vertical-align:middle;">29 กรกฎาคม 2565 </td>
              <td class="text-center " style="vertical-align:middle;"> 
              <a href="add_std_work.php?wr_id=Mzk=" target='_blank'><i class='far fa-edit' style='font-size:24px;color:black'></i></a> </td>
              <!--
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="JavaScript:if(confirm('Confirm Delete?') == true){window.location='work_delete.php?wrid=39';}" ><i class='fa fa-window-close' style='font-size:24px;color:black'></i></a> </td>
              -->
          </tbody>

          
          <tbody> 
            <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">24 </td>
              <td class="text-center" style="vertical-align:middle;">1/2565 </td>
              <td class="text-center" style="vertical-align:middle;">ซ้อมกิจกรรมน้องหล้าคำแพงและเฟรชชี่ </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">6 </td>
              <td class="text-center" style="vertical-align:middle;">30 กรกฎาคม 2565
 </td>
              <td class="text-center " style="vertical-align:middle;"> 
              <a href="add_std_work.php?wr_id=NDA=" target='_blank'><i class='far fa-edit' style='font-size:24px;color:black'></i></a> </td>
              <!--
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="JavaScript:if(confirm('Confirm Delete?') == true){window.location='work_delete.php?wrid=40';}" ><i class='fa fa-window-close' style='font-size:24px;color:black'></i></a> </td>
              -->
          </tbody>

          
          <tbody> 
            <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">25 </td>
              <td class="text-center" style="vertical-align:middle;">1/2565 </td>
              <td class="text-center" style="vertical-align:middle;">ซ้อมกิจกรรมน้องหล้าคำแพงและเฟรชชี่ </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">6 </td>
              <td class="text-center" style="vertical-align:middle;">1 สิงหาคม 2565
 </td>
              <td class="text-center " style="vertical-align:middle;"> 
              <a href="add_std_work.php?wr_id=NDE=" target='_blank'><i class='far fa-edit' style='font-size:24px;color:black'></i></a> </td>
              <!--
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="JavaScript:if(confirm('Confirm Delete?') == true){window.location='work_delete.php?wrid=41';}" ><i class='fa fa-window-close' style='font-size:24px;color:black'></i></a> </td>
              -->
          </tbody>

          
          <tbody> 
            <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">26 </td>
              <td class="text-center" style="vertical-align:middle;">1/2565 </td>
              <td class="text-center" style="vertical-align:middle;">ซ้อมกิจกรรมน้องหล้าคำแพงและเฟรชชี่ </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">6 </td>
              <td class="text-center" style="vertical-align:middle;"> </td>
              <td class="text-center " style="vertical-align:middle;"> 
              <a href="add_std_work.php?wr_id=NDI=" target='_blank'><i class='far fa-edit' style='font-size:24px;color:black'></i></a> </td>
              <!--
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="JavaScript:if(confirm('Confirm Delete?') == true){window.location='work_delete.php?wrid=42';}" ><i class='fa fa-window-close' style='font-size:24px;color:black'></i></a> </td>
              -->
          </tbody>

          
          <tbody> 
            <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">27 </td>
              <td class="text-center" style="vertical-align:middle;">1/2565 </td>
              <td class="text-center" style="vertical-align:middle;">ซ้อมกิจกรรมน้องหล้าคำแพงและเฟรชชี่ </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">6 </td>
              <td class="text-center" style="vertical-align:middle;">3 สิงหาคม 2565 </td>
              <td class="text-center " style="vertical-align:middle;"> 
              <a href="add_std_work.php?wr_id=NDM=" target='_blank'><i class='far fa-edit' style='font-size:24px;color:black'></i></a> </td>
              <!--
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="JavaScript:if(confirm('Confirm Delete?') == true){window.location='work_delete.php?wrid=43';}" ><i class='fa fa-window-close' style='font-size:24px;color:black'></i></a> </td>
              -->
          </tbody>

          
          <tbody> 
            <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">28 </td>
              <td class="text-center" style="vertical-align:middle;">1/2565 </td>
              <td class="text-center" style="vertical-align:middle;">ซ้อมกิจกรรมน้องหล้าคำแพงและเฟรชชี่ </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">6 </td>
              <td class="text-center" style="vertical-align:middle;">31 กรกฎาคม 2565
 </td>
              <td class="text-center " style="vertical-align:middle;"> 
              <a href="add_std_work.php?wr_id=NDQ=" target='_blank'><i class='far fa-edit' style='font-size:24px;color:black'></i></a> </td>
              <!--
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="JavaScript:if(confirm('Confirm Delete?') == true){window.location='work_delete.php?wrid=44';}" ><i class='fa fa-window-close' style='font-size:24px;color:black'></i></a> </td>
              -->
          </tbody>

          
          <tbody> 
            <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">29 </td>
              <td class="text-center" style="vertical-align:middle;">1/2565 </td>
              <td class="text-center" style="vertical-align:middle;">ซ้อมกิจกรรมน้องหล้าคำแพงและเฟรชชี่ </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">6 </td>
              <td class="text-center" style="vertical-align:middle;">4 กรกฎาคม 2565 </td>
              <td class="text-center " style="vertical-align:middle;"> 
              <a href="add_std_work.php?wr_id=NDU=" target='_blank'><i class='far fa-edit' style='font-size:24px;color:black'></i></a> </td>
              <!--
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="JavaScript:if(confirm('Confirm Delete?') == true){window.location='work_delete.php?wrid=45';}" ><i class='fa fa-window-close' style='font-size:24px;color:black'></i></a> </td>
              -->
          </tbody>

          
          <tbody> 
            <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">30 </td>
              <td class="text-center" style="vertical-align:middle;">1/2565 </td>
              <td class="text-center" style="vertical-align:middle;">ซ้อมกิจกรรมน้องหล้าคำแพงและเฟรชชี่ </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">6 </td>
              <td class="text-center" style="vertical-align:middle;">5 กรกฎาคม 2565 </td>
              <td class="text-center " style="vertical-align:middle;"> 
              <a href="add_std_work.php?wr_id=NDY=" target='_blank'><i class='far fa-edit' style='font-size:24px;color:black'></i></a> </td>
              <!--
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="JavaScript:if(confirm('Confirm Delete?') == true){window.location='work_delete.php?wrid=46';}" ><i class='fa fa-window-close' style='font-size:24px;color:black'></i></a> </td>
              -->
          </tbody>

          
          <tbody> 
            <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">31 </td>
              <td class="text-center" style="vertical-align:middle;">1/2565 </td>
              <td class="text-center" style="vertical-align:middle;">ซ้อมกิจกรรมสานสัมพันธ์ฉันท์พี่น้อง ปีการศึกษา 2565 </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">10 </td>
              <td class="text-center" style="vertical-align:middle;">วันที่ 5 สิงหาคม 2565 </td>
              <td class="text-center " style="vertical-align:middle;"> 
              <a href="add_std_work.php?wr_id=NDc=" target='_blank'><i class='far fa-edit' style='font-size:24px;color:black'></i></a> </td>
              <!--
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="JavaScript:if(confirm('Confirm Delete?') == true){window.location='work_delete.php?wrid=47';}" ><i class='fa fa-window-close' style='font-size:24px;color:black'></i></a> </td>
              -->
          </tbody>

          
          <tbody> 
            <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">32 </td>
              <td class="text-center" style="vertical-align:middle;">1/2565 </td>
              <td class="text-center" style="vertical-align:middle;">ซ้อมกิจกรรมน้องหล้าคำแพงและเฟรชชี่ </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">6 </td>
              <td class="text-center" style="vertical-align:middle;">6 สิงหาคม 2565 </td>
              <td class="text-center " style="vertical-align:middle;"> 
              <a href="add_std_work.php?wr_id=NDg=" target='_blank'><i class='far fa-edit' style='font-size:24px;color:black'></i></a> </td>
              <!--
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="JavaScript:if(confirm('Confirm Delete?') == true){window.location='work_delete.php?wrid=48';}" ><i class='fa fa-window-close' style='font-size:24px;color:black'></i></a> </td>
              -->
          </tbody>

          
          <tbody> 
            <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">33 </td>
              <td class="text-center" style="vertical-align:middle;">1/2565 </td>
              <td class="text-center" style="vertical-align:middle;">ซ้อมกิจกรรมน้องหล้าคำแพงและเฟรชชี่ </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">6 </td>
              <td class="text-center" style="vertical-align:middle;">8 กรกฎาคม 2565 </td>
              <td class="text-center " style="vertical-align:middle;"> 
              <a href="add_std_work.php?wr_id=NDk=" target='_blank'><i class='far fa-edit' style='font-size:24px;color:black'></i></a> </td>
              <!--
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="JavaScript:if(confirm('Confirm Delete?') == true){window.location='work_delete.php?wrid=49';}" ><i class='fa fa-window-close' style='font-size:24px;color:black'></i></a> </td>
              -->
          </tbody>

          
          <tbody> 
            <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">34 </td>
              <td class="text-center" style="vertical-align:middle;">1/2565 </td>
              <td class="text-center" style="vertical-align:middle;">ซ้อมกิจกรรมน้องหล้าคำแพงและเฟรชชี่ </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">6 </td>
              <td class="text-center" style="vertical-align:middle;">9 กรกฎาคม 2565 </td>
              <td class="text-center " style="vertical-align:middle;"> 
              <a href="add_std_work.php?wr_id=NTA=" target='_blank'><i class='far fa-edit' style='font-size:24px;color:black'></i></a> </td>
              <!--
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="JavaScript:if(confirm('Confirm Delete?') == true){window.location='work_delete.php?wrid=50';}" ><i class='fa fa-window-close' style='font-size:24px;color:black'></i></a> </td>
              -->
          </tbody>

          
          <tbody> 
            <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">35 </td>
              <td class="text-center" style="vertical-align:middle;">1/2565 </td>
              <td class="text-center" style="vertical-align:middle;">กิจกรรมสานสัมพันธ์ฉันท์พี่น้อง ปีการศึกษา 2565 </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">10 </td>
              <td class="text-center" style="vertical-align:middle;">7 สิงหาคม 2565 </td>
              <td class="text-center " style="vertical-align:middle;"> 
              <a href="add_std_work.php?wr_id=NTE=" target='_blank'><i class='far fa-edit' style='font-size:24px;color:black'></i></a> </td>
              <!--
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="JavaScript:if(confirm('Confirm Delete?') == true){window.location='work_delete.php?wrid=51';}" ><i class='fa fa-window-close' style='font-size:24px;color:black'></i></a> </td>
              -->
          </tbody>

          
          <tbody> 
            <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">36 </td>
              <td class="text-center" style="vertical-align:middle;">1/2565 </td>
              <td class="text-center" style="vertical-align:middle;">ซ้อมกิจกรรมน้องหล้าคำแพงและเฟรชชี่ </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">6 </td>
              <td class="text-center" style="vertical-align:middle;">10 สิงหาคม 2565 </td>
              <td class="text-center " style="vertical-align:middle;"> 
              <a href="add_std_work.php?wr_id=NTM=" target='_blank'><i class='far fa-edit' style='font-size:24px;color:black'></i></a> </td>
              <!--
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="JavaScript:if(confirm('Confirm Delete?') == true){window.location='work_delete.php?wrid=53';}" ><i class='fa fa-window-close' style='font-size:24px;color:black'></i></a> </td>
              -->
          </tbody>

          
          <tbody> 
            <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">37 </td>
              <td class="text-center" style="vertical-align:middle;">1/2565 </td>
              <td class="text-center" style="vertical-align:middle;">ซ้อมกิจกรรมน้องหล้าคำแพงและเฟรชชี่ </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">4 </td>
              <td class="text-center" style="vertical-align:middle;">11 สิงหาคม 2565 </td>
              <td class="text-center " style="vertical-align:middle;"> 
              <a href="add_std_work.php?wr_id=NTQ=" target='_blank'><i class='far fa-edit' style='font-size:24px;color:black'></i></a> </td>
              <!--
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="JavaScript:if(confirm('Confirm Delete?') == true){window.location='work_delete.php?wrid=54';}" ><i class='fa fa-window-close' style='font-size:24px;color:black'></i></a> </td>
              -->
          </tbody>

          
          <tbody> 
            <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">38 </td>
              <td class="text-center" style="vertical-align:middle;">1/2565 </td>
              <td class="text-center" style="vertical-align:middle;">ซ้อมกิจกรรมน้องหล้าคำแพงและเฟรชชี่ </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">6 </td>
              <td class="text-center" style="vertical-align:middle;">12 สิงหาคม 2565 (08.00 - 18.00)  </td>
              <td class="text-center " style="vertical-align:middle;"> 
              <a href="add_std_work.php?wr_id=NTU=" target='_blank'><i class='far fa-edit' style='font-size:24px;color:black'></i></a> </td>
              <!--
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="JavaScript:if(confirm('Confirm Delete?') == true){window.location='work_delete.php?wrid=55';}" ><i class='fa fa-window-close' style='font-size:24px;color:black'></i></a> </td>
              -->
          </tbody>

          
          <tbody> 
            <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">39 </td>
              <td class="text-center" style="vertical-align:middle;">1/2565 </td>
              <td class="text-center" style="vertical-align:middle;">ซ้อมกิจกรรมน้องหล้าคำแพงและเฟรชชี่ </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">10 </td>
              <td class="text-center" style="vertical-align:middle;">12 สิงหาคม 2565 (มาตอน 10.00 - 21.00) </td>
              <td class="text-center " style="vertical-align:middle;"> 
              <a href="add_std_work.php?wr_id=NTY=" target='_blank'><i class='far fa-edit' style='font-size:24px;color:black'></i></a> </td>
              <!--
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="JavaScript:if(confirm('Confirm Delete?') == true){window.location='work_delete.php?wrid=56';}" ><i class='fa fa-window-close' style='font-size:24px;color:black'></i></a> </td>
              -->
          </tbody>

          
          <tbody> 
            <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">40 </td>
              <td class="text-center" style="vertical-align:middle;">1/2565 </td>
              <td class="text-center" style="vertical-align:middle;">ซ้อมกิจกรรมน้องหล้าคำแพงและเฟรชชี่ </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">9 </td>
              <td class="text-center" style="vertical-align:middle;">12 สิงหาคม 2565 (มาตอน 15.00 - 21.00) </td>
              <td class="text-center " style="vertical-align:middle;"> 
              <a href="add_std_work.php?wr_id=NTc=" target='_blank'><i class='far fa-edit' style='font-size:24px;color:black'></i></a> </td>
              <!--
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="JavaScript:if(confirm('Confirm Delete?') == true){window.location='work_delete.php?wrid=57';}" ><i class='fa fa-window-close' style='font-size:24px;color:black'></i></a> </td>
              -->
          </tbody>

          
          <tbody> 
            <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">41 </td>
              <td class="text-center" style="vertical-align:middle;">1/2565 </td>
              <td class="text-center" style="vertical-align:middle;">ซ้อมกิจกรรมน้องหล้าคำแพงและเฟรชชี่ </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">10 </td>
              <td class="text-center" style="vertical-align:middle;">13 สิงหาคม 2565 </td>
              <td class="text-center " style="vertical-align:middle;"> 
              <a href="add_std_work.php?wr_id=NTg=" target='_blank'><i class='far fa-edit' style='font-size:24px;color:black'></i></a> </td>
              <!--
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="JavaScript:if(confirm('Confirm Delete?') == true){window.location='work_delete.php?wrid=58';}" ><i class='fa fa-window-close' style='font-size:24px;color:black'></i></a> </td>
              -->
          </tbody>

          
          <tbody> 
            <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">42 </td>
              <td class="text-center" style="vertical-align:middle;">1/2565 </td>
              <td class="text-center" style="vertical-align:middle;">ซ้อมกิจกรรมน้องหล้าคำแพงและเฟรชชี่ </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">8 </td>
              <td class="text-center" style="vertical-align:middle;">14 สิงหาคม 2565 
 </td>
              <td class="text-center " style="vertical-align:middle;"> 
              <a href="add_std_work.php?wr_id=NTk=" target='_blank'><i class='far fa-edit' style='font-size:24px;color:black'></i></a> </td>
              <!--
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="JavaScript:if(confirm('Confirm Delete?') == true){window.location='work_delete.php?wrid=59';}" ><i class='fa fa-window-close' style='font-size:24px;color:black'></i></a> </td>
              -->
          </tbody>

          
          <tbody> 
            <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">43 </td>
              <td class="text-center" style="vertical-align:middle;">1/2565 </td>
              <td class="text-center" style="vertical-align:middle;">ซ้อมกิจกรรมน้องหล้าเฟรชชี่ </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุ </td>
              <td class="text-center" style="vertical-align:middle;">6 </td>
              <td class="text-center" style="vertical-align:middle;">15 สิงหาคม 2565 </td>
              <td class="text-center " style="vertical-align:middle;"> 
              <a href="add_std_work.php?wr_id=NjA=" target='_blank'><i class='far fa-edit' style='font-size:24px;color:black'></i></a> </td>
              <!--
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="JavaScript:if(confirm('Confirm Delete?') == true){window.location='work_delete.php?wrid=60';}" ><i class='fa fa-window-close' style='font-size:24px;color:black'></i></a> </td>
              -->
          </tbody>

          
          <tbody> 
            <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">44 </td>
              <td class="text-center" style="vertical-align:middle;">1/2565 </td>
              <td class="text-center" style="vertical-align:middle;">ซ้อมกิจกรรมน้องหล้าคำแพงและเฟรชชี่ </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">6 </td>
              <td class="text-center" style="vertical-align:middle;">16 สิงหาคม 2565 </td>
              <td class="text-center " style="vertical-align:middle;"> 
              <a href="add_std_work.php?wr_id=NjE=" target='_blank'><i class='far fa-edit' style='font-size:24px;color:black'></i></a> </td>
              <!--
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="JavaScript:if(confirm('Confirm Delete?') == true){window.location='work_delete.php?wrid=61';}" ><i class='fa fa-window-close' style='font-size:24px;color:black'></i></a> </td>
              -->
          </tbody>

          
          <tbody> 
            <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">45 </td>
              <td class="text-center" style="vertical-align:middle;">1/2565 </td>
              <td class="text-center" style="vertical-align:middle;">ซ้อมกิจกรรมน้องหล้าคำแพงและเฟรชชี่ </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">6 </td>
              <td class="text-center" style="vertical-align:middle;">17 สิงหาคม 2565
 </td>
              <td class="text-center " style="vertical-align:middle;"> 
              <a href="add_std_work.php?wr_id=NjI=" target='_blank'><i class='far fa-edit' style='font-size:24px;color:black'></i></a> </td>
              <!--
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="JavaScript:if(confirm('Confirm Delete?') == true){window.location='work_delete.php?wrid=62';}" ><i class='fa fa-window-close' style='font-size:24px;color:black'></i></a> </td>
              -->
          </tbody>

          
          <tbody> 
            <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">46 </td>
              <td class="text-center" style="vertical-align:middle;">1/2565 </td>
              <td class="text-center" style="vertical-align:middle;">ซ้อมกิจกรรมน้องหล้าคำแพงและเฟรชชี่ </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">6 </td>
              <td class="text-center" style="vertical-align:middle;">18 สิงหาคม 2565 </td>
              <td class="text-center " style="vertical-align:middle;"> 
              <a href="add_std_work.php?wr_id=NjM=" target='_blank'><i class='far fa-edit' style='font-size:24px;color:black'></i></a> </td>
              <!--
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="JavaScript:if(confirm('Confirm Delete?') == true){window.location='work_delete.php?wrid=63';}" ><i class='fa fa-window-close' style='font-size:24px;color:black'></i></a> </td>
              -->
          </tbody>

          
          <tbody> 
            <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">47 </td>
              <td class="text-center" style="vertical-align:middle;">1/2565 </td>
              <td class="text-center" style="vertical-align:middle;">ซ้อมกิจกรรมน้องหล้าเฟรชชี่ </td>
              <td class="text-center" style="vertical-align:middle;">ครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">6 </td>
              <td class="text-center" style="vertical-align:middle;">19 สิงหาคม 2565 </td>
              <td class="text-center " style="vertical-align:middle;"> 
              <a href="add_std_work.php?wr_id=NjQ=" target='_blank'><i class='far fa-edit' style='font-size:24px;color:black'></i></a> </td>
              <!--
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="JavaScript:if(confirm('Confirm Delete?') == true){window.location='work_delete.php?wrid=64';}" ><i class='fa fa-window-close' style='font-size:24px;color:black'></i></a> </td>
              -->
          </tbody>

          
          </table>

            <div class="col-md-12">
              <div class="form-group text-center">
                <a href="professor_form.php" class="btn btn-danger" >Back</a>
              </div>
            </div> 
            
          </div>
          
        </div>
        </div>

    </div>
  </div>
</div>

</body>
</html>
