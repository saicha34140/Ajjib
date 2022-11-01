
      
              
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

    <script language="JavaScript">
      function fncOpenPopup()
      {
        window.open('popup2.html','popup-name','width=700,height=500,toolbar=0, menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');
      }
    </script>

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
        <h5 class="card-header">ข้อมูลการช่วยงานนักศึกษา</h5>
        <div class="card-body">
             <form action="report_work.php" method="post" name="form_search" >
              <div class="form-group">
                  <div class="col-auto">
                    <div class="input-group ">
                          <input type="text" class="form-control" name="keyword" placeholder="รหัสประจำตัวนักศึกษา/ชื่อ-นามสกุล/คณะ/สาขาวิชา" >
                          <div class="input-group-append">
                            <button type="submit" class="btn btn-success" type="button">ค้นหา</button>
                          </div>
                    </div>                     
                </div>
              </div>
            </form>
           
          <div class="table-responsive">
          <table class="table table-borderless table-condensed" >
    
          <thead class="bg-success">
            <tr class="text-center" width="100%">
              <th width="5%" style="vertical-align:middle;">ลำดับ</th>
              <th width="15%" style="vertical-align:middle;">รหัสประจำตัวนักศึกษา</th>
              <th width="20%" style="vertical-align:middle;">ชื่อ-นามสกุล</th>
              <th width="20%" style="vertical-align:middle;">คณะ</th>
              <th width="30%" style="vertical-align:middle;">สาขาวิชา</th>
              <th width="5%" style="vertical-align:middle;">View</th>
            </tr>
          </thead>

          
        <tbody> 
          <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">1 </td>
              <td class="text-center" style="vertical-align:middle;">62121130201 </td>   
              <td class="text-center" style="vertical-align:middle;">คณิศร เกษอินทร์ </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=1331" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=1331' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=1331','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">2 </td>
              <td class="text-center" style="vertical-align:middle;">62121130204 </td>   
              <td class="text-center" style="vertical-align:middle;">ชูชัย จาระงับ </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=1339" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=1339' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=1339','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">3 </td>
              <td class="text-center" style="vertical-align:middle;">62121130207 </td>   
              <td class="text-center" style="vertical-align:middle;">ธีรภัทร โทนุการ </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=1332" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=1332' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=1332','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">4 </td>
              <td class="text-center" style="vertical-align:middle;">62121130208 </td>   
              <td class="text-center" style="vertical-align:middle;">นิติภูมิ ป้องทอง </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=1333" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=1333' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=1333','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">5 </td>
              <td class="text-center" style="vertical-align:middle;">62121130209 </td>   
              <td class="text-center" style="vertical-align:middle;">นายปฏิกร เที่ยงผดุง </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=61" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=61' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=61','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">6 </td>
              <td class="text-center" style="vertical-align:middle;">62121130210 </td>   
              <td class="text-center" style="vertical-align:middle;">พรชัย นาคำมูล </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=1335" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=1335' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=1335','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">7 </td>
              <td class="text-center" style="vertical-align:middle;">62121130211 </td>   
              <td class="text-center" style="vertical-align:middle;">นายภูธเรศ ไชยคุณ </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=589" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=589' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=589','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">8 </td>
              <td class="text-center" style="vertical-align:middle;">62121130213 </td>   
              <td class="text-center" style="vertical-align:middle;">วัชรพล  สุทธิสน </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=1340" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=1340' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=1340','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">9 </td>
              <td class="text-center" style="vertical-align:middle;">62121130214 </td>   
              <td class="text-center" style="vertical-align:middle;">นายศิรกานต์ รอบโลก </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=1342" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=1342' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=1342','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">10 </td>
              <td class="text-center" style="vertical-align:middle;">62121130215 </td>   
              <td class="text-center" style="vertical-align:middle;">นายเศรษฐศักดิ์ นิลเพชร </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=573" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=573' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=573','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">11 </td>
              <td class="text-center" style="vertical-align:middle;">62121130217 </td>   
              <td class="text-center" style="vertical-align:middle;">อัครชัย   วิชิตพันธ์ </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=1330" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=1330' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=1330','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">12 </td>
              <td class="text-center" style="vertical-align:middle;">62121130222 </td>   
              <td class="text-center" style="vertical-align:middle;">ทิพวรรณ ภูแสน </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=1341" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=1341' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=1341','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">13 </td>
              <td class="text-center" style="vertical-align:middle;">62121130224 </td>   
              <td class="text-center" style="vertical-align:middle;">ปณิตา บุญไพโรจน์ </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=1337" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=1337' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=1337','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">14 </td>
              <td class="text-center" style="vertical-align:middle;">62121130227 </td>   
              <td class="text-center" style="vertical-align:middle;">วาสิณี พันธ์โชติ </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=1334" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=1334' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=1334','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">15 </td>
              <td class="text-center" style="vertical-align:middle;">62121130228 </td>   
              <td class="text-center" style="vertical-align:middle;">วิยะดา ไชยวิเศษ </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์  </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=1343" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=1343' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=1343','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">16 </td>
              <td class="text-center" style="vertical-align:middle;">62121130229 </td>   
              <td class="text-center" style="vertical-align:middle;">สันติวิภา ชูแก้ว </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=1338" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=1338' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=1338','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">17 </td>
              <td class="text-center" style="vertical-align:middle;">62121130230 </td>   
              <td class="text-center" style="vertical-align:middle;">สุภาวดี ศรีระดา </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=1336" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=1336' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=1336','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">18 </td>
              <td class="text-center" style="vertical-align:middle;">63121130101 </td>   
              <td class="text-center" style="vertical-align:middle;">นายกฤตยศ หกพันนา </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=871" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=871' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=871','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">19 </td>
              <td class="text-center" style="vertical-align:middle;">63121130102 </td>   
              <td class="text-center" style="vertical-align:middle;">นายกานต์ แก้วพรม </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=885" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=885' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=885','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">20 </td>
              <td class="text-center" style="vertical-align:middle;">63121130103 </td>   
              <td class="text-center" style="vertical-align:middle;">กีรติพงษ์ เสียงเสนาะ </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=898" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=898' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=898','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">21 </td>
              <td class="text-center" style="vertical-align:middle;">63121130104 </td>   
              <td class="text-center" style="vertical-align:middle;">ชยพล ตั้งตระกูล </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=914" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=914' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=914','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">22 </td>
              <td class="text-center" style="vertical-align:middle;">63121130105 </td>   
              <td class="text-center" style="vertical-align:middle;">ณัฐกิตติ์ อุนะพำนัก </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=936" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=936' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=936','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">23 </td>
              <td class="text-center" style="vertical-align:middle;">63121130106 </td>   
              <td class="text-center" style="vertical-align:middle;">ธนชาติ มาสู่ </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=965" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=965' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=965','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">24 </td>
              <td class="text-center" style="vertical-align:middle;">63121130107 </td>   
              <td class="text-center" style="vertical-align:middle;">ธนโชติ ธิษาชัย </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=984" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=984' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=984','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">25 </td>
              <td class="text-center" style="vertical-align:middle;">63121130108 </td>   
              <td class="text-center" style="vertical-align:middle;">ธวัชชัย ฉัตรทัน </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=996" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=996' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=996','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">26 </td>
              <td class="text-center" style="vertical-align:middle;">63121130109 </td>   
              <td class="text-center" style="vertical-align:middle;">นราวิชญ์ ศรีสงค์ </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=1010" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=1010' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=1010','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">27 </td>
              <td class="text-center" style="vertical-align:middle;">63121130110 </td>   
              <td class="text-center" style="vertical-align:middle;">นฤชัย โพธิ์เมือง </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=1021" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=1021' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=1021','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">28 </td>
              <td class="text-center" style="vertical-align:middle;">63121130111 </td>   
              <td class="text-center" style="vertical-align:middle;">ประโภชน์ คะหาญ </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=1036" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=1036' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=1036','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">29 </td>
              <td class="text-center" style="vertical-align:middle;">63121130112 </td>   
              <td class="text-center" style="vertical-align:middle;">พงศ์ปณต กูฎโสม </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=1044" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=1044' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=1044','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">30 </td>
              <td class="text-center" style="vertical-align:middle;">63121130113 </td>   
              <td class="text-center" style="vertical-align:middle;">พงศภัค ยารังษี </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=1096" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=1096' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=1096','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">31 </td>
              <td class="text-center" style="vertical-align:middle;">63121130114 </td>   
              <td class="text-center" style="vertical-align:middle;">พลวิทย์ ถูระวรรณ์ </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=1106" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=1106' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=1106','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">32 </td>
              <td class="text-center" style="vertical-align:middle;">63121130115 </td>   
              <td class="text-center" style="vertical-align:middle;">พันณวัฒน์ นามแดง </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=1125" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=1125' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=1125','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">33 </td>
              <td class="text-center" style="vertical-align:middle;">63121130116 </td>   
              <td class="text-center" style="vertical-align:middle;"> </td>
              <td class="text-center" style="vertical-align:middle;"> </td>
              <td class="text-center" style="vertical-align:middle;"></td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">34 </td>
              <td class="text-center" style="vertical-align:middle;">63121130116 </td>   
              <td class="text-center" style="vertical-align:middle;">ภิรมยพร สุริพล </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=1144" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=1144' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=1144','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">35 </td>
              <td class="text-center" style="vertical-align:middle;">63121130117 </td>   
              <td class="text-center" style="vertical-align:middle;">ภูวดล สุดเต้ </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=1156" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=1156' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=1156','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">36 </td>
              <td class="text-center" style="vertical-align:middle;">63121130118 </td>   
              <td class="text-center" style="vertical-align:middle;">วชิรชัย จำศรี </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=1166" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=1166' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=1166','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">37 </td>
              <td class="text-center" style="vertical-align:middle;">63121130119 </td>   
              <td class="text-center" style="vertical-align:middle;">วิพัฒน์พงษ์ บุญสืบ </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=1177" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=1177' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=1177','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">38 </td>
              <td class="text-center" style="vertical-align:middle;">63121130120 </td>   
              <td class="text-center" style="vertical-align:middle;">สิทธิชัย แก้วสง่า </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=1045" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=1045' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=1045','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">39 </td>
              <td class="text-center" style="vertical-align:middle;">63121130121 </td>   
              <td class="text-center" style="vertical-align:middle;">ณิชาภัทร จำเริญ </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=1064" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=1064' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=1064','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">40 </td>
              <td class="text-center" style="vertical-align:middle;">63121130122 </td>   
              <td class="text-center" style="vertical-align:middle;">นันทิดา แสงใส </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=1074" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=1074' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=1074','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">41 </td>
              <td class="text-center" style="vertical-align:middle;">63121130123 </td>   
              <td class="text-center" style="vertical-align:middle;">บุญธิญา กาญจนเสน </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=1094" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=1094' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=1094','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">42 </td>
              <td class="text-center" style="vertical-align:middle;">63121130124 </td>   
              <td class="text-center" style="vertical-align:middle;">บุษรินทร์ วังศรีวิวัฒน์ </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=1104" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=1104' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=1104','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">43 </td>
              <td class="text-center" style="vertical-align:middle;">63121130125 </td>   
              <td class="text-center" style="vertical-align:middle;">พัชรินทร์  อะโน </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=1120" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=1120' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=1120','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">44 </td>
              <td class="text-center" style="vertical-align:middle;">63121130126 </td>   
              <td class="text-center" style="vertical-align:middle;">ศศิกานต์ แร่ทอง </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=1132" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=1132' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=1132','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">45 </td>
              <td class="text-center" style="vertical-align:middle;">63121130127 </td>   
              <td class="text-center" style="vertical-align:middle;">สรัลนุช อัมโภชน์ </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=1147" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=1147' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=1147','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">46 </td>
              <td class="text-center" style="vertical-align:middle;">63121130128 </td>   
              <td class="text-center" style="vertical-align:middle;">สุธิดา มาลัย </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=1158" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=1158' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=1158','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">47 </td>
              <td class="text-center" style="vertical-align:middle;">63121130129 </td>   
              <td class="text-center" style="vertical-align:middle;">สุพรรษา มุสิกสาร </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=1172" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=1172' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=1172','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">48 </td>
              <td class="text-center" style="vertical-align:middle;">63121130130 </td>   
              <td class="text-center" style="vertical-align:middle;">เอกวิทย์ รัตนจันทร์ </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=1183" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=1183' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=1183','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">49 </td>
              <td class="text-center" style="vertical-align:middle;">63121130131 </td>   
              <td class="text-center" style="vertical-align:middle;">สรณา ชารีสมบัติ </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=1193" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=1193' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=1193','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">50 </td>
              <td class="text-center" style="vertical-align:middle;">63121130132 </td>   
              <td class="text-center" style="vertical-align:middle;">ณรงค์พล สุขแสวง </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=1202" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=1202' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=1202','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">51 </td>
              <td class="text-center" style="vertical-align:middle;">63121130133 </td>   
              <td class="text-center" style="vertical-align:middle;">ปวีณา โยธา </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=1210" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=1210' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=1210','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">52 </td>
              <td class="text-center" style="vertical-align:middle;">63121130201 </td>   
              <td class="text-center" style="vertical-align:middle;">กฤตษกร วัฒนศัพท์ </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=824" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=824' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=824','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">53 </td>
              <td class="text-center" style="vertical-align:middle;">63121130202 </td>   
              <td class="text-center" style="vertical-align:middle;">กษิติ ศรีวะกุล </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=853" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=853' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=853','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">54 </td>
              <td class="text-center" style="vertical-align:middle;">63121130203 </td>   
              <td class="text-center" style="vertical-align:middle;">เกรียงไกร มิ่งมูล </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=864" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=864' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=864','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">55 </td>
              <td class="text-center" style="vertical-align:middle;">63121130204 </td>   
              <td class="text-center" style="vertical-align:middle;">จิณัฐติกรณ์  ดาเหลาธิพัทธ์ </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=887" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=887' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=887','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">56 </td>
              <td class="text-center" style="vertical-align:middle;">63121130205 </td>   
              <td class="text-center" style="vertical-align:middle;">ชรันณ์ ยีรัมย์ </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=902" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=902' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=902','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">57 </td>
              <td class="text-center" style="vertical-align:middle;">63121130206 </td>   
              <td class="text-center" style="vertical-align:middle;">นายณภัทร สามารถ </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=918" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=918' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=918','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">58 </td>
              <td class="text-center" style="vertical-align:middle;">63121130207 </td>   
              <td class="text-center" style="vertical-align:middle;">นัฐนันท์  ถิ่นขาม </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=927" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=927' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=927','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">59 </td>
              <td class="text-center" style="vertical-align:middle;">63121130208 </td>   
              <td class="text-center" style="vertical-align:middle;">ดำรงศักดิ์  คำพะทา </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=943" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=943' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=943','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">60 </td>
              <td class="text-center" style="vertical-align:middle;">63121130209 </td>   
              <td class="text-center" style="vertical-align:middle;">ธนัชชัย หารบำราช </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=963" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=963' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=963','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">61 </td>
              <td class="text-center" style="vertical-align:middle;">63121130211 </td>   
              <td class="text-center" style="vertical-align:middle;">ปรัชญา แก่แสง </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=832" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=832' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=832','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">62 </td>
              <td class="text-center" style="vertical-align:middle;">63121130212 </td>   
              <td class="text-center" style="vertical-align:middle;">นายเปรมศักดิ์ วิลาวัลย์ </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=863" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=863' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=863','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">63 </td>
              <td class="text-center" style="vertical-align:middle;">63121130213 </td>   
              <td class="text-center" style="vertical-align:middle;">พชรพงศ์ ศรีวรรณะ </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=886" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=886' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=886','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">64 </td>
              <td class="text-center" style="vertical-align:middle;">63121130214 </td>   
              <td class="text-center" style="vertical-align:middle;">พันธนันท์ ท้ายปาก </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=908" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=908' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=908','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">65 </td>
              <td class="text-center" style="vertical-align:middle;">63121130216 </td>   
              <td class="text-center" style="vertical-align:middle;">วัชรกร กูลเกื้อ </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=938" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=938' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=938','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">66 </td>
              <td class="text-center" style="vertical-align:middle;">63121130217 </td>   
              <td class="text-center" style="vertical-align:middle;">วิชชากร ไชยช่วย </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=959" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=959' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=959','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">67 </td>
              <td class="text-center" style="vertical-align:middle;">63121130218 </td>   
              <td class="text-center" style="vertical-align:middle;">วิศรุต แสงบุญ </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=980" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=980' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=980','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">68 </td>
              <td class="text-center" style="vertical-align:middle;">63121130219 </td>   
              <td class="text-center" style="vertical-align:middle;">ศุภกร มีแก้ว </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=994" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=994' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=994','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">69 </td>
              <td class="text-center" style="vertical-align:middle;">63121130220 </td>   
              <td class="text-center" style="vertical-align:middle;">เอกนรินทร์ นันตะบุตร </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=1014" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=1014' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=1014','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">70 </td>
              <td class="text-center" style="vertical-align:middle;">63121130222 </td>   
              <td class="text-center" style="vertical-align:middle;">ธีราพร  ก่ำดำ </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=1005" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=1005' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=1005','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">71 </td>
              <td class="text-center" style="vertical-align:middle;">63121130223 </td>   
              <td class="text-center" style="vertical-align:middle;">พันทิยา สิงขรรค์ </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=1015" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=1015' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=1015','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">72 </td>
              <td class="text-center" style="vertical-align:middle;">63121130224 </td>   
              <td class="text-center" style="vertical-align:middle;">เพ็ญพิสุทธิ์ ทะบุระกรณ์ </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=1031" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=1031' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=1031','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">73 </td>
              <td class="text-center" style="vertical-align:middle;">63121130225 </td>   
              <td class="text-center" style="vertical-align:middle;">รุจเรข จันทไชย </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=1039" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=1039' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=1039','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">74 </td>
              <td class="text-center" style="vertical-align:middle;">63121130226 </td>   
              <td class="text-center" style="vertical-align:middle;">รุจิรัตน์ ศักดิ์เสริมสุข </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=1059" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=1059' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=1059','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">75 </td>
              <td class="text-center" style="vertical-align:middle;">63121130227 </td>   
              <td class="text-center" style="vertical-align:middle;">วรนุช นาจาน </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=1066" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=1066' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=1066','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">76 </td>
              <td class="text-center" style="vertical-align:middle;">63121130228 </td>   
              <td class="text-center" style="vertical-align:middle;">สุธาสิณี พุทธกุล </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=1085" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=1085' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=1085','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">77 </td>
              <td class="text-center" style="vertical-align:middle;">63121130229 </td>   
              <td class="text-center" style="vertical-align:middle;">อมรรัตน์   บุญช่วย </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=1098" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=1098' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=1098','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">78 </td>
              <td class="text-center" style="vertical-align:middle;">63121130230 </td>   
              <td class="text-center" style="vertical-align:middle;">อารียา  นิยมชาติ </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=1107" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=1107' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=1107','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">79 </td>
              <td class="text-center" style="vertical-align:middle;">63121130231 </td>   
              <td class="text-center" style="vertical-align:middle;">สุภาพร ประดับสุข </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=1171" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=1171' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=1171','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">80 </td>
              <td class="text-center" style="vertical-align:middle;">63121130232 </td>   
              <td class="text-center" style="vertical-align:middle;">สุมารินทร์ สารินา </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=1181" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=1181' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=1181','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">81 </td>
              <td class="text-center" style="vertical-align:middle;">63121130233 </td>   
              <td class="text-center" style="vertical-align:middle;">อภิญญา  จั่นกลาง </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์ </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=1188" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=1188' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=1188','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">82 </td>
              <td class="text-center" style="vertical-align:middle;">64121130101 </td>   
              <td class="text-center" style="vertical-align:middle;">เกรียงไกร มณีเขียว </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์  </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=1626" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=1626' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=1626','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">83 </td>
              <td class="text-center" style="vertical-align:middle;">64121130102 </td>   
              <td class="text-center" style="vertical-align:middle;">ฉัตรมงคล แสนทวีสุข </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์  </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=1630" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=1630' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=1630','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">84 </td>
              <td class="text-center" style="vertical-align:middle;">64121130103 </td>   
              <td class="text-center" style="vertical-align:middle;">เชิดชัย แก้วสิงห์ </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์  </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=1637" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=1637' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=1637','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">85 </td>
              <td class="text-center" style="vertical-align:middle;">64121130104 </td>   
              <td class="text-center" style="vertical-align:middle;">ฑีฆพล ไพยะเสน </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์  </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=1647" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=1647' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=1647','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">86 </td>
              <td class="text-center" style="vertical-align:middle;">64121130105 </td>   
              <td class="text-center" style="vertical-align:middle;">ดนุพงศ์ ฐิติธนานนท์ </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์  </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=1658" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=1658' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=1658','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">87 </td>
              <td class="text-center" style="vertical-align:middle;">64121130108 </td>   
              <td class="text-center" style="vertical-align:middle;">ปิยวัฒน์ ดวงศรี </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์  </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=1687" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=1687' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=1687','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">88 </td>
              <td class="text-center" style="vertical-align:middle;">64121130109 </td>   
              <td class="text-center" style="vertical-align:middle;">พงษ์ระพี ศาสตร์ปรีชาชาญ </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์  </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=1704" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=1704' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=1704','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">89 </td>
              <td class="text-center" style="vertical-align:middle;">64121130110 </td>   
              <td class="text-center" style="vertical-align:middle;">พนมพร พวงพั่ว </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์  </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=1713" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=1713' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=1713','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">90 </td>
              <td class="text-center" style="vertical-align:middle;">64121130112 </td>   
              <td class="text-center" style="vertical-align:middle;">แสงตะวัน วงศ์ศิริ </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์  </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=1750" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=1750' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=1750','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">91 </td>
              <td class="text-center" style="vertical-align:middle;">64121130113 </td>   
              <td class="text-center" style="vertical-align:middle;">อนามัย โทพิลา </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์  </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=1761" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=1761' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=1761','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">92 </td>
              <td class="text-center" style="vertical-align:middle;">64121130114 </td>   
              <td class="text-center" style="vertical-align:middle;">กัญญารัตน์ เพ็งแจ่ม </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์  </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=1772" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=1772' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=1772','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">93 </td>
              <td class="text-center" style="vertical-align:middle;">64121130115 </td>   
              <td class="text-center" style="vertical-align:middle;">กัณฐิกา เคนแสนโคตร์ </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์  </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=1784" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=1784' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=1784','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">94 </td>
              <td class="text-center" style="vertical-align:middle;">64121130116 </td>   
              <td class="text-center" style="vertical-align:middle;">จินต์จุฑา ทาสี </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์  </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=1797" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=1797' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=1797','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">95 </td>
              <td class="text-center" style="vertical-align:middle;">64121130117 </td>   
              <td class="text-center" style="vertical-align:middle;">ทิพวรรณ สุกัน </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์  </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=2089" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=2089' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=2089','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">96 </td>
              <td class="text-center" style="vertical-align:middle;">64121130119 </td>   
              <td class="text-center" style="vertical-align:middle;">ธิดารัตน์ อดใจ </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์  </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=1837" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=1837' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=1837','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">97 </td>
              <td class="text-center" style="vertical-align:middle;">64121130124 </td>   
              <td class="text-center" style="vertical-align:middle;">ศิรภัสสร คำอินทร์ </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์  </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=1771" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=1771' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=1771','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">98 </td>
              <td class="text-center" style="vertical-align:middle;">64121130127 </td>   
              <td class="text-center" style="vertical-align:middle;">สุภาวดี ลาธุลี </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์  </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=1875" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=1875' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=1875','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">99 </td>
              <td class="text-center" style="vertical-align:middle;">64121130128 </td>   
              <td class="text-center" style="vertical-align:middle;">อรอุมา คุณประเสริฐ </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์  </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=1884" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=1884' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=1884','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">100 </td>
              <td class="text-center" style="vertical-align:middle;">64121130129 </td>   
              <td class="text-center" style="vertical-align:middle;">อุรัสยา บัวใหญ่ </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์  </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=1892" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=1892' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=1892','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">101 </td>
              <td class="text-center" style="vertical-align:middle;">64121130201 </td>   
              <td class="text-center" style="vertical-align:middle;">จักริน จันทะรัตน์ </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์  </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=1915" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=1915' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=1915','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">102 </td>
              <td class="text-center" style="vertical-align:middle;">64121130202 </td>   
              <td class="text-center" style="vertical-align:middle;">จีระศักดิ์ ศรีภักดี </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์  </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=1929" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=1929' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=1929','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">103 </td>
              <td class="text-center" style="vertical-align:middle;">64121130203 </td>   
              <td class="text-center" style="vertical-align:middle;">เจริญชัย สายแวว </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์  </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=1937" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=1937' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=1937','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">104 </td>
              <td class="text-center" style="vertical-align:middle;">64121130204 </td>   
              <td class="text-center" style="vertical-align:middle;">เจษฎา จันทร์ที </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์  </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=1946" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=1946' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=1946','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">105 </td>
              <td class="text-center" style="vertical-align:middle;">64121130205 </td>   
              <td class="text-center" style="vertical-align:middle;">ณฐพร รักษ์แก่นทน </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์  </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=1955" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=1955' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=1955','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">106 </td>
              <td class="text-center" style="vertical-align:middle;">64121130206 </td>   
              <td class="text-center" style="vertical-align:middle;">ธรรณธร จำปาหอม </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์  </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=1969" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=1969' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=1969','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">107 </td>
              <td class="text-center" style="vertical-align:middle;">64121130207 </td>   
              <td class="text-center" style="vertical-align:middle;">ปริญญา พิมพกรรณ์ </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์  </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=1972" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=1972' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=1972','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">108 </td>
              <td class="text-center" style="vertical-align:middle;">64121130208 </td>   
              <td class="text-center" style="vertical-align:middle;">ปุรชัย สาธร </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์  </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=1959" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=1959' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=1959','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">109 </td>
              <td class="text-center" style="vertical-align:middle;">64121130209 </td>   
              <td class="text-center" style="vertical-align:middle;">พงษ์เชษฐ ชัยแก้ว </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์  </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=1958" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=1958' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=1958','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">110 </td>
              <td class="text-center" style="vertical-align:middle;">64121130210 </td>   
              <td class="text-center" style="vertical-align:middle;">ภานุพงศ์ แสนนาม </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์  </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=1944" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=1944' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=1944','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">111 </td>
              <td class="text-center" style="vertical-align:middle;">64121130211 </td>   
              <td class="text-center" style="vertical-align:middle;">วัชรพงศ์ ดอกกุลบุตร </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์  </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=1940" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=1940' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=1940','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">112 </td>
              <td class="text-center" style="vertical-align:middle;">64121130212 </td>   
              <td class="text-center" style="vertical-align:middle;">ศิวกร มีศิลป์ </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์  </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=1932" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=1932' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=1932','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">113 </td>
              <td class="text-center" style="vertical-align:middle;">64121130213 </td>   
              <td class="text-center" style="vertical-align:middle;">ศิวกร สีหาบุตร </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์  </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=1930" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=1930' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=1930','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">114 </td>
              <td class="text-center" style="vertical-align:middle;">64121130214 </td>   
              <td class="text-center" style="vertical-align:middle;">จันทร์จิรา สุวรรณกูฏ </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์  </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=1920" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=1920' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=1920','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">115 </td>
              <td class="text-center" style="vertical-align:middle;">64121130215 </td>   
              <td class="text-center" style="vertical-align:middle;">ชญาดา วาฤทธิ์ </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์  </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=1907" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=1907' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=1907','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">116 </td>
              <td class="text-center" style="vertical-align:middle;">64121130216 </td>   
              <td class="text-center" style="vertical-align:middle;">ชญานุช ศรีคำ </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์  </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=1903" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=1903' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=1903','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">117 </td>
              <td class="text-center" style="vertical-align:middle;">64121130217 </td>   
              <td class="text-center" style="vertical-align:middle;">ณัฎฐณิชา เล็งสุวรรณ </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์  </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=1891" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=1891' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=1891','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">118 </td>
              <td class="text-center" style="vertical-align:middle;">64121130218 </td>   
              <td class="text-center" style="vertical-align:middle;">ณัฐนิชา วารีพัฒน์ </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์  </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=1888" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=1888' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=1888','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">119 </td>
              <td class="text-center" style="vertical-align:middle;">64121130219 </td>   
              <td class="text-center" style="vertical-align:middle;">ณัฐพร แสงสว่าง </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์  </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=1876" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=1876' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=1876','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">120 </td>
              <td class="text-center" style="vertical-align:middle;">64121130222 </td>   
              <td class="text-center" style="vertical-align:middle;">เบญจมาศ แสงนิล </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์  </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=1853" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=1853' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=1853','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">121 </td>
              <td class="text-center" style="vertical-align:middle;">64121130223 </td>   
              <td class="text-center" style="vertical-align:middle;">เบญจวรรณ แสงนิล </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์  </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=1981" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=1981' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=1981','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">122 </td>
              <td class="text-center" style="vertical-align:middle;">64121130224 </td>   
              <td class="text-center" style="vertical-align:middle;">ปัทมพร อรอินทร์ </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์  </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=1989" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=1989' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=1989','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">123 </td>
              <td class="text-center" style="vertical-align:middle;">64121130225 </td>   
              <td class="text-center" style="vertical-align:middle;">ปัทมวรรณ์ สพสิงห์ </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์  </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=1995" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=1995' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=1995','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">124 </td>
              <td class="text-center" style="vertical-align:middle;">64121130226 </td>   
              <td class="text-center" style="vertical-align:middle;">ปัทมาสน์ ผลพุฒ </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์  </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=1991" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=1991' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=1991','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">125 </td>
              <td class="text-center" style="vertical-align:middle;">64121130227 </td>   
              <td class="text-center" style="vertical-align:middle;">พัชริดา เทพวงศ์ </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์  </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=1990" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=1990' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=1990','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">126 </td>
              <td class="text-center" style="vertical-align:middle;">64121130228 </td>   
              <td class="text-center" style="vertical-align:middle;">ลลิตา ปุยทอง </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์  </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=1984" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=1984' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=1984','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">127 </td>
              <td class="text-center" style="vertical-align:middle;">64121130229 </td>   
              <td class="text-center" style="vertical-align:middle;">สุปรียา แก้วพรม </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์  </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=1982" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=1982' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=1982','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">128 </td>
              <td class="text-center" style="vertical-align:middle;">65121130101 </td>   
              <td class="text-center" style="vertical-align:middle;">นายณัฐพงษ์ สาวะการ </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์  </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=2435" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=2435' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=2435','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">129 </td>
              <td class="text-center" style="vertical-align:middle;">65121130102 </td>   
              <td class="text-center" style="vertical-align:middle;">Tanakorn puangin </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์  </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=2429" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=2429' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=2429','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">130 </td>
              <td class="text-center" style="vertical-align:middle;">65121130103 </td>   
              <td class="text-center" style="vertical-align:middle;">นัชพล สุภาจันทร์ </td>
              <td class="text-center" style="vertical-align:middle;"> </td>
              <td class="text-center" style="vertical-align:middle;"></td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=2466" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=2466' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=2466','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">131 </td>
              <td class="text-center" style="vertical-align:middle;">65121130104 </td>   
              <td class="text-center" style="vertical-align:middle;">ปรานรพี </td>
              <td class="text-center" style="vertical-align:middle;"> </td>
              <td class="text-center" style="vertical-align:middle;"></td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=2454" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=2454' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=2454','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">132 </td>
              <td class="text-center" style="vertical-align:middle;">65121130105 </td>   
              <td class="text-center" style="vertical-align:middle;">ปริญญา ทองคู่ </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์  </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=2442" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=2442' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=2442','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">133 </td>
              <td class="text-center" style="vertical-align:middle;">65121130106 </td>   
              <td class="text-center" style="vertical-align:middle;">นายมงคลสวัสดิ์ เต็นตารัมย์ </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์  </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=2428" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=2428' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=2428','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">134 </td>
              <td class="text-center" style="vertical-align:middle;">65121130107 </td>   
              <td class="text-center" style="vertical-align:middle;">รุ่งเกียรติ </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์  </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=2468" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=2468' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=2468','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">135 </td>
              <td class="text-center" style="vertical-align:middle;">65121130108 </td>   
              <td class="text-center" style="vertical-align:middle;">นายวิวัฒน์ชัย สมมาศ </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์  </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=2431" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=2431' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=2431','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">136 </td>
              <td class="text-center" style="vertical-align:middle;">65121130109 </td>   
              <td class="text-center" style="vertical-align:middle;">นายศตรรฆ อ่ำศรี </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์  </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=2443" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=2443' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=2443','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">137 </td>
              <td class="text-center" style="vertical-align:middle;">65121130110 </td>   
              <td class="text-center" style="vertical-align:middle;">ศิวกร ปัสนา </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์  </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=2465" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=2465' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=2465','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">138 </td>
              <td class="text-center" style="vertical-align:middle;">65121130112 </td>   
              <td class="text-center" style="vertical-align:middle;">ชุติพันธ์ ชัยแก้ว </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์  </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=2437" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=2437' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=2437','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">139 </td>
              <td class="text-center" style="vertical-align:middle;">65121130113 </td>   
              <td class="text-center" style="vertical-align:middle;">นางสาวณภัทร บุญมาทน </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์  </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=2434" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=2434' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=2434','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">140 </td>
              <td class="text-center" style="vertical-align:middle;">65121130114 </td>   
              <td class="text-center" style="vertical-align:middle;">ณัฎฐธิชา แท่นทอง </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์  </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=2439" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=2439' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=2439','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">141 </td>
              <td class="text-center" style="vertical-align:middle;">65121130115 </td>   
              <td class="text-center" style="vertical-align:middle;">นางสาว นันธิชา แสงทอง </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์  </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=2441" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=2441' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=2441','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">142 </td>
              <td class="text-center" style="vertical-align:middle;">65121130118 </td>   
              <td class="text-center" style="vertical-align:middle;">พิมพ์อุษา ชุมชัย </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์  </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=2461" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=2461' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=2461','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">143 </td>
              <td class="text-center" style="vertical-align:middle;">65121130119 </td>   
              <td class="text-center" style="vertical-align:middle;">พิลาวัลย์ ประกายแก้ว </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์  </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=2459" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=2459' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=2459','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">144 </td>
              <td class="text-center" style="vertical-align:middle;">65121130120 </td>   
              <td class="text-center" style="vertical-align:middle;">ภัศรา แสนสุข </td>
              <td class="text-center" style="vertical-align:middle;"> </td>
              <td class="text-center" style="vertical-align:middle;"></td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=2457" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=2457' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=2457','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">145 </td>
              <td class="text-center" style="vertical-align:middle;">65121130121 </td>   
              <td class="text-center" style="vertical-align:middle;">นางสาวรัชฎาภา การรัมย์ </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์  </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=2425" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=2425' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=2425','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">146 </td>
              <td class="text-center" style="vertical-align:middle;">65121130122 </td>   
              <td class="text-center" style="vertical-align:middle;">วาสนา หลุมทอง </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์  </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=2446" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=2446' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=2446','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">147 </td>
              <td class="text-center" style="vertical-align:middle;">65121130123 </td>   
              <td class="text-center" style="vertical-align:middle;">ศิรดา สารจิตต์ </td>
              <td class="text-center" style="vertical-align:middle;"> </td>
              <td class="text-center" style="vertical-align:middle;"></td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=2467" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=2467' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=2467','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">148 </td>
              <td class="text-center" style="vertical-align:middle;">65121130124 </td>   
              <td class="text-center" style="vertical-align:middle;">นางสาวสุวนันท์ ขันทอง </td>
              <td class="text-center" style="vertical-align:middle;"> </td>
              <td class="text-center" style="vertical-align:middle;"></td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=2456" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=2456' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=2456','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">149 </td>
              <td class="text-center" style="vertical-align:middle;">65121130201 </td>   
              <td class="text-center" style="vertical-align:middle;">นายเกริกไกร  กางทอง </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์  </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=2430" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=2430' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=2430','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">150 </td>
              <td class="text-center" style="vertical-align:middle;">65121130202 </td>   
              <td class="text-center" style="vertical-align:middle;">Khongkaphun Modmuang </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์  </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=2444" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=2444' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=2444','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">151 </td>
              <td class="text-center" style="vertical-align:middle;">65121130203 </td>   
              <td class="text-center" style="vertical-align:middle;">นายชนะพล บุตรโท </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์  </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=2440" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=2440' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=2440','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">152 </td>
              <td class="text-center" style="vertical-align:middle;">65121130204 </td>   
              <td class="text-center" style="vertical-align:middle;">นายชัยนันท์ น้ำคำ </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์  </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=2453" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=2453' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=2453','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">153 </td>
              <td class="text-center" style="vertical-align:middle;">65121130205 </td>   
              <td class="text-center" style="vertical-align:middle;">นายชินธร สมวิเศษ </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์  </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=2438" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=2438' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=2438','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">154 </td>
              <td class="text-center" style="vertical-align:middle;">65121130206 </td>   
              <td class="text-center" style="vertical-align:middle;">เชาวภูมิ โสมสุด </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์  </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=2455" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=2455' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=2455','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">155 </td>
              <td class="text-center" style="vertical-align:middle;">65121130207 </td>   
              <td class="text-center" style="vertical-align:middle;">นายธีรภัทร สุนิพันธ์ </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์  </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=2449" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=2449' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=2449','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">156 </td>
              <td class="text-center" style="vertical-align:middle;">65121130208 </td>   
              <td class="text-center" style="vertical-align:middle;">นาย นราธิป นิตยวัน </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์  </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์และเทคโนโลยีการศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=2426" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=2426' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=2426','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">157 </td>
              <td class="text-center" style="vertical-align:middle;">65121130209 </td>   
              <td class="text-center" style="vertical-align:middle;">Niphitpon ruenroeng </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์  </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=2436" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=2436' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=2436','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">158 </td>
              <td class="text-center" style="vertical-align:middle;">65121130211 </td>   
              <td class="text-center" style="vertical-align:middle;">กนกอร แฝงโกฏิ </td>
              <td class="text-center" style="vertical-align:middle;"> </td>
              <td class="text-center" style="vertical-align:middle;"></td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=2458" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=2458' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=2458','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">159 </td>
              <td class="text-center" style="vertical-align:middle;">65121130212 </td>   
              <td class="text-center" style="vertical-align:middle;"> นางสาวกรรณิกา จันหอม </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์  </td>
              <td class="text-center" style="vertical-align:middle;"></td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=2451" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=2451' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=2451','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">160 </td>
              <td class="text-center" style="vertical-align:middle;">65121130213 </td>   
              <td class="text-center" style="vertical-align:middle;">กิตติมา บุญให้ </td>
              <td class="text-center" style="vertical-align:middle;"> </td>
              <td class="text-center" style="vertical-align:middle;"></td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=2464" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=2464' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=2464','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">161 </td>
              <td class="text-center" style="vertical-align:middle;">65121130214 </td>   
              <td class="text-center" style="vertical-align:middle;">จิราภา ฑีฆายุพรรค </td>
              <td class="text-center" style="vertical-align:middle;"> </td>
              <td class="text-center" style="vertical-align:middle;"></td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=2471" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=2471' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=2471','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">162 </td>
              <td class="text-center" style="vertical-align:middle;">65121130215 </td>   
              <td class="text-center" style="vertical-align:middle;">นางสาวณัฐพร จุฬารมย์ </td>
              <td class="text-center" style="vertical-align:middle;"> </td>
              <td class="text-center" style="vertical-align:middle;"></td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=2424" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=2424' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=2424','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">163 </td>
              <td class="text-center" style="vertical-align:middle;">65121130216 </td>   
              <td class="text-center" style="vertical-align:middle;">นางสาวณิตชารีย์ จารุกขมูล </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์  </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=2433" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=2433' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=2433','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">164 </td>
              <td class="text-center" style="vertical-align:middle;">65121130217 </td>   
              <td class="text-center" style="vertical-align:middle;">ธัญญารัตน์ โพสาราช </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์  </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=2447" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=2447' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=2447','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">165 </td>
              <td class="text-center" style="vertical-align:middle;">65121130218 </td>   
              <td class="text-center" style="vertical-align:middle;">นางสาวนิชานันท์ ส่งเสริม </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์  </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=2445" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=2445' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=2445','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">166 </td>
              <td class="text-center" style="vertical-align:middle;">65121130219 </td>   
              <td class="text-center" style="vertical-align:middle;">นางสาวพิจิตรา ทวีพัฒน์ </td>
              <td class="text-center" style="vertical-align:middle;"> </td>
              <td class="text-center" style="vertical-align:middle;"></td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=2448" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=2448' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=2448','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">167 </td>
              <td class="text-center" style="vertical-align:middle;">65121130220 </td>   
              <td class="text-center" style="vertical-align:middle;">นางสาวพิมพ์นิภัทร เนากูด </td>
              <td class="text-center" style="vertical-align:middle;"> </td>
              <td class="text-center" style="vertical-align:middle;"></td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=2460" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=2460' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=2460','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">168 </td>
              <td class="text-center" style="vertical-align:middle;">65121130221 </td>   
              <td class="text-center" style="vertical-align:middle;">นางสาวศิริลักษณ์ สุวรรณกูฏ </td>
              <td class="text-center" style="vertical-align:middle;"> </td>
              <td class="text-center" style="vertical-align:middle;"></td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=2462" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=2462' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=2462','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">169 </td>
              <td class="text-center" style="vertical-align:middle;">65121130222 </td>   
              <td class="text-center" style="vertical-align:middle;">ศุทธินี บัวจันทร์ </td>
              <td class="text-center" style="vertical-align:middle;"> </td>
              <td class="text-center" style="vertical-align:middle;"></td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=2450" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=2450' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=2450','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">170 </td>
              <td class="text-center" style="vertical-align:middle;">65121130223 </td>   
              <td class="text-center" style="vertical-align:middle;">ศุภรักษ์ อุตรวิเศษ </td>
              <td class="text-center" style="vertical-align:middle;"> </td>
              <td class="text-center" style="vertical-align:middle;"></td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=2452" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=2452' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=2452','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#FFFFFF">
              <td class="text-center" style="vertical-align:middle;">171 </td>
              <td class="text-center" style="vertical-align:middle;">65121130224 </td>   
              <td class="text-center" style="vertical-align:middle;">นางสาวสุพัตรา ต่างสี </td>
              <td class="text-center" style="vertical-align:middle;">คณะครุศาสตร์  </td>
              <td class="text-center" style="vertical-align:middle;">คอมพิวเตอร์ศึกษา</td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=2432" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=2432' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=2432','popup','width=1300,height=700'); return false;">View</a></td>
                  -->
        </tbody>

    
        <tbody> 
          <tr bgcolor="#E8E8E8">
              <td class="text-center" style="vertical-align:middle;">172 </td>
              <td class="text-center" style="vertical-align:middle;">65121130225 </td>   
              <td class="text-center" style="vertical-align:middle;">อภิญญา บุตะเคียน </td>
              <td class="text-center" style="vertical-align:middle;"> </td>
              <td class="text-center" style="vertical-align:middle;"></td>
              <td class="text-center " style="vertical-align:middle;"> 
                  <a href="report_work_std.php?id=2469" target='_blank'><i class=' fas fa-search' style='font-size:24px;color:black'></i></a> </td>
                  <!--
                  <a href='report_time_std.php?id=2469' class="btn btn-danger btn-sm" target="popup" onclick="window.open('report_time_std.php?id=2469','popup','width=1300,height=700'); return false;">View</a></td>
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
