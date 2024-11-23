#include <stdio.h>
int main ()

 // Atividade 01 - Criar dois vetores, vetor A e vetor B
//  Criar um vetor C com a soma dos dois vetores
{
	int vetorA[5], vetorB[5], vetorC[5];
	int i;
	
	// Atribuindo valores ao vetor A //
	for (i=0; i<5; i++)
		{
			printf ("Digite um numero para a posicao %i do vetor A: ",i);
			scanf ("%i", &vetorA[i]);
		}
	
	//Mostrando os valores do Vetor A//	
	printf ("\n VETOR A \n");
	for (i=0; i<5; i++)
		{
			printf ("|Posicao %i: %i|", i, vetorA[i]); 	
		}
			
	printf ("\n ------------------------------------------- \n");
	
	// Atribuindo valores ao vetor B //
	for (i=0; i<5; i++)
		{
			printf ("Digite um numero para a posicao %i do vetor B: ",i);
			scanf ("%i", &vetorB[i]);
		}
		
	//Mostrando os valores do Vetor B//	
	printf ("\n VETOR B \n");
	for (i=0; i<5; i++)
		{
			printf ("|Posicao %i: %i|", i, vetorB[i]);
		}
		
	printf ("\n ------------------------------------------- \n");
	
	//Somando os valores do Vetor A+ B//
	
	for (i=0; i<5; i++)
		{
			vetorC[i]=vetorA[i]+vetorB[i];
		}
		
	//Mostrando os valores do Vetor C//
	printf ("\n VETOR C \n");
	for (i=0; i<5; i++)
		{
			printf ("|Posicao %i: %i|", i, vetorC[i]);
		}
	printf ("\n ------------------------------------------- \n");			
}
