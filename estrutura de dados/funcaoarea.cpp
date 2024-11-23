#include<stdio.h>

float area(float r)
{
	float A;
	A = 3.14*(r*r);
	return A;
}

int main()
{
	float r, A;
	printf("Entre com o raio: ");
	scanf("%f",&r);
	A = area(r);
	printf("\nA area calculada: %f",A);
}
