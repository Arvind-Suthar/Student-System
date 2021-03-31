

<?php

  if($_SESSION['type'] == "1"){
    echo '
    <!DOCTYPE html>
    <html lang="en" dir="ltr">
      <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="bootstrap-4.5.3-dist/css/bootstrap.css">
        <script src="https://kit.fontawesome.com/e017393c29.js"></script>
        <!--link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Varela&display=swap" rel="stylesheet"-->
        <link rel="stylesheet" href="css/panels.css">
        <title></title>
      </head>
      <body>
        <div class="container-fluid">
          <div class="row g-0">
            <div class="col-25">
              <ul class="nav flex-column side-nav bg-primary">
                <li class="nav-item">
                  <div class="nav-brand">
                    <img src="img/school_logo.png" alt="School Logo" />
                    E-School
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="studentPanel.php">
                    <i class="fa fa-home" aria-hidden="true"></i> Home
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="attendance.php">
                    <i class="fa fa-table" aria-hidden="true"></i> Attendance Reports
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="ApplyForLeave.php">
                    <i class="fa fa-minus-circle" aria-hidden="true"></i> Apply for leave
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="makeComplain.php">
                    <i class="fa fa-file" aria-hidden="true"></i> File a complain
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="settings.php">
                    <i class="fa fa-cog" aria-hidden="true"></i> Settings
                  </a>
                </li>
                <!--li class="nav-item last-item">
                  Semester <strong>2</strong> of 3
                  <div class="progress-in-nav">
                    <div class="progress">
                      <div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </li-->
              </ul>
            </div>
            ';

  }else if($_SESSION['type'] == "2"){
    echo '
    <!DOCTYPE html>
    <html lang="en" dir="ltr">
      <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="bootstrap-4.5.3-dist/css/bootstrap.css">
        <script src="https://kit.fontawesome.com/e017393c29.js"></script>
        <!--link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Varela&display=swap" rel="stylesheet"-->
        <script src="js/Chart.js"></script>
        <link rel="stylesheet" href="css/panels.css">
        <title></title>
      </head>
      <body>
        <div class="container-fluid">
          <div class="row g-0">
            <div class="col-25">
              <ul class="nav flex-column side-nav bg-primary">
                <li class="nav-item">
                  <div class="nav-brand">
                    <img src="img/school_logo.png" alt="School Logo" />
                    E-School
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="teacherPanel.php">
                    <i class="fa fa-home" aria-hidden="true"></i> Home
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="fillAttendance.php">
                    <i class="fa fa-table" aria-hidden="true"></i> Fill Attendance Report
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="addStudent.php">
                    <i class="fa fa-plus" aria-hidden="true"></i> Add a Student
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="manageLeave.php">
                    <i class="fa fa-file" aria-hidden="true"></i> Manage Leave
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="manageComplain.php">
                    <i class="fa fa-file" aria-hidden="true"></i> Manage Complain
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="settings.php">
                    <i class="fa fa-cog" aria-hidden="true"></i> Settings
                  </a>
                </li>
              </ul>
            </div>
            ';
  }

?>
