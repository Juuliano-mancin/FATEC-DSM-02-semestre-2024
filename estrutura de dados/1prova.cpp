#include <stdio.h>
//Fa�a um programa em C que calcule a �rea de um terreno. 
//O usu�rio deve entrar com a largura e o comprimento do terreno. Considere area = largura * comprimento
int main()
{
	float a, c, l;
	printf("Comprimento do terreno :");
	scanf("%f", &c);
	
	printf("largura do terreno :");
	scanf("%f", &l);
	
	a = l * c;
	
	printf("Area = %2.f", a);
			
}
