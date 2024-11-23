//
//  main.c
//  Aulas
//
#include <stdio.h>
#include <locale.h>
int main()
{
    setlocale(LC_ALL, "Portuguese");
    float peso, altura, imc;
    int x,quantidade;
    x=0;
    printf("Cálculo de IMC");
    printf("\nQuantos IMCs deseja calcular: ");
    scanf("%i",&quantidade);
    while(x < quantidade)
    {
        printf("\nPaciente: %i",x);
        printf("\nEntre com o peso: ");
        scanf("%f",&peso);
        printf("\nEntre com a altura: ");
        scanf("%f",&altura);
        imc = peso/(altura*altura);
        printf("IMC: %f",imc);
        if(imc <= 18.5)
        {
            printf("\nAbaixo do peso ideal");
        }
        else if(imc > 18.5 && imc <= 24.99)
        {
            printf("\nPeso ideal");
        }
        else if(imc > 24.99 && imc <= 29.99)
        {
            printf("\nSobrepeso");
        }
        else
        {
            printf("\nObesidade");
        }
        x++;
    }
}
