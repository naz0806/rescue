<?php 

//connect to the database
$mysqli = new mysqli('remotemysql.com', '3Xfb0olTjF', 'kWUZVKJpXB', '3Xfb0olTjF');

$link = mysqli_connect('remotemysql.com', '3Xfb0olTjF', 'kWUZVKJpXB', '3Xfb0olTjF') or die($link);
if($mysqli->connect_error){
    die('Connection Failed : '.$mysqli->connect_error);
}
?> 

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="https://getbootstrap.com/docs/3.3/examples/starter-template/">
    <title>Volunteer | Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/admin-A.css" rel="stylesheet">
    <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>


  </head>

  <body>

    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Rescue</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="volunteerListEvent-B.php">Dashboard</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Welcome, Volunteer</a></li>
            <li><a href="index.php">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              Dashboard <small>Manage Your Site</small></h1>
          </div>
        </div>
      </div>
    </header>

    <section id="breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
          <li class="active">Dashboard</li>
        </ol>
      </div>
    </section>
<!-------------------------------------------------------------Profile----------------------------------------------------->
    <section id="main">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="panel panel-default">
                      <div class="panel-heading main-color-bg">
                          Volunteer's Profile
                      </div>
                      <div class="panel-body">
                          <div class="container">
                              <div class="row">
                                  <div class="col-md-3" >
                                      <img src="css/image-B/user1.jpg" id="profile-pic">
                                  </div>
                                  <div class="col-md-8">
                                      <div id="profile">
                                          <table class="table table-striped">
                                              <tr>
                                                  <th>Name</th>
                                                  <th>:</th>
                                                  <td>Ahmad Nasir Wahab</td>
                                              </tr>
                                              <tr>
                                                  <th>Volunteer ID</th>
                                                  <th>:</th>
                                                  <td>AE451000202</td>
                                              </tr>
                                              <tr>
                                                  <th>Contact No.</th>
                                                  <th>:</th>
                                                  <td>011-10182996</td>
                                              </tr>
                                              <tr>
                                                  <th>Email</th>
                                                  <th>:</th>
                                                  <td>nasirwahab@gmail.com</td>
                                              </tr>
                                              <tr style="overflow: hidden;">
                                                  <th>Address</th>
                                                  <th>:</th>
                                                  <td> 7 Jalan SS 13/3A SB Industrial Estate, Petaling Jaya, Selangor</td>
                                              </tr>
                                              <tr>
                                                  <th>Job Position &nbsp &nbsp</th>
                                                  <th>:&nbsp &nbsp</th>
                                                  <td>Computer Engineer</td>
                                              </tr>
                                          </table>
                                      </div>
                                  </div>
                              </div>
                          </div> 
                      </div>
                    </div>
              </div>
          </div>
      </div>
  </section>

    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="list-group">
              <a href="volunteerListEvent-B.php" class="list-group-item active main-color-bg">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
              </a>
              <a href="volunteerListEvent-B.php" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Your Events<span class="badge">12</span></a>
              <a href="volunteerJoinEvent-B.php" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Add Event<span class="badge">12</span></a>
            </div>
          </div>
          <div class="col-md-9">
          
            <!-- Your Events -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Your Events</h3>
              </div>
              <div class="panel-body">
                <div class="tbl-header">
                  <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-hover tbl-h">
                      <thead>
                      <tr id="table_header">
                          <th>NO.</th>
                          <th id="col_activity">EVENT</th>
                          <th>VENUE</th>
                          <th>DATE</th>
                          <th>START TIME</th>
                          <th>END TIME</th>
                      </tr>
                      </thead>
                  </table>
              </div>
              <div class="tbl-content">
                  <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-hover tbl-c">
              <?php    
                  $sql = "SELECT event_id, event_name, event_venue, date, start_time, end_time FROM event";
                  if($result = mysqli_query($link, $sql)){
                    if (mysqli_num_rows($result) > 0) {
                      echo "<table>";
                      // output data of each row
                      while($row = mysqli_fetch_array($result)) {
                       echo "<tr>";
                         echo "<td>" . $row["event_id"]. "</td> ";
                         echo "<td>" . $row["event_name"]. "</td ";
                         echo "<td>" . $row["event_venue"]. " </td>"; 
                         echo "<td>" . $row["date"]. "</td> ";
                         echo "<td>" . $row["start_time"]. "</td ";
                         echo "<td>" . $row["end_time"]. " </td>";
                       echo"</tr>";
                      }
                       echo "</table>";
                  } 
                  else {
                    echo "0 results";
                  }
                }  else {
                  echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                }

              ?>
                  </table>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>

    <footer id="footer">
      <p>Copyright Rescue, &copy; 2020</p>
    </footer>

    

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="js/volunteer-B.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
      
</html>
