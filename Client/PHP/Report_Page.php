<!DOCTYPE html>
<html lang="en">
<head>
  <title>Page d'acceuil</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,700');

    @font-face {
    font-family: 'Gilberto';
    src: url('fonts/Gilberto.ttf');
    }

    img {
       width: 700px;
     }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #ccbfd6;">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav ml-auto" style="padding-right: 80px">
      <a class="nav-item nav-link active" href="http://192.168.1.4/Projet_Soft_Embarque/Client/PHP/Main_Page.php" style="font-size: 20px">Main Page <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" style=" font-weight: bold; font-size: 20px" href="http://192.168.1.4/Projet_Soft_Embarque/Client/PHP/Report_Page.php">Report</a>
      <a class="nav-item nav-link" style="font-size: 20px" href="http://192.168.1.4/cgi-bin/Overview_Page_CGI.py">Overview</a>
    </div>
  </div>
</nav>
<div class="container-fluid" style="padding: 0px;">   
  <!-- Card -->
  <div class="card gradient-card">

      <div class="card-image blue-gradient-rgba" style="background-image: radial-gradient(circle, rgba(69,67,108,0.05084031903777131) 0%, rgba(110,108,111,0.011624632763261533) 21%, rgba(204,191,214,1) 96%);">
        <!-- Content -->
        <div class="container first-content align-self-center p-3">
            <div class="row text-center ">
              <div class="col">
                <h1>Report</h1> 
                <h2>Variaton of light for the last 24 hours</h2>     
              </div>
            </div>
        </div>
      </div>
  </div>
</div>

<br><br>

<div class="container-fluid row text-center" style="margin-left: 0px; margin-right: 60px;">
  <div class="col-5">
    <h2 style="color: #0b348c; font-weight: bold;">Table of Values</h2> 
    <br> 
    <?php 

    $dbh = new PDO("sqlite:/www/Projet_Soft_Embarque/Client/BD/projet.db");
    $sql = "SELECT * from lightValues ORDER BY timestamp DESC LIMIT 24" ;

    echo "<table class='table table-hover'>";
    echo "<thead class='thead-warning' style = 'background-color : #e0dce3'>";
    echo "<th>DATE-TIME</th>";
    echo "<th>Light</th>";
    echo "</thead>";

    foreach ($dbh->query($sql) as $row) 
    { 
      echo "<tr>
              <td><center>$row[0]</center></td>
              <td><center>$row[1]</center></td>
            </tr>";
    }

    echo "</table>";
    $dbh = null; 
    ?>
  </div>
      <div class="col-7">
        <h2 style="color: #0b348c; font-weight: bold;">Graph</h2> 
         <a href="/Projet_Soft_Embarque/Client/PHP/plot/graph_light.png"><img src="/Projet_Soft_Embarque/Client/PHP/plot/graph_light.png" alt="plot" title="zoom"  /></a>
      </div>
   </div>

<br>
  <br><br>
</body>
</html>

