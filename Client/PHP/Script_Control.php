   <?php


         $dbh = new PDO("sqlite:/www/Projet_Soft_Embarque/Client/BD/projet.db");

        // Average Value 
        $average ="SELECT AVG(light) FROM (SELECT light FROM lightValues ORDER BY timestamp DESC LIMIT 20)";
            foreach($dbh->query($average) as $row)
            {
                $light_average = $row['AVG(light)'];
            }


        // Actual Value 
        $actual ="SELECT light FROM lightValues ORDER BY timestamp DESC LIMIT 1";
        foreach($dbh->query($actual) as $row)
            {
                $light_actual = $row['light'];
            }

        $actualdate ="SELECT timestamp FROM lightValues ORDER BY timestamp DESC LIMIT 1";
        foreach($dbh->query($actualdate) as $row)
            {
                $lightdate_actual = $row['timestamp'];
            }

        $maxi ="SELECT MAX(light) FROM (SELECT light FROM lightValues ORDER BY timestamp DESC LIMIT 20)";
        foreach($dbh->query($maxi) as $row)
        {
                $light_max = $row['MAX(light)'];
        }
       
        $min ="SELECT MIN(light) FROM (SELECT light FROM lightValues ORDER BY timestamp DESC LIMIT 20)";
        foreach($dbh->query($min) as $row)
        {
                $light_min =$row['MIN(light)'] ;
        }

    if(isset($_POST["blueon"])){
      exec("/www/Projet_Soft_Embarque/Serveur/Codes_C/pwm_led 1 10000000 10000000 1");
      exec("/www/Projet_Soft_Embarque/Serveur/Codes_C/rgb_led 3 1");
    }

    if(isset($_POST["blueoff"])){
      exec("/www/Projet_Soft_Embarque/Serveur/Codes_C/pwm_led 1 10000000 10000000 0");
      exec("/www/Projet_Soft_Embarque/Serveur/Codes_C/rgb_led 3 0");
    }
  
    if(isset($_POST["greenon"])){
      exec("/www/Projet_Soft_Embarque/Serveur/Codes_C/pwm_led 0 10000000 10000000 1");
      exec("/www/Projet_Soft_Embarque/Serveur/Codes_C/rgb_led 2 1");
    }

    if(isset($_POST["greenoff"])){
      exec("/www/Projet_Soft_Embarque/Serveur/Codes_C/pwm_led 0 10000000 10000000 0");
      exec("/www/Projet_Soft_Embarque/Serveur/Codes_C/rgb_led 2 0");
    }
    if(isset($_POST["redon"])){
      exec("/www/Projet_Soft_Embarque/Serveur/Codes_C/rgb_led 0 1");
      exec("/www/Projet_Soft_Embarque/Serveur/Codes_C/rgb_led 1 1");
    }
     if(isset($_POST["redoff"])){
      exec("/www/Projet_Soft_Embarque/Serveur/Codes_C/rgb_led 0 0");
      exec("/www/Projet_Soft_Embarque/Serveur/Codes_C/rgb_led 1 0");
    }
      if(isset($_POST["whiteon"])){
      exec("/www/Projet_Soft_Embarque/Serveur/Codes_C/pwm_led 1 10000000 10000000 1");
      exec("/www/Projet_Soft_Embarque/Serveur/Codes_C/pwm_led 0 10000000 10000000 1");
      exec("/www/Projet_Soft_Embarque/Serveur/Codes_C/rgb_led 1 1");
      exec("/www/Projet_Soft_Embarque/Serveur/Codes_C/rgb_led 4 1");
    }

     if(isset($_POST["whiteoff"])){
      exec("/www/Projet_Soft_Embarque/Serveur/Codes_C/pwm_led 1 10000000 10000000 0");
      exec("/www/Projet_Soft_Embarque/Serveur/Codes_C/pwm_led 0 10000000 10000000 0");
      exec("/www/Projet_Soft_Embarque/Serveur/Codes_C/rgb_led 1 0");
      exec("/www/Projet_Soft_Embarque/Serveur/Codes_C/rgb_led 4 0");
    }

    if(isset($_POST["B-UH"])){
      exec("/www/Projet_Soft_Embarque/Serveur/Codes_C/pwm_led 1 10000000 10000000 1");
    }

    if(isset($_POST["B-H"])){
      exec("/www/Projet_Soft_Embarque/Serveur/Codes_C/pwm_led 1 10000000 6000000 1");
    }

     if(isset($_POST["B-M"])){
      exec("/www/Projet_Soft_Embarque/Serveur/Codes_C/pwm_led 1 10000000 2000000 1");
    }
    if(isset($_POST["B-L"])){
      exec("/www/Projet_Soft_Embarque/Serveur/Codes_C/pwm_led 1 10000000 800000 1");
    }

    if(isset($_POST["B-UL"])){
      exec("/www/Projet_Soft_Embarque/Serveur/Codes_C/pwm_led 1 10000000 400000 1");
    }

      if(isset($_POST["G-UH"])){
      exec("/www/Projet_Soft_Embarque/Serveur/Codes_C/pwm_led 0 10000000 10000000 1");
    }

    if(isset($_POST["G-H"])){
      exec("/www/Projet_Soft_Embarque/Serveur/Codes_C/pwm_led 0 10000000 6000000 1");
    }

     if(isset($_POST["G-M"])){
      exec("/www/Projet_Soft_Embarque/Serveur/Codes_C/pwm_led 0 10000000 2000000 1");
    }
    if(isset($_POST["G-L"])){
      exec("/www/Projet_Soft_Embarque/Serveur/Codes_C/pwm_led 0 10000000 800000 1");
    }

    if(isset($_POST["G-UL"])){
      exec("/www/Projet_Soft_Embarque/Serveur/Codes_C/pwm_led 0 10000000 400000 1");
    }
?>