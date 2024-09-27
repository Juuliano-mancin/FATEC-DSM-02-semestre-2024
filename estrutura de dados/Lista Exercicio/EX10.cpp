#include <stdio.h>

int main()
{
    float larguraCaixa,alturaCaixa,comprimentoCaixa,volumeCaixa;
    printf("Digite o comprimento da caixa: \n");
    scanf("%f",&comprimentoCaixa);
    printf("Digite a largura da caixa: \n");
    scanf("%f",&larguraCaixa);
    printf("Digite a altura da caixa: \n");
    scanf("%f",&alturaCaixa);

    volumeCaixa = comprimentoCaixa * larguraCaixa * alturaCaixa;

    printf("Volume da caixa retangular é:%.2f\n",volumeCaixa);
}

