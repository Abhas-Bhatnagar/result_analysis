#5
import os
import MySQLdb

db = MySQLdb.connect("localhost","root","abhas123","EI")
cursor=db.cursor()
sql = "SELECT * FROM `EI_SECOND`"
cursor.execute(sql)
result=cursor.fetchall()
try:
    for row in result:
       	print(row[0])
       	os.system("wget -O "+str(row[0])+".html --html-extension --convert-links "+row[2])
finally:
    db.close()
