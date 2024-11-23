#include <stdio.h>


void Celsius (float f) 
	{
		
		float celsius;
		celsius =(f-32)/1.8;
			
		printf ("\n");
		printf ("\n Resultado: %.2f" , celsius);
}
	
	int main()
	{
		float f;
	
			
		printf ("Temperatura em Fahrenheit:  ");
		scanf ("%f", &f);
		
			
		Celsius(f); 
		
		
	}
