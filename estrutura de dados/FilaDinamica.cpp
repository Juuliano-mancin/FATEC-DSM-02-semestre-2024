/* Implementação de Fila Dinâmica utilizando os ponteiros inicio e final para controlar a Fila*/
#include<stdio.h>
#include<conio.h>
#include<stdlib.h>

struct no
{
  int valor;
  struct no* prox;
};
struct no *final = NULL;
struct no *inicio = NULL;

/* função que insere elemento na fila*/
struct no* insere(int i)
{
  struct no *novo = (struct no*)malloc(sizeof(struct no));
  novo->valor = i;
  novo->prox = NULL;
  if(final == NULL)
    inicio = final = novo;
  else
  {
    final->prox = novo;
    final = novo;
  }
}
/* função que imprime elementos da fila*/
void imprime()
{
  struct no *aux;
  if(inicio != NULL)
  {
    for(aux=inicio; aux != NULL; aux=aux->prox)
      printf("valor = %d\n",aux->valor);  
  }
  else
    printf("\nTentou imprimir de uma Fila Vazia");
  getch();
}
/* função que remove elementos da fila*/
int remove()
{
  int valor;
  struct no *aux;
  if(inicio != NULL)
  {
     aux = inicio;
     valor = aux->valor;
     inicio = inicio->prox;
     free(aux);
     return valor;
  }
  else
  {  
      printf("\nTentou remover de uma Fila Vazia");
      return 0;
  }
  getche();
}
/* função principal - main*/
main()
{
  int op, valor, retorno;
  while(op!=4)
  {
    system("cls");
    printf("Programa para Manipulacao de Fila Dinamica\n");
    printf("Digite 1 para Inserir Elemento na Fila\n");
    printf("Digite 2 para Imprimir a Fila\n");
    printf("Digite 3 para Remover\n");
    printf("Digite 4 para Sair\n");
    printf("Entre com a opcao desejada: ");
    scanf("%d",&op);

    switch(op)
    {
      case 1:
        printf("Entre com um elemento inteiro para a fila: ");
        scanf("%d",&valor);
        insere(valor);
        break;
      case 2:
        imprime();  break;
      case 3:
        retorno = remove();
        if(retorno != 0)
          printf("\nO valor de retorno eh: %d",retorno);
        getch();
        break;
      case 4:
        exit(1); break;
      default:
        printf("Opcao Invalida!\n");
    }
  }
}
