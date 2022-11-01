
      

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
<br>

<div class="container">
  <div class="card text-center font_1">
    <h4 class="card-header">เพิ่มข้อมูลการเก็บชั่วโมงสาขาวิชา</h4>
      <div class="card-body"> 
        <form action="create_work_cmp.php" method="POST" name="form_work"  onsubmit="JavaScript:return checker();">
          <div class="form-group">
            <div class="font_1 ">
              <center>
                <div class="row">
                  <div class="table-responsive">
                    <table class="table table-borderless table-condensed table-hover" style="width: 600px;">
                      <tbody>

                        <tr>
                          <td style="vertical-align:middle;" >
                            <div class="text-right">
                            <h7>ภาคเรียน :</h7>
                            </div>
                          </td>
                          <td colspan="3">
                            <select class="form-control" style="width:120px;" name="work_term">
                                  <option>None</option> 
                                  <option>1/2564</option>
                                  <option>2/2564</option>
                                  <option>3/2564</option>
                                  <option>1/2565</option>
                                  <option>2/2565</option>
                                  <option>3/2565</option>
                                  <option>1/2566</option>
                                  <option>2/2566</option>
                                  <option>3/2566</option>
                            </select>
                          </td>
                        </tr>

                        <tr>
                          <td style="vertical-align:middle;" >
                            <div class="text-right">
                            <h7>หัวข้อ :</h7>
                            </div>
                          </td>
                          <td colspan="3">
                            <input type="text" class="form-control" style="width:350px;" name="work_name" placeholder="หัวข้อ">
                          </td>
                        </tr>

                        <tr>
                          <td style="vertical-align:middle;" >
                            <div class="text-right">
                            <h7>สถานที่ :</h7>
                            </div>
                          </td>
                          <td colspan="3">
                            <input type="text" class="form-control" style="width:300px;" name="work_location" placeholder="Ex : คณะครุศาสตร์">
                          </td>
                        </tr>

                        <tr>
                          <td style="vertical-align:middle;" >
                            <div class="text-right">
                            <h7>จำนวนชั่วโมง :</h7>
                            </div>
                          </td>
                          <td colspan="3">
                            <select class="form-control" style="width:100px;" name="work_hour">
                                  <option>0</option>
                                  <option>1</option>
                                  <option>2</option>
                                  <option>3</option>
                                  <option>4</option>
                                  <option>5</option>
                                  <option>6</option>
                                  <option>7</option>
                                  <option>8</option>
                                  <option>9</option>
                                  <option>10</option>
                            </select>
                          </td>
                        </tr>

                        <tr class="text-right">
                          <td style="vertical-align:middle;">
                            <h7>หมายเหตุ :</h7>
                          </td>
                          <td style="vertical-align:middle;">
                            <textarea rows="3" cols="20" class="form-control" style="width:350px;" name="work_detail"></textarea>
                          </td>
                        </tr>

                        <input type="hidden" name="pro_id" value="9">
                        <input type="hidden" name="pro_fullname" value="ผศ.ดร.ภานุพงศ์ บุญรมย์">

                      </tbody>
                    </table>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group text-center">
                      <input type="submit" value="Created..!!" class="btn btn-info" onclick="return confirm('ยืนยันการเพิ่มข้อมูลการเก็บชั่วโมง..!!')" />
                      <a href="view_work.php" class="btn btn-danger" >Back</a>
                  </div>
                </div>
     
              </center>    
            </div>
          </div>        
        </form> 
    </div>
  </div>
</div>

</body>
</html>

                        <script language="javascript">
                           function checker(){
                           if (document.form_work.work_term.value==""){
                              alert ("โปรดกรอกข้อมูล ภาคเรียน..!!");
                              document.form_work.work_term.focus();
                            return false;
                            }
                            else if (document.form_work.work_name.value==""){
                              alert ("โปรดกรอกข้อมูล หัวข้อ..!!");
                              document.form_work.work_name.focus();
                            return false;
                            }
                            else {
                              return ture;
                            }
                           }
                        </script>