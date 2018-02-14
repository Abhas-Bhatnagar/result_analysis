#include<stdio.h>
#include<string.h>
#include<stdlib.h>
void reverse(char* str)
{	int i=0,l=strlen(str);
	char ch;
	for(i=0;i<l/2;i++)
	{
		ch=str[i];
		str[i]=str[l-1-i];
		str[l-1-i]=ch;
		
	}
	printf("%s",str);
	
}
int main(int argc,char *argv[])
{
	
//int n_argu=argc;
//int num=atoi(argv[1]);

//char num[20];
//scanf("%s",num);

reverse(argv[1]);

return 0;
}
