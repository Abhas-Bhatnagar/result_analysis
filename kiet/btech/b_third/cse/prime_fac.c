#include<stdio.h>
#include<math.h>
#include<stdlib.h>
void primefac(int n)
{	int f=0,i;					// if flag=0 then no is prime else not prime
	for(i=2;i<=sqrt(n);i++)
	{
		if(n%i==0)
			{
				f=1;
				break;
			}
	}
	
	if(f==0&&(n!=1))
		printf("prime");
	else
		printf("not prime");
	
}
int main(int argc,char *argv[])
{
	
int n_argu=argc;
int num=atoi(argv[1]);


primefac(num);

return 0;
}
