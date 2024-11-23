#include <stdio.h>
#include <locale.h>

int main()
{
	char combustivel;
	float litro, precof;
	
	printf ("Tipo de combustivel (A ou G): ");
	scanf ("%c", &combustivel);
	printf ("Litros: ");
	scanf ("%f", &litro);
	
	if(combustivel == 'A' && litro <=20.0)
	{
		precof = (litro * 3.39) * 0.97;
		printf ("Total a pagar %.2f", precof);
	}
	else if (combustivel == 'A' && litro >20.0)
	{
		precof = (litro * 3.39) * 0.95;
		printf ("Total a pagar %.2f", precof);
	}
	else if(combustivel == 'G' && litro <=20.0)
	{
		precof = (litro * 5.39) * 0.96;
		printf ("Total a pagar %.2f", precof);
	}
	else if(combustivel == 'G' && litro >20.0)
	{
		precof = (litro * 5.39) * 0.94;
		printf ("Total a pagar %.2f", precof);
	}
	else
	{
		printf("Opcao invalida!");
	}
}
