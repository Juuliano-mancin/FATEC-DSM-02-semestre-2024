/* Implementação de uma Pilha Dinâmica utilizando ponteiro topo para controlar a pilha*/

#include<stdio.h>
#include<conio.h>
#include<stdlib.h>

struct no
{
  int valor;
  struct no* prox;
};
struct no *topo = NULL;

/* função que insere elemento na pilha*/
void push(int i)
{
  struct no *novo = (struct no*) malloc(sizeof(struct no));
  novo->valor = i;
  if(topo == NULL)
    novo->prox = NULL;
  else
    novo->prox = topo;
  topo = novo;
}

/* função que imprime elementos da pilha*/
void imprime()
{
  struct no *aux;
  if(topo != NULL)
  {
    for(aux=topo; aux != NULL; aux=aux->prox)
      printf("valor = %d\n",aux->valor);
  }
  else
    printf("\nTentou imprimir de uma Pilha Vazia");
  getch();
}

int pop()
{
  int valor;
  struct no *aux;
  if(topo != NULL)
  {
    aux = topo;
    valor = topo->valor;
    topo = topo->prox;
    free(aux);
    return valor;
   }
   else
   {
      printf("\nTentou remover de uma Pilha Vazia");
      return 0;
   }
   getche();
}

main()
{
  int op, valor, retorno;

  while(op!=4)
  {
    system("cls");
    printf("Programa para Manipulacao de Pilha\n");
    printf("Digite 1 para Inserir Elemento na Pilha\n");
    printf("Digite 2 para Imprimir a Pilha\n");
    printf("Digite 3 para Remover Elemento da Pilha\n");
    printf("Digite 4 para Sair\n");
    printf("Entre com a opcao desejada: ");
    scanf("%d",&op);

    switch(op)
    {
      case 1:
        printf("Entre com um elemento inteiro para a pilha: ");
        scanf("%d",&valor);
        push(valor);
        break;
      case 2:
        imprime();  break;
      case 3:
        retorno = pop();
        if(retorno != 0)
          printf("\nO valor removido foi: %i",retorno);
        getche();
        break;
      case 4:
        exit(1); break;
      default:
        printf("Opcao Invalida!\n");
    }
  }
}

