//Faça um programa em C que calcula o salário final de 5 funcionários.
//bonus: >= 1000 ---> 500 ;  500 a 999 ----> 300 ; 100 a 499 ---> 100 ; 1 a 99 ---> 25
//usuário deverá informar o salário do funcionário e a quantidade de pontos que ele obtev

#include <stdio.h>
int main()
{
	float salario, novoSalario, pontos;
	int i;
	
	
	
	for(i=0; i<4; i++)
	{
		printf("\nSalario atual do funcionario: ");
		scanf ("%f", &salario);
		printf("Pontos: ");
		scanf ("%f", &pontos);
	
		if(pontos <=99){
			novoSalario = salario + 25;
		}
		else if (pontos <=499){
			novoSalario = salario + 100;
		}
		else if (pontos <=999){
			novoSalario = salario + 300;
		}
		else{
			novoSalario = salario + 500;	
		}
		printf("\Salario ajustado para: %2.f", novoSalario);
	}
	
		
}
