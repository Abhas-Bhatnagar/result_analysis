#include<stdlib.h>
#include<stdio.h>
void convert(int n)
{	int i=0,dec=0,r,p=1;	
while(n!=0)
	{
		r=n%10;
		dec+=r*p;
		p*=2;
		n/=10;
		i++;
	}
	printf("%d",dec);
}
int main(int argc,char *argv[])
{
	
int n_argu=argc;
int num=atoi(argv[1]);

//int num;
//scanf("%d",&num);

convert(num);

return 0;
}
