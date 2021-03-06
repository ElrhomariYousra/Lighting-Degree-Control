# Lighting Degree Control

This application proposes a system which allows the control of light in a given area by choosing the desired light color, and we can attenuate it by a web interface to choose the right degree of lighting we need. On the other hand, in the same web interface it is possible to acquire the value of the illuminance in units of lux in this area using a digital light sensor.

This application follows a server-client paradigm:
  
    1.The client (web interface) makes requests to the server and the server responds to the client.
    2.An administrator controls the system using a web application that acts as a client.
    3.The server (running in the Raspberry) is responsible for managing the entire system, 
      and the various components and devices connected to the Raspberry.
    4.The web interface is based on real time communication with the server.
    5.An SQLite database, which is a small database used on systems with limited memory, 
         stores all of the history that will be used for tracking statistics.
    
   
  
  <img src="https://github.com/ElrhomariYousra/Lighting-Degree-Control/blob/master/images/Picture5.png" width="800">




For the acquisition part, the value captured is displayed in LCD and at the same time in the web interface. There is then the notion of real time.


<img src="https://github.com/ElrhomariYousra/Lighting-Degree-Control/blob/master/images/Picture1.png" width="800">











For the control part, the system allows you to control the desired level of lighting. The 2 photos show the difference in light illumination between Very High (100% Duty-cycle) and Very Low (10% Duty-Cycle).

  <img src="https://github.com/ElrhomariYousra/Lighting-Degree-Control/blob/master/images/Picture2.png" width="400">     <img src="https://github.com/ElrhomariYousra/Lighting-Degree-Control/blob/master/images/Picture3.png" width="400">




