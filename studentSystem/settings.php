<?php

  include("session.php");

  if($_SESSION["type"] == 1){
    $selectedTable = "studentlogintable";
    $indexing = "studentIndex";
  }else if($_SESSION["type"] == 2){
    $selectedTable = "teacherlogintable";
    $indexing = "teacherId";
  }


  $sql = "SELECT * from $selectedTable WHERE username = '$user_check'";
  $row = mysqli_fetch_assoc(mysqli_query($db, $sql));

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  if($_SERVER["REQUEST_METHOD"] == "POST") {
    mysqli_select_db($db, "collegeproject");
    if(isset($_POST["updatePassword"])){
      $password = test_input($_POST['pass']);

      

      $sql = "SELECT * from $selectedTable WHERE username = '$user_check'";
      /*$result = mysqli_query($db, $sql);*/
      if(mysqli_query($db, $sql)){
        $row = mysqli_fetch_assoc(mysqli_query($db, $sql));
      }else{
        echo "Error: ".mysqli_error($db);
      }
      
      

      $selectedStudent = $row[$indexing];
      $updateSql = "UPDATE `$selectedTable` SET `password` = '$password' WHERE `$selectedTable`.`$indexing` = '$selectedStudent'";
      if(mysqli_query($db, $updateSql)){
      }else{
        echo "Err : ".mysqli_error($db);
      }
    }
  }

  include('NavTemplate.php');
 ?>

        <div class="col-95">
          <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
              <span class="navbar-text">
                What do you want to learn today?
              </span>
            </div>
            <div class="icon-box">
              <div class="profile-button dropdown">
                <a href="#" class="dropdown-toggle" id="profileDropdown" role="button">
                   <img src="img/profile.png" alt="Profile picture" height="30px" class="rounded-pill"/>
                </a>
                <ul class="dropdown-menu" aria-labelledby="profileDropdown" id="profileDropdownMenu">
                  <li><a class="dropdown-item text-danger" href="logout.php">Log Out</a></li>
                </ul>
              </div>
            </div>
          </nav>
          <div class="flex-center">
            <div class="wrapper-80">
              <div class="profile-card bg-white p-4 my-2 rounded">
                <div class="profile-img-container">
                  <i class="fa fa-pencil bg-primary text-white"></i>
                </div>
                <div class="profile-name py-2 px-5">
                <?php 
                    
                    if($_SESSION["type"] == 1){
                      echo '<h4>'.ucfirst($row["username"]).'</h4>
                            <h6 class="text-lightgray">Student</h6>';
                    }else{
                      echo '<h4>'.ucfirst($row["username"]).'</h4>
                            <h6 class="text-lightgray">Teacher</h6>';
                    }
                ?>
                </div>
              </div>
              <div class="profile-info-table table-responsive bg-white p-3 rounded">
                <table class="table table-bordered mb-2">
                  <tbody>
                    <?php 
                    
                    if($_SESSION["type"] == 1){
                      echo '<tr>
                              <th>Username</th>
                              <td>'.ucfirst($row["username"]).'</td>
                            </tr>
                            <tr>
                              <th>Roll no.</th>
                              <td>'.$row["rollNo"].'</td>
                            </tr>
                            <tr>
                              <th>Course</th>
                              <td>BE in Information Technology</td>
                            </tr>';
                    }else{
                      echo '<tr>
                              <th>Username</th>
                              <td>'.ucfirst($row["username"]).'</td>
                            </tr>
                            <tr>
                              <th>Subject</th>
                              <td>'.$row["subject"].'</td>
                            </tr>
                            <tr>
                              <th>Faculty</th>
                              <td>Information Technology</td>
                            </tr>';
                    }
                    
                    ?>
                    
                  </tbody>
                </table>
                <div class="security-box mt-4">
                  <div class="wrap py-2" style="overflow: hidden;">
                    <h5>Password</h5>
                    <button type="button" name="button" class="btn btn-sm btn-primary rounded-pill mx-1" id="changePassword">Edit</button>
                  </div>
                  <div class="line"></div>
                  <form action="settings.php" method="post">
                    <input type="password" name="pass" value="*********" class="form-control my-3" id="passwordInput" disabled>
                    <input type="submit" name="updatePassword" value="Update password" class="btn btn-success btn-sm" id="submitButton" style="display: none;"/>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </body>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="bootstrap-4.5.3-dist/js/bootstrap.js"></script>
  <script>
  var editableForm = true;
    $("#profileDropdown").click(function(){
      $("#profileDropdownMenu").toggle("display");
    });

    $("#changePassword").click(function(){
      if(editableForm == true){
        $("#passwordInput").prop('disabled', false);
        $("#passwordInput").prop('required', true);
        $("#passwordInput").attr('value','');
        $("#passwordInput").attr('type','text');
        $("#submitButton").css('display', 'block');
        editableForm = false;
        return editableForm;
      }else if(editableForm == false){
        $("#passwordInput").prop('disabled', true);
        $("#passwordInput").attr('value','********');
        $("#passwordInput").attr('type','password');
        $("#submitButton").css('display', 'none');
        editableForm = true;
        return editableForm;
      }

    });
  </script>
</html>
