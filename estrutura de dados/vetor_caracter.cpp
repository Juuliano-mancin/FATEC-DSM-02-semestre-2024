#include<stdio.h>
int main()
{
	
	char nome [30], email[40];
	
	printf ("Digite o nome: ");
	fgets (nome,30, stdin);
	
	printf ("Digite o nome: ");
	fgets (email,40, stdin);
	
	printf ("\n Seu nome: %s", 	nome); // %s tipo string
	printf ("\n Seu email: %s", email);
	
	
}
