//leia três notas de um aluno, calcule e escreva a média final deste aluno
// mediafinal = (n1*2 + n2*3 + n3*5)/10.
//Se a media final for maior ou igual a 6, informar que o aluno está aprovado, senão que está reprovado.

#include <stdio.h>
int main()
{
	float n1, n2, n3, mediafinal;
	printf("Primeira nota: ");
	scanf ("%f", &n1);
	
	printf("Segunda nota: ");
	scanf ("%f", &n2);
	
	printf("Terceira nota: ");
	scanf ("%f", &n3);
	
	mediafinal = ((n1*2) + (n2*3)+ (n3*5))/10;
	
	
	
	if(mediafinal >= 6){
		printf("Aluno aprovado!");
		printf("A media foi: %2.f", mediafinal);
	}
	else{
		printf("Aluno REPROVADO!");
		printf("A media foi: %2.f", mediafinal);
	} 		
}
