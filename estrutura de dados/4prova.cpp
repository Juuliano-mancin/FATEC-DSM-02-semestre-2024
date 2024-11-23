//leia dois vetores
//armazena em um terceiro vetor a soma dos valores por índice

#include <stdio.h>
int main(){

	int vetorA[5], vetorB[5], vetorC[5];
	int i;
	
	for (i=0; i<5; i++)
		{
			printf ("Digite um numero para a posicao %i do vetor A: ",i);
			scanf ("%i", &vetorA[i]);
		}
	

	printf ("\n VETOR A \n");
	for (i=0; i<5; i++)
		{
			printf ("|Posicao %i: ; Valor %i|", i, vetorA[i]); 	
		}
			
	printf ("\n ------------------------------------------- \n");
	

	for (i=0; i<5; i++)
		{
			printf ("Digite um numero para a posicao %i do vetor B: ",i);
			scanf ("%i", &vetorB[i]);
		}
		

	printf ("\n VETOR B \n");
	for (i=0; i<5; i++)
		{
			printf ("|Posicao %i: ; Valor %i|", i, vetorB[i]);
		}
		
	printf ("\n ------------------------------------------- \n");
	

	
	for (i=0; i<5; i++)
		{
			vetorC[i]=vetorA[i]+vetorB[i];
		}
		
	printf ("\n VETOR C \n");
	for (i=0; i<5; i++)
		{
			printf ("|Posicao %i: ; Valor %i|", i, vetorC[i]);
		}
	printf ("\n ------------------------------------------- \n");			
}
