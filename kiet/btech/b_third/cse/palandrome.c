#include<stdio.h>
#include<string.h>
#include<stdlib.h>
void palan(char* str)
{	int i=0,l=strlen(str),f=0;
	char ch;
	for(i=0;i<l/2;i++)
	{
		if(str[i]!=str[l-1-i])
			{
				f=1;
				break;
			}
		
	}
	if(f==0)
		printf("%s string is palandrome",str);
	else
		printf("%s string is not palandrome",str);
	
}
int main(int argc,char *argv[])
{
	
//int n_argu=argc;
//int num=atoi(argv[1]);

//char num[20];
//scanf("%s",&num);

palan(argv[1]);

return 0;
}
