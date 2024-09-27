#include <stdio.h>
int main()
{
// -----------------------------------------------------------------------------------------------------------------------------//
// || EXEMPLO 01 ||
	
	int dados[5];
	int i;
	
	for (i=0; i<5; i++)
		{
			printf ("Digite um numero para a posicao %i: ",i);
			scanf ("%i", &dados[i]);
		}
	
	for (i=0; i<5; i++)
		{
			printf ("\n Elemento posicao %i: %i", i, dados[i]); 
			// o primeiro %i representa uma variavel int e o segundo %i representa a posição do vetor
		}	
}
