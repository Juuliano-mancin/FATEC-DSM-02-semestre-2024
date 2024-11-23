#include <stdio.h>

void calcula ()
	{
	
		float x, y, res;
		char op;
		
		printf ("Entre com o valor de x: ");
		scanf ("%f", &x);
		
		
		printf ("\n Entre com o valor de y: ");
		scanf ("%f", &y);
		
		printf ("\n Entre com o operador: ");
		getchar();
		scanf ("%c", &op);
		
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
			calcula();
		}
