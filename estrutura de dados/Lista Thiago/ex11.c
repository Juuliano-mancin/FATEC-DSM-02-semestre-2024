#include <stdio.h>
#include <locale.h>

int main()
{
	
	int n1, res, x;
	
	
	printf ("Digite um numero: ");
	scanf ("%i", &n1);
	
	for (x=1; x<=10; x++)
	{
		res = n1*x;
		
		printf ("%i x %i = %i \n", x,n1,res);
		
	}
	
}
