#include<stdio.h>
//função soma
float soma(float x, float y)
{
	return(x+y);
}
float subtracao(float x, float y)
{
	return(x-y);
}
float multiplicacao(float x, float y)
{
	return(x*y);
}
float divisao(float x, float y)
{
	return(x/y);
}

int main()
{
	float x, y, resultado;
	int op;
	while(op != 5){
	printf("\nCalculadora");
	printf("\nDigite 1 para Somar");
	printf("\nDigite 2 para Subtrair");
	printf("\nDigite 3 para Multiplicar");
	printf("\nDigite 4 para Dividir");
	printf("\nDigite 5 para Sair");
	printf("\nEntre com a opcao: ");
	scanf("%i",&op);
	switch(op)
	{
	    case 1:
		   printf("\nSoma de Valores");
		   printf("Entre com o valor de x: ");
		   scanf("%f",&x);
		   printf("Entre com o valor de y: ");
		   scanf("%f",&y);
		   resultado = soma(x,y);
	       printf("Soma: %f",resultado);
		   break;
		case 2: 
		   printf("\nSubtracao de Valores");
		   printf("Entre com o valor de x: ");
		   scanf("%f",&x);
		   printf("Entre com o valor de y: ");
		   scanf("%f",&y);
		   resultado = subtracao(x,y);
	       printf("Subtracao: %f",resultado);
		   break;	
		case 3:
		   printf("\nMultiplicacao de Valores");
		   printf("Entre com o valor de x: ");
		   scanf("%f",&x);
		   printf("Entre com o valor de y: ");
		   scanf("%f",&y);
		   resultado = multiplicacao(x,y);
	       printf("Multiplicacao: %f",resultado);
		   break;
		case 4:
		   printf("\nDivisao de Valores");
		   printf("Entre com o valor de x: ");
		   scanf("%f",&x);
		   printf("Entre com o valor de y: ");
		   scanf("%f",&y);
		   resultado = divisao(x,y);
	       printf("Divisao: %f",resultado);
		   break;   	
	}
  }
	
}

