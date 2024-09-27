#include <stdio.h>

int main()
{
    float grauscelsius, fahrenheit;
    
    printf("\nTermômetro");
    printf("\nDigite a temperatura em Graus Celsius: ");
    scanf("%f", &grauscelsius);
    
    fahrenheit = grauscelsius * 1.8 + 32;
    
    printf("\nA temperatura em Celsius transformada para Fahrenheit é %.2f graus.\n", fahrenheit);

    return 0;
}
