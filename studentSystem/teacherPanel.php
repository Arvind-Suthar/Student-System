<?php
include('session.php');
include('NavTemplate.php');
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
          <div class="intro p-5 text-lightgray bg-white">
            <h4><?php echo ucfirst($user_check); ?></h4>
            <p>Hello! Hope you are having a good day. </p>
          </div>
          <div class="container bg-warning flex align-items-center">
            <div class="row justify-content-center bg-warning py-5">
              <div class="col-lg-10 p-3 text-dark ">
                <div class="container">
                  <div class="row">
                    <div class="col-md-4">
                      <h2>89</h2>
                      <h6>Yesterday's Student Attedance</h6>
                    </div>
                    <div class="col-md-8">
                      <canvas id="salesChart"></canvas>
                    </div>
                  </div>
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
    $("#profileDropdown").click(function(){
    $("#profileDropdownMenu").toggle("display");
    });
  </script>
  <script>
  var ctx = document.getElementById('salesChart').getContext('2d');
  var chart = new Chart(ctx, {
      type: 'line',
      data: {
          labels: ['1 January', '2 January', '3 January', '4 January', '5 January','6 January'],
          datasets: [{
              label: 'Attendance',
              borderColor: 'rgb(255, 255, 255)',
              data: [24, 40, 91, 80,59, 89]
          }]
      },
      options: {
        maintainAspectRatio:false,
        legend:{
          display:false
        },
        scales: {
          xAxes:
            [
              {
                gridLines: {
                  color:'transparent',
                  zeroLineColor:'transparent'
                },
                ticks: {
                  fontSize:2,
                  fontColor:'transparent'
                }
              }
            ],
            yAxes:
              [
                {
                  display:false,
                  ticks:{
                    display:false,
                    min:0,
                    max:100
                  }
                }
              ]
            },
            elements:{
              line:{
                tension:0.00001,
                borderWidth:1
              },
              point:{
                radius:1,
                hitRadius:5,
                hoverRadius:4
              }
            }
          }
  });
  </script>
</html>
