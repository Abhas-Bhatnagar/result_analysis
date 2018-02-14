from bs4 import BeautifulSoup
import os
import glob
import sys
from xlrd import open_workbook
from xlwt import Workbook
import xlsxwriter
workbook = xlsxwriter.Workbook('CSE_2nd_sem_2nd.xlsx')									#NAME OF GENERATED FILE
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
	subjects=["RollNumber","Name","FatherName","RAS201_I","RAS201_E",'RAS252_I','RAS252_E','RME201_I','RME201_E','RME251_I','RME251_E','RAS203_I','RAS203_E','RCS251_I','RCS251_E','RCS201_I','RCS201_E','RCE251_I','RCE251_E','RAS202_I','RAS202_E',"Total","CP","Result Status"]
	for heading in range(len(subjects)):											# subjects name
		worksheet.write(0,heading,subjects[heading])
	subject_code = str("\nRAS252\n")												# first subject code
	t=1
	flag = 0
	for j in i.findAll('td'):
		if (t == 8):
			code = str(j.text)
			#print list(code)
			#print list(subject_code)
			if (code == subject_code):
				flag= 1
				#print (code)
				break;
		t += 1
	if(flag == 1 ):
		t = 1
		l = []
		for j in i.findAll('td'):
			#print(j.text)
			if (t % 7 == 4 or t % 7 == 5) :								# subject code
				l.append(str(j.text))
				#print(j.text)
			t += 1  
		try:
			worksheet.write(row,0,rollnumber)										# subject table cell number
			worksheet.write(row,1,name)
			worksheet.write(row,2,fathername)
			for col in range(18):
				worksheet.write(row,3+col,l[col])
				#print l[col]
			#print col
			worksheet.write(row,21,marks)
			worksheet.write(row,22,cop)
			worksheet.write(row,23,cp)
			print("check")
		except:
			print("check1")
		row+=1
workbook.close()
