<?php
include('session.php');
include('NavTemplate.php');
$teacherSub = $_SESSION['subject'];
$sql = "SELECT * FROM leaverequest WHERE Subject = '$teacherSub' and status = 'pending'";
$result = mysqli_query($db, $sql);

if($_SERVER["REQUEST_METHOD"] == "POST"){
  if(isset($_POST["submit"])){
    if (mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)) {   
        $currLeaveId = $row["leaveId"];
        if(isset($_POST[$currLeaveId])){
          $setStatus = $_POST[$currLeaveId];
          $insertsql =  "UPDATE `leaverequest` SET `status` = '$setStatus' WHERE `leaverequest`.`leaveId` = $currLeaveId";

          $res = mysqli_query($db, $insertsql);

          //sendNotification()
        }
      }
    }
  }
}
$sql = "SELECT * FROM leaverequest WHERE Subject = '$teacherSub' and status = 'pending'";
$result = mysqli_query($db, $sql);

function printTable(){
  $sr = 1;
  global $result;
  if (mysqli_num_rows($result) > 0) {

      echo '<div class="container intro">
        <div class="p-3">
          <h5>Pending leave requests:</h5>
        </div>
      </div>
        <div class="table-responsive p-2 bg-white">
          <table class="table table-striped">
            <thead>
              <th>Leave ID</th>
              <th>Student Roll No.</th>
              <th>Category</th>
              <th>Leave Date</th>
              <th>Action</th>
            </thead>
            <tbody>
              <form action="manageLeave.php" method="post">
            ';
      while($row = mysqli_fetch_assoc($result)) {
          echo '<tr>
              <td>'.$row["leaveId"].'</td>
              <td>'.$row["StudentId"].'</td>
              <td>'.$row["Category"].'</td>
              <td>'.$row["leaveDate"].'</td>
              <td>
                <label style="margin-bottom: 0px"><input type="radio" name="'.$row["leaveId"].'" value="approved" required> Approve</label>
                <label style="margin-bottom: 0px"><input type="radio" name="'.$row["leaveId"].'" value="rejected"> Reject</label>
              </td>
          </tr>';
          $sr += 1;
      }
      echo '</tbody>
            </table>
            <input type="submit" value="Submit" name="submit" class="btn btn-success">
            </form>
          </div>';
  }else{
    echo '<div class="container-fluid emptyMsg text-dark">
      No leave Requests pending
    </div>';
  }

}
?>
        <div class="col-95">
          <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
              <span class="navbar-text">
                What are your plans for today?
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

            <?php printTable(); ?>
        </div>
      </div>
    </div>
  </body>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="bootstrap-4.5.3-dist/js/bootstrap.js"></script>
  <script>
    $("#profileDropdown").click(function(){
    $("#profileDropdownMenu").toggle("display");
    });
  </script>
</html>
