<!DOCTYPE html>
<html lang="en">
<head>
  <title>Page d'acceuil</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,700');

    @font-face {
    font-family: 'Gilberto';
    src: url('fonts/Gilberto.ttf');
    }

    body
    {
    	background-color:  	#f1ecf1;
    }

    img {
       width: 700px;
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
 /* text-shadow: 0px 0px 10px rgba(0,0,0,0.2);*/
       }

        .btn2 {
       margin-left: 0px;
       padding: 7px;
       text-align: center;
       font-family: inherit;
		font-size: inherit;
       font-weight: bold;
       transition: 0.5s;
       background-size: 200% auto;
       color: white;
 /* text-shadow: 0px 0px 10px rgba(0,0,0,0.2);*/
       box-shadow: 0 0 20px #eee;
       border-radius: 10px;
       }

       .btn:hover {
         background-position: right center;
				    top: 2px; change the direction of the change here
         }

         .btn-1 {
          background-image: linear-gradient(to right, #0000FF 0%, #034587 51%, #0000FF 100%);
          border-radius: 5px;
          color: #fff;
		    -webkit-box-shadow: 0 4px #4169E1;
		    -moz-box-shadow: 0 4px #4169E1;
		    box-shadow: 0 4px #4169E1;
		    -webkit-transition: none;
		    box-shadow: 0 4px #4169E1;
		    -moz-transition: none;
		    transition: none;
         }

          .btn-2 {
          background-image: linear-gradient(to right,  	#008000 0%,  	#008000 51%,  	#228B22  100%);
          border-radius: 5px;
          color: #fff;
		    -webkit-box-shadow: 0 4px #32CD32;
		    -moz-box-shadow: 0 4px  #32CD32;
		    box-shadow: 0 4px  #32CD32;
		    -webkit-transition: none;
		    box-shadow: 0 4px  #32CD32;
		    -moz-transition: none;
		    transition: none;
         }
            .btn-3 {
          background-image: linear-gradient(to right,  #FF0000 0%,  #B22222 51%,  #FF0000  100%);
          border-radius: 5px;
          color: #fff;
		    -webkit-box-shadow: 0 4px #B22222;
		    -moz-box-shadow: 0 4px  #B22222;
		    box-shadow: 0 4px  #B22222;
		    -webkit-transition: none;
		    box-shadow: 0 4px  #B22222;
		    -moz-transition: none;
		    transition: none;
         }
               .btn-4 {
          background-image: linear-gradient(to right, #FFFFFF 0%,   #F5FFFA 51%,   	#FFFFF0 100%);
          border-radius: 5px;
          color: #fff;
		    -webkit-box-shadow: 0 4px #F8F8FF ;
		    -moz-box-shadow: 0 4px  #F8F8FF ;
		    box-shadow: 0 4px  #F8F8FF;
		    -webkit-transition: none;
		    box-shadow: 0 4px  #F8F8FF ;
		    -moz-transition: none;
		    transition: none;
         }
         .btn-5 {
          background-color :#034587;
		    box-shadow: 0 4px  #145ea8;
          border-radius: 0px;
         }
         .btn-6 {
          background-color: #145ea8;
          box-shadow: 0 4px  #2c7bc9;
          border-radius: 0px;
         }
          .btn-7 {
          background-color: #2c7bc9;
          box-shadow: 0 4px  #5092d4;
          border-radius: 0px;
         }
          .btn-8 {
          background-color:#5092d4;
          box-shadow: 0 4px  #71aae3;
          border-radius: 0px;
         }
           .btn-9 {
          background-color:#71aae3;
          box-shadow: 0 4px  #71aae3;
          border-radius: 0px;
         }

          .btn-10 {
          background-color :#008000;
		    box-shadow: 0 4px  #0e9945;
          border-radius: 0px;
         }
         .btn-11 {
          background-color: #0e9945;
          box-shadow: 0 4px  #39cc74;
          border-radius: 0px;
         }
          .btn-12 {
          background-color: #39cc74;
          box-shadow: 0 4px  #8febb3;
          border-radius: 0px;
         }
          .btn-13 {
          background-color:#8febb3;
          box-shadow: 0 4px  #baf7d2;
          border-radius: 0px;
         }
           .btn-14 {
          background-color:#baf7d2;
          box-shadow: 0 4px  #bcf7d3;
          border-radius: 0px;
         }
         .btn-15 {
          background-color:#70709a;
          box-shadow: 0 4px  #cacae6;
          border-radius: 5px;
          color: #fff;
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
      <a class="nav-item nav-link active" href="http://192.168.1.4/Projet_Soft_Embarque/Client/PHP/Main_Page.php" style="font-weight: bold; font-size: 20px">Main Page <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" style="font-size: 20px" href="http://192.168.1.4/Projet_Soft_Embarque/Client/PHP/Report_Page.php">Report</a>
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


<div class="container-fluid row text-center">

<div class="col-4" style="padding-left : 50px;">
        <?php include '/www/Projet_Soft_Embarque/Client/PHP/Script_Control.php';?>
        <h3 style="color: #380261; font-weight: bold;">Luminosity Acquisition </h3>
        <h5 style="color: #0b348c;"> <i>Illuminance Measurement </i></h5><br>
         <div class="card-deck">
              <div class="card">
          <!-- THIS DIV IS NOT CLICKABLE BUT I WANT IT TO BE -->
          <div class="card-body" style="background-image: radial-gradient(circle, rgba(69,67,108,0.05084031903777131) 0%, rgba(110,108,111,0.011624632763261533) 23%, rgba(217,215,218,1) 96%);">
          <h4 class="card-sub align-middle" style="color: #0b348c; font-weight: bold;">Actual Light in area</h4>
           <h5 style="color: #272794;"><?php echo '<b>'.$light_actual . ' lux </b> <i style="color: #272000;"> at '. $lightdate_actual . '</i>' ;?></h5>
          </div><!-- END CARD-BODY -->
      </div><!-- END CARD -->
      </div>
            <br>


             <div class="card-deck">
              <div class="card">
          <!-- THIS DIV IS NOT CLICKABLE BUT I WANT IT TO BE -->
          <div class="card-body" style="background-image: radial-gradient(circle, rgba(69,67,108,0.05084031903777131) 0%, rgba(110,108,111,0.011624632763261533) 23%, rgba(217,215,218,1) 96%);">
          <h4 class="card-sub align-middle" style="color: #0b348c; font-weight: bold;">Average Light of the day</h4>
           <h5 style="color: #272794;"><?php echo $light_average . ' lux' ;?></h5>
          </div><!-- END CARD-BODY -->
      </div><!-- END CARD -->
      </div>

       <div class="card-deck">
              <div class="card">
          <!-- THIS DIV IS NOT CLICKABLE BUT I WANT IT TO BE -->
          <div class="card-body" style="background-image: radial-gradient(circle, rgba(69,67,108,0.05084031903777131) 0%, rgba(110,108,111,0.011624632763261533) 23%, rgba(217,215,218,1) 96%);">
          	<div class="row">
          		       <div class="col">
          			   <h5 class="card-sub align-middle" style="color: #0b348c; font-weight: bold;">Maximum</h5>
          			   <h5 style="color: #272794;"><?php echo $light_max . ' lux' ;?></h5>
          		       </div>
          		       <div class="col">
          			   <h5 class="card-sub align-middle" style="color: #0b348c; font-weight: bold;">Mimimum</h5>
          			   <h5 style="color: #272794;"><?php echo $light_min . ' Lux' ;?></h5>
          		       </div>
            </div>

          </div><!-- END CARD-BODY -->
      </div><!-- END CARD -->
      </div>

<br>
      <a href="http://192.168.1.4/Projet_Soft_Embarque/Client/PHP/Report_Page.php"> <button class="btn btn-15" value="Blue Lighting"> More information...</button> </a>
  </div>


   <div class="col-8 " style=" padding-left: 80px;">
 		<?php include '/www/Projet_Soft_Embarque/Client/PHP/Script_Control.php';?>
 		<h3 style="color: #380261; font-weight: bold;">Choose the projector lighting color </h3>
 		<br><br>
 <form method="post">
	  <div class="form-row padding-left: 20px;">
	    <div class="col">
	     <input type="submit" name="blueon" class="btn btn-1" value="Blue Lighting" style="color: #000000"/>
	     <input type="submit" name="blueoff" class="btn2 btn-1" value="Light OFF" style="color: #000000"/>
	    </div>
	    <div class="col">
	     <input type="submit" name="greenon" class="btn btn-2" value="Green lighting" style="color: #000000"/>
	     <input type="submit" name="greenoff" class="btn2 btn-2" value="Light OFF" style="color: #000000"/>
	    </div>
	    <div class="col">
	     <input type="submit" name="redon" class="btn btn-3" value="Red lighting" style="color: #000000" />
	     <input type="submit" name="redoff" class="btn2 btn-3" value="Light OFF" style="color: #000000"/>
	    </div>
	   <div class="col">
	     <input type="submit" name="whiteon" class="btn btn-4" value="White lighting" style="color: #000000" />
	     <input type="submit" name="whiteoff" class="btn2 btn-4" value="Light OFF" style="color: #000000"/>
	    </div>
	  </div>
</form>

	<br>
	<br><br>
	<h3 style="color: #380261;font-weight: bold;">Control of Brightness using PWM</h3>
    <br>

<br>

 <form method="post">
	  <div class="form-row">
	  	<h4 style="color: #034587; font-weight: bold;padding-right : 34px; padding-left: 20px;">Brightness of Blue</h4>
	  	<div class="btn-group text-center">
	 	<input type="submit" name="B-UH" class="btn btn-5" value="Very HIGH" style="color: #000000" />
	    <input type="submit" name="B-H" class="btn btn-6" value="HIGH" style="color: #000000" />
	    <input type="submit" name="B-M" class="btn btn-7" value="Medium" style="color: #000000" />
	    <input type="submit" name="B-L" class="btn btn-8" value="LOW" style="color: #000000" />
	    <input type="submit" name="B-UL" class="btn btn-9" value="Very LOW" style="color: #000000" />
		</div>

	  </div>
</form>

<br>
<form method="post">
	  <div class="form-row">
	  	<h4 style="color: #008000; font-weight: bold;padding-right : 20px; padding-left: 20px;">Brightness of Green</h4>
	  	<div class="btn-group text-center">
	 	<input type="submit" name="G-UH" class="btn btn-10" value="Very HIGH" style="color: #000000" />
	    <input type="submit" name="G-H" class="btn btn-11" value="HIGH" style="color: #000000" />
	    <input type="submit" name="G-M" class="btn btn-12" value="Medium" style="color: #000000" />
	    <input type="submit" name="G-L" class="btn btn-13" value="LOW" style="color: #000000" />
	    <input type="submit" name="G-UL" class="btn btn-14" value="Very LOW" style="color: #000000" />
		</div>

	  </div>
</form>


   </div>

</div>



<br>
  <br><br>
</body>
</html>
