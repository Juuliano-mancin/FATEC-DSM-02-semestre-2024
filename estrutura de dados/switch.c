//
//  main.c
//  Aulas
//
#include <stdio.h>
int main()
{
    float n1, n2, res;
    int op;
    printf("\nCalculadora");
    printf("\nDigite 1 para Somar");
    printf("\nDigite 2 para Subtrair");
    printf("\nDigite 3 para Multiplicar");
    printf("\nDigite 4 para Dividir");
    printf("\nEntre com a opcao: ");
    scanf("%i",&op);
    if(op == 1 || op == 2 || op == 3 || op == 4)
    {
        printf("\nVamos entrar com os valores!");
        printf("\nEntre com o n1: ");
        scanf("%f",&n1);
        printf("\nEntre com o n2: ");
        scanf("%f",&n2);
        switch(op)
        {
            case 1:
                printf("\nSoma");
                res = n1 + n2;
                printf("\nResultado da Soma: %f",res);
                break;
            case 2:
                printf("\nSubtracao");
                res = n1 - n2;
                printf("\nResultado da Subtracao: %f",res);
                break;
            case 3:
                printf("\nMultiplicacao");
                res = n1 * n2;
                printf("\nResultado da Multiplicacao: %f",res);
                break;
            case 4:
                printf("\nDivisao");
                res = n1 / n2;
                printf("\nResultado da Divisao: %f",res);
                break;
            default:
                printf("\nOpcao Invalida");
                break;
        }
    }
    else{
        printf("\nOpcao Invalida");
    }
}
    
