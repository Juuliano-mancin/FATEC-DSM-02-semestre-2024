#include<stdio.h>
#include<stdlib.h>
struct lista
{
	int valor;
	struct lista *prox;
};struct lista *aux, *inicio=NULL, *final=NULL;

struct lista* insere()
{
	int x;
	printf("Entre com um valor para lista: ");
	scanf("%i",&x);
	aux = (struct lista*)malloc(sizeof(struct lista));
	aux->valor = x;
	aux->prox = (struct lista*)NULL;
	if(inicio == NULL)
	{
		inicio = final = aux;
	}
	else
	{
		final->prox = aux;
		final = aux;
	}
	return inicio;
}

void imprime(struct lista *dados)
{
	if(dados == NULL)
	{
		printf("\nLista Vazia");
	}
	else
	{
		aux = dados;
		while(aux != (struct lista*)NULL)
		{
			printf("\nDado da lista: %i",aux->valor);
			aux = aux->prox;
		}
	}
}
struct lista* excluir(struct lista* dados, int valor)
{
	struct lista *ant = NULL;
	int removido;
	aux = dados;
	if(dados == NULL)
	{
		printf("\nLista Vazia");
	}
	else
	{
		while(aux != NULL && aux->valor != valor)
		{
			ant = aux;
			aux = aux->prox;
		}
		if(aux == NULL)
		{
			printf("\nElemento nao encontrado para exclusao");
		}
		if(ant == NULL)
		{
			removido = aux->valor;
			dados = aux->prox;
		}
		else
		{
			removido = aux->valor;
			ant->prox = aux->prox;
		}
		free(aux);
		printf("\nElemento Removido: %i",removido);
		return dados;
	}
}


int main()
{
	int op, remove;
	struct lista *dados;
	while(op!=4)
	{
		printf("\nLista Simplesmente Ligada");
		printf("\nDigite 1 para Inserir");
		printf("\nDigite 2 para Imprimir");
		printf("\nDigite 3 para Remover");
		printf("\nDigite 4 para Sair");
		printf("\nEntre com a opcao: ");
		scanf("%i",&op);
		switch(op)
		{
			case 1: 
				dados = insere();
				break;
			case 2: 
				imprime(dados);
				break;
			case 3:
				printf("\nEntre com valor para remover: ");
				scanf("%i",&remove);
				dados = excluir(dados,remove);
				break;
			case 4:
				exit(1);
		}
	}
}
