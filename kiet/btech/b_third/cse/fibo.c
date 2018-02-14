#include<stdio.h>
void fab(int n)
{
	int f,s,t,i=0;
	f=0,s=1;
	if(n>=1)
		printf("0 ");
	if(n>=2)
		printf("1 ");
	if(n>=3)
	{
		for(i=3;i<=n;i++)
		{
			t=f+s;
			printf("%d ",t);
			f=s;
			s=t;
		}
	}
}
int main(int argc,char *argv[])
{
int n_argu=argc;
int num=(int)(argv[1][0]-'0');

/*int num;
scanf("%d",&num);*/
fab(num);

return 0;
}
