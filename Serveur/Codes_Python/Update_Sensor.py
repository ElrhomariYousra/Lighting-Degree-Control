
# This code will just update the value of light intensity in the text file
# to have the same concept of sensor 
# It is added to crontab to be executed each minute
import random

def update_score(new_score, file_name="Lux_Sensor.txt"):
    with open(file_name,'r+') as saved_file:
        existing_score = saved_file.read().strip()
        with open(file_name,'w') as saved_file:
            saved_file.write(str(new_score))

# generate random value and replace value of light in the file 

new = round(random.uniform(2.3, 5.66), 2)
update_score(new)