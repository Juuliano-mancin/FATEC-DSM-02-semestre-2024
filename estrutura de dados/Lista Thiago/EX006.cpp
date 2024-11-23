#include <stdio.h>

int main()
{
    float horasMes, salarioHora, salarioTotal, horasExtras, valorHoraExtra;


    printf("Digite o número de horas trabalhadas no mês: ");
    scanf("%f", &horasMes);

    printf("Digite o valor da hora de trabalho: ");
    scanf("%f", &salarioHora);

   
    horasExtras = 0;
    salarioTotal = 0;

  
    if (horasMes > 160) {
        horasExtras = horasMes - 160; 
        horasMes = 160; 

   
    valorHoraExtra = salarioHora * 1.5;


    salarioTotal = (horasMes * salarioHora) + (horasExtras * valorHoraExtra);

    
    printf("O salário total do funcionário é de: %.2f reais\n", salarioTotal);

    
    }
}