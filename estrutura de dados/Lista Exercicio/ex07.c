#include <stdio.h>
#include <locale.h>

int main()
{
	float saldo, debito, credito, conta, deposito;
	int op;
	
	saldo = 0;
	credito = 0;
	debito = 0;
	
	printf ("\nDigite o numero da conta: ");
	scanf ("%f", &conta);
	
	printf ("\n Conta : %f", conta);
	printf ("\n .................");
	printf ("\n 1.....Pagar conta");
	printf ("\n 2.....fazer deposito");
	printf ("\n 3.....consultar saldo");
	printf ("\n 4.....SAIR");
	printf ("\n .................");
	printf (" Selecione uma opcao: ");
	scanf ("%i", &op);
	
	while (op != 4)
	{
	
		switch (op)
		{
			case 1:
				printf ("Valor a ser pago R$: ");
				scanf ("%f",debito);
				saldo -= debito;
				printf ("Operação realizada");
						
			case 2:
				printf ("Valor a ser depositado R$: ");
				scanf ("%f",deposito);
				saldo += deposito;
				break;		
			case 3:
				printf ("\n saldo em conta", saldo);
				if (saldo > 0)
				{printf ("saldo positivo");}
				else 
				{printf ("saldo positivo");}
				break;
			default:
				printf ("Opção invalida");
				break;
		}
	}
		
}
