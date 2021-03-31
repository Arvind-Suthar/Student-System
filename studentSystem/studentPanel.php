<?php
  include("session.php");
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
          <div class="intro p-5 text-lightgray bg-white">
            <h4><?php echo ucfirst($user_check); ?></h4>
            <p>Hello! You have completed <b>65%</b> of your syllabus. Keep learning with us.</p>
            <button type="button" name="button" class="btn btn-warning rounded-pill" onclick="myModal.toggle()">Timetable</button>
          </div>


          <div class="modal fade" id="timetable" tabindex="-1" aria-labelledby="timetable" aria-hidden="true">
            <div class="modal-dialog modal-xl">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Timetable</h5>
                </div>
                <div class="modal-body">
                  <table class="table table-striped">
                    <thead>
                      <th>Time</th>
                      <th>Monday</th>
                      <th>Tuesday</th>
                      <th>Wednesday</th>
                      <th>Thursday</th>
                      <th>Friday</th>
                      <th>Saturday</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>10:00 - 11:00 AM</td>
                        <td>EJ</td>
                        <td>AWP</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>EJ</td>
                      </tr>
                      <tr>
                        <td>11:00 - 12:00 PM</td>
                        <td></td>
                        <td>AWP</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>12:00 - 1:00 PM</td>
                        <td></td>
                        <td></td>
                        <td>LUNCH BREAK</td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>1:00 - 2:00 PM</td>
                        <td></td>
                        <td></td>
                        <td>AWP</td>
                        <td></td>
                        <td>EJ</td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>2:00 - 3:00 PM</td>
                        <td></td>
                        <td>EJ</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>AWP</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="myModal.toggle()">Close</button>
                </div>
              </div>
            </div>
          </div>




          <div class="container p-5">
            <div class="row text-lightgray">
              <div class="col-12">
                <h4 class="">Your Assignments</h4>
              </div>
              <div class="col-4 p-2 text-centered">
                <h6>English Chapter III</h6>
                <i class="fa fa-language assignment-icons" aria-hidden="true"></i>
                <div class="progress mx-5" style="height: 5px;">
                  <div class="progress-bar bg-primary" role="progressbar" style="width: 20%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <div class="col-4 p-2 text-centered">
                <h6>Mathematics</h6>
                <i class="fa fa-percent assignment-icons" aria-hidden="true"></i>
                <div class="progress mx-5" style="height: 5px;">
                  <div class="progress-bar bg-primary" role="progressbar" style="width: 60%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <div class="col-4 p-2 text-centered">
                <h6>IoT</h6>
                <i class="fa fa-chrome assignment-icons" aria-hidden="true"></i>
                <div class="progress mx-5" style="height: 5px;">
                  <div class="progress-bar bg-primary" role="progressbar" style="width: 90%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
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
    var myModal = new bootstrap.Modal(document.getElementById('timetable'), {
      keyboard: false
    });
  </script>
  <script>
    $("#profileDropdown").click(function(){
      $("#profileDropdownMenu").toggle("display");
    });
  </script>
</html>
