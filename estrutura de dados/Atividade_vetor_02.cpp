#include <stdio.h>
int main ()
//	Um algoritmo que lê 10 elementos e armazene em um vetor
//	Determine a média dos elementos do vetor
//	O maior e o menor valor dos elementos do vetor
{	
	int vetor[10];
	float media, maior, menor;
	int i;
	
	// Atribuindo valores ao vetor  //
	for (i=0; i<10; i++)
		{
			printf ("Digite um numero para a posicao %i do vetor: ",i);
			scanf ("%i", &vetor[i]);
		}
	//Mostrando os valores do Vetor	//	
	printf ("\n VETOR \n");
	for (i=0; i<10; i++)
		{
			printf ("|Posicao %i: %i|", i, vetor[i]); 	
		}
	
	// Calculo média dos elementos //
	for (i=0; i<10; i++)
		{
			media += vetor[i];	
		}
		media = (media/i);
		printf (" \n média dos elementos do vetor: %.2f",media);
		
	// Definir qual o maior e o menor elemento
}
