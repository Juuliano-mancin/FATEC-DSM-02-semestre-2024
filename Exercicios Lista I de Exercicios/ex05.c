#include <stdio.h>
#include <locale.h>

int main()
{
	float n1, n2, n3, media;
	
	printf ("\nNota 1: ");
	scanf ("%f", &n1);
	printf ("\nNota 2: ");
	scanf ("%f", &n2);
	printf ("\nNota 3: ");
	scanf ("%f", &n3);
	
	media = ((n1*2) + (n2*3) + (n3*5))/10;
	if (media <6){
		printf("Aluno reprovado! Media final:  %.2f", media);
	}
	
	else{
		printf("Aluno aprovado! Media final:  %.2f", media);
	}
}
