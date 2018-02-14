#include<stdio.h>
int fac(int n)
{
	if(n==0 || n==1)
		return 1;
	else
		return n*fac(n-1);
}
int main(int argc,char *argv[])
{
int n_argu=argc;
int num=(int)(argv[1][0]-'0');
int fact=fac(num);
printf("%d",fact);



return 0;
}
