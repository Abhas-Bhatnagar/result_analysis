#5
from bs4 import BeautifulSoup
import os
import glob
import sys
from xlrd import open_workbook
from xlwt import Workbook
import xlsxwriter
workbook = xlsxwriter.Workbook('CSE6th.xlsx')										#NAME OF GENERATED FILE
worksheet = workbook.add_worksheet()

row = 1
for filename in glob.glob('*.html'):	
	soup = BeautifulSoup(open(filename),'html.parser')
	n=0
	c=0
	for b in soup.table():
		if(str(b.get('id'))!="None"):
			n=n+1
			x=str(b.get('id'))
	for b in soup.table():
		if(str(b.get('id'))!="None"):
			c=c+1
			if(c==n-1):
				x=str(b.get('id'))
				id_selector=x[3:5]
				print(id_selector)
	
	rollnumber = str(soup.find(id='lblRollNo').text)
	name = str(soup.find(id='lblFullName').text)
	fathername = str(soup.find(id='lblFatherName').text)

	marks = str(soup.find(id='ctl'+id_selector+'_ctl01_lblSemesterTotalMarksObtained').text)
	cp = str(soup.find(id='ctl'+id_selector+'_ctl01_lblResultStatus').text)
	cop = str(soup.find(id='ctl'+id_selector+'_lblCOP').text)
	

	i=soup.find(id='ctl'+id_selector+'_ctl01_ctl00_grdViewSubjectMarksheet')
	
	print(rollnumber+" \n"+name+" \n"+fathername+"\n"+marks+"\n"+cp+"\n"+cop)
	subjects=["RollNumber","Name","FatherName","NCS601_I","NCS601_E",'NCS651_I','NCS651_E','NCS602_I','NCS602_E','NCS652_I','NCS652_E','NCS603_I','NCS603_E','NCS653_I','NCS653_E','NCS063_I','NCS063_E','NCS654','NCS066_I','NCS066_I','NHU601_I','NHU601_E',"GP","Total","CP","Result Status"]
	for heading in range(len(subjects)):
		worksheet.write(0,heading,subjects[heading])
	t = 1
	l = []
	for j in i.findAll('td'):
		#print(j.text)
		if (t % 7 == 4 or t % 7 == 5) and t!=54 and t!=75:
			l.append(str(j.text))
			#print(j.text)
		t += 1  
	  
	try:
		worksheet.write(row,0,rollnumber)
		worksheet.write(row,1,name)
		worksheet.write(row,2,fathername)
		for col in range(20):
			worksheet.write(row,3+col,l[col])
			#print l[col]
		#print col
		worksheet.write(row,23,marks)
		worksheet.write(row,24,cop)
		worksheet.write(row,25,cp)
		print("check")
	except:
		print("check1")
	row+=1
workbook.close()
