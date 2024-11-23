#include <stdio.h>
#
int main()
{
	float peso, altura, imc;
	int x,quantidade;
	x = 0;
	printf("Calculo de IMC");
	printf("\nQuantos IMCs deseja calcular: ");
	scanf("%i",&quantidade);
	do //while(x < quantidade);
	{
		printf("paciente: %i",x);
		printf("\nEntre com o peso: ");
		scanf("%f",&altura);
		imc = peso/(altura*altura);
		printf("IMC: %f",imc);
		x++;
	} while(x < quantidade);
	
}
