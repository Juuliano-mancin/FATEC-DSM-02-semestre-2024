#include <stdio.h>

float calcula (float x, float y, char op) // Função calcula retorna um float 
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
			
		return res;
}
	
	int main()
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
			
		res= calcula(x, y, op);
		
		printf ("\n Resultado: %.2f %c %.2f = %.2f",x,op,y,res);	
		 
	}
