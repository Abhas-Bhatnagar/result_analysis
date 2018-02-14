#5
import os
import MySQLdb

db = MySQLdb.connect("localhost","root","abhas123","ECE")
cursor=db.cursor()
"""sql = "SELECT `Code` FROM `CSE_THIRD` WHERE `RollNo`=%s"
cursor.execute(sql, (first,))
result=cursor.fetchall()
row = result[0]
c= row[0]
print c
"""
sql = "SELECT * FROM `ECE_THIRD`"
cursor.execute(sql)
result=cursor.fetchall()
try:
    for row in result:
       	print(row[0])
       	os.system("wget -O "+str(row[0])+".html --html-extension --convert-links "+row[2])
finally:
    db.close()