#include <stdio.h>

// || x, y e op || s�o os parametr�s que est�o sendo recebidos pela fun��o calcula, enviadas do Main
void calcula (float x, float y, char op) 
	{
	
		float res;
			
		switch (op)
			{
				case '+':
					res = x + y;
					break;
					
				case '-':
					res = x - y;
					break;
					
				case '*':
					res = x * y;
					break;
					
				case '/':
					res = x /y;
					break;
					
				default:
					"\n operador invalido.";
			}
			
		printf ("\n");
		printf ("\n Resultado: %.2f" ,res);
}
	
	int main()
	{
		// Adicionando a funcionalidade de entrar dados para o MAIN
			
		float x, y;
		char op;
			
		printf ("Entre com o valor de x: ");
		scanf ("%f", &x);
		
		
		printf ("\n Entre com o valor de y: ");
		scanf ("%f", &y);
		
		printf ("\n Entre com o operador: ");
		getchar();
		scanf ("%c", &op);
			
		calcula(x, y, op); // Enviando os dados para a fun��o calcula.
		
		
	}
