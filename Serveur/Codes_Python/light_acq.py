import sqlite3 
import os 
import time 
import glob 


import sys
#Drivers Path
sys.path.insert(0, '/www/Projet_Soft_Embarque/Serveur/Drivers')
import I2C_LCD_driver

mylcd = I2C_LCD_driver.lcd()
dbname='/www/Projet_Soft_Embarque/Client/BD/projet.db'


def lux_value():
	file = open("/www/Projet_Soft_Embarque/Serveur/Codes_Python/Lux_Sensor.txt","r")
	content = file.read()
	return content

def save_to_db(value):
	#connet to db
	conn=sqlite3.connect(dbname)     
	curs=conn.cursor() 
	#insert values    
	curs.execute("INSERT INTO lightValues values(datetime('now','localtime'),(?))" , (value,))
	# commit the changes    
	conn.commit()     
	conn.close()


def main():
		#get light amount
		light = lux_value().strip()
		print" light ="+str(light)
		#Display time and date in LCD   
		mylcd.lcd_display_string("%s" %time.strftime("%m/%y  %H:%M:%S"), 1)
		# Display Light intensity in LCD
		mylcd.lcd_display_string("Light: " + str(line) + "Lux", 2)
		save_to_db(line) 
	
if __name__=="__main__":     
	main()