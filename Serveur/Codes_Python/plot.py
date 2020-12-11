import time
import datetime
import sqlite3
import os
import glob
import time
import numpy as np

import os
import matplotlib.pyplot as plt
plt.style.use('seaborn-whitegrid')

dbname='/www/Projet_Soft_Embarque/Client/BD/projet.db'

x_light=[]
y_time=[] 
conn = sqlite3.connect(dbname)
curs = conn.cursor()

##############################################

for row1 in curs.execute(" SELECT light FROM lightValues ORDER BY timestamp DESC LIMIT 24 "): 
    x_light.append(row1[0]) 

for row2 in curs.execute(" SELECT strftime('%M',timestamp) from lightValues ORDER BY timestamp DESC LIMIT 24"): 
    y_time.append(int(row2[0])) 

conn.close()

print x_light 
print y_time

plt.figure(figsize=[10,8])
plt.bar(y_time, x_light, width = 0.5, color='#0504aa',alpha=0.7)
plt.grid(axis='y', alpha=0.75)
plt.xlabel('Time',fontsize=15)
plt.ylabel('Intensity of light',fontsize=15)
plt.xticks(fontsize=15)
plt.yticks(fontsize=15)
plt.title('Variation of light over the last 24 hours',fontsize=15)

plt.savefig('/www/Projet_Soft_Embarque/Client/PHP/plot/graph_light.png')
#######
