#include <stdio.h>
#include <locale.h>

int main()
{
	
	int anoatual, anonasc;
	float idadeanos, idademeses, idadesemana;
	
	printf ("\n Digite o ano do seu nascimento: ");
	scanf  ("%i", &anonasc);
	
	printf ("\n Digite o ano atual: ");
	scanf  ("%i", &anoatual);
	
	idadeanos = anoatual - anonasc;
	idademeses = (anoatual*12) - (anonasc*12);
	idadesemana = (anoatual*12*4) - (anonasc*12*4);
	
	printf ("\n Idade [anos]: %.2f", idadeanos);
	printf ("\n Idade [meses]: %.2f", idademeses);
	printf ("\n Idade [semana]: %.2f", idadesemana);
	
	
}
