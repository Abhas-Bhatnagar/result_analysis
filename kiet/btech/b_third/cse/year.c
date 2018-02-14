#include<stdlib.h>
#include<stdio.h>
void year(int n)
{	int leap=0;
	if(n%100==0)
	{
		if(n%400==0)
			leap=1;
		else
			leap=0;
		
	}
	else if(n%4==0)
	{
		leap=1;
	}
	if(leap==1)
		printf("year %d is Leap year",n);
	else
		printf("year %d is Not a Leap year",n);
}
int main(int argc,char *argv[])
{
int n_argu=argc;
//int num=(int)(argv[1][0]-'0');
int num=atoi(argv[1]);
/*int num;
scanf("%d",&num);*/
year(num);

return 0;
}
