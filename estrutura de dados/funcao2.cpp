#include<stdio.h>

void calcula(float x, float y, char op)
{
	float resultado;	
	switch(op)
	{
		case '+':
			resultado = x + y;
			printf("\nValor da Soma: %f",resultado);
			break;
		case '-':
			resultado = x - y;
			printf("\nValor da Subtracao: %f",resultado);
			break;
		case '*':
			resultado = x * y;
			printf("\nValor da Multiplicacao: %f",resultado);
			break;
		case '/':
			resultado = x / y;
			printf("\nValor da Divisao: %f",resultado);
			break;
		default:
			printf("\nOperador invalido");
	}
}

int main()
{
	float x, y;
	char op;
	printf("Entre com o valor de x: ");
	scanf("%f",&x);
	printf("\nEntre com o valor de y: ");
	scanf("%f",&y);
	printf("\nEntre com o operador(+,-,*,/): ");
	getchar();
	scanf("%c",&op);
	calcula(x,y,op);
}
