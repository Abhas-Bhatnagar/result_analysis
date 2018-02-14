#5
from bs4 import BeautifulSoup
import os
import glob
import sys
from xlrd import open_workbook
from xlwt import Workbook
import xlsxwriter
workbook = xlsxwriter.Workbook('ME6th.xlsx')										#NAME OF GENERATED FILE
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
	subjects=["RollNumber","Name","FatherName","NME602_I","NME602_E",'NME651_I','NME651_E','NME603_I','NME603_E','NME652_I','NME652_E','NME604_I','NME604_E','NME653_I','NME653_E','NME013_I','NME013_E','NME654_I','NME654_E','NME021_I','NME021_E','NHU601_I','NHU601_E',"GP","Total","CP","Result Status"]
	for heading in range(len(subjects)):
		worksheet.write(0,heading,subjects[heading])
	t = 1
	l = []
	for j in i.findAll('td'):
		#print(j.text)
		#if (t % 7 == 4 or t % 7 == 5) and t!=54 and t!=82:
		if (t % 7 == 4 or t % 7 == 5) and t!=75:
			l.append(str(j.text))
			#print(j.text)
		t += 1  
	  
	try:
		worksheet.write(row,0,rollnumber)
		worksheet.write(row,1,name)
		worksheet.write(row,2,fathername)
		for col in range(21):
			worksheet.write(row,3+col,l[col])
			#print l[col]
		#print col
		worksheet.write(row,24,marks)
		worksheet.write(row,25,cop)
		worksheet.write(row,26,cp)
		print("check")
	except:
		print("check1")
	row+=1
workbook.close()