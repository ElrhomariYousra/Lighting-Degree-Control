#!/usr/bin/env python
print "Content-type: text/html\n\n"
print '''
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

    		.btn {
		       margin-bottom: 5px;
		       padding: 14px;
		       text-align: center;
		       font-family: inherit;
				font-size: inherit;
		       text-transform: uppercase;
		       font-weight: bold;
		       transition: 0.5s;
		       background-size: 200% auto;
		       color: white;
		 		text-shadow: 0px 0px 10px rgba(0,0,0,0.2);
		       }
		        .btn-15 {
          background-color:#70709a;
          box-shadow: 0 4px  #cacae6;
          border-radius: 5px;
          color: #fff;
         }
         </style>
		</head><body BGCOLOR="#88FF52">
		<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #ccbfd6;">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
		<div class="navbar-nav ml-auto" style="padding-right: 80px">
		      <a class="nav-item nav-link active" href="http://192.168.1.4/Projet_Soft_Embarque/Client/PHP/Main_Page.php" style="font-size: 20px">Main Page <span class="sr-only">(current)</span></a>
		      <a class="nav-item nav-link" style=" font-weight: bold; font-size: 20px" href="http://192.168.1.4/Projet_Soft_Embarque/Client/PHP/Report_Page.php">Report</a>
		      <a class="nav-item nav-link" style="font-size: 20px" href="#">Overview</a>
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
		                <h2 style="color: #0b348c; font-weight: bold;">Brightness control system</h2>   
		                <h4 style="color: #0b348c;">&</h4>
		                <h2 style="color: #0b348c; font-weight: bold;"> Illuminance Measurement</h2>   
		              </div>
		            </div>
		        </div>
		      </div>
		  </div>
		</div>

        <br><br>
        <div class="container text-center">
        <h3 style="color: #00008B;">Overview of Application <i>(CGI)</i> </h3>   
        </div>
        <br>
        <div class="container text-center">
        <p> This application allows you to control the light of your surface by choosing the desired light color, so you can attenuate it by choosing the right degree of lighting for your needs.
             It will also have a part of acquiring the value of bright lighting and 
             get the report of the day </p>
 <br>
<a href="http://192.168.1.4/Projet_Soft_Embarque/Client/PHP/Main_Page.php"> 
<button class="btn btn-15"> Start the system ! 
</button> </a>

        </div>
        </body></html>
'''