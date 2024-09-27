#include <stdio.h>

int main()
{
    float salarioAtual, salarioAtualizado;
    printf("-----CALCULADORA DO NOVO SALARIO-----\n");
    printf("Digite seu salario atual: ");
    scanf("%f",&salarioAtual);
    salarioAtualizado = salarioAtual * 1.25;
    printf("Seu salario a partir do mes que vem será:R$%.2f\n",salarioAtualizado);
}
