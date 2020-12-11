# Lighting Degree Control

This application proposes a system which allows the control of light in a given area by choosing the desired light color, and we can attenuate it by a web interface to choose the right degree of lighting we need. On the other hand, in the same web interface it is possible to acquire the value of the illuminance in units of lux in this area using a digital light sensor.

This application follows a server-client paradigm:
    --The client (web interface) makes requests to the server and the server responds to the client.
    --An administrator controls the system using a web application that acts as a client.
    --The server (running in the Raspberry) is responsible for managing the entire system, and the various components and devices connected to the Raspberry.
    --The web interface is based on real time communication with the server.
    --An SQLite database, which is a small database used on systems with limited memory, stores all of the history that will be used for tracking statistics.
