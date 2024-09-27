#include <stdio.h>
#include <locale.h>

int main()
{
	char sexo;
	float h, resp;
	
	printf ("\nDigite o seu sexo (F ou M):");
	scanf ("%c", &sexo);
	printf ("\nDigite sua altura: ");
	scanf ("%f", &h);
	
	if (sexo == "F"){
		resp = (62.1 * h) - 44.7;
		printf ("Seu peso ideal e: %.2f", resp);
	}
	else{
		resp = (72.7 * h) - 58;
		printf ("Seu peso ideal e: %.2f", resp);
	}	
}
