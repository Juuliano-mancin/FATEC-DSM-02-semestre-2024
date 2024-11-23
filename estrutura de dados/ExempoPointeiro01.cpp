#include <stdio.h>
void altera (int *px, int *py)
{
	*px = *px + 10;
	*py = *py + 10; //
}
int main()
{
	int x = 4,y = 7; // valores iniciais de x e y
	altera (&x, &y);
	printf ("valor de x: %i. Valor de y: %i", x,y);
}
