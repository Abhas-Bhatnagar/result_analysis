#5
from bs4 import BeautifulSoup
import os
import glob
import sys
from xlrd import open_workbook
from xlwt import Workbook
import xlsxwriter
workbook = xlsxwriter.Workbook('CSE4th_mod.xlsx')									#NAME OF GENERATED FILE
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
	subjects=["RollNumber","Name","FatherName","NOE041_I","NOE041_E",'NEC459_I','NEC459_E','NEC409_I','NEC409_E','NCS451_I','NCS451_E','NCS401_I','NCS401_E','NCS453_I','NCS453_E','NCS402_I','NCS402_E','NCS455_I','NCS455_E','NCS403_I','NCS403_E','NHU401_I','NHU401_E','AUC002_I','AUC002_E',"GP","Total","CP","Result Status"]
	for heading in range(len(subjects)):											# subjects name
		worksheet.write(0,heading,subjects[heading])
	subject_code = str("\nNOE041\n")												# first subject code
	t=1
	for j in i.findAll('td'):
		if (t == 1):
			flag = 0
			code = str(j.text)
			#print list(code)
			if (code == subject_code):
				flag= 1
				#print (code)
			break;
	if(flag == 1 ):
		t = 1
		l = []
		for j in i.findAll('td'):
			#print(j.text)
			if (t % 7 == 4 or t % 7 == 5) and t!=82:								# subject code
				l.append(str(j.text))
				#print(j.text)
			t += 1  
		try:
			worksheet.write(row,0,rollnumber)										# subject table cell number
			worksheet.write(row,1,name)
			worksheet.write(row,2,fathername)
			for col in range(23):
				worksheet.write(row,3+col,l[col])
				#print l[col]
			#print col
			worksheet.write(row,26,marks)
			worksheet.write(row,27,cop)
			worksheet.write(row,28,cp)
			print("check")
		except:
			print("check1")
		row+=1
workbook.close()
