public class Acampamento {

    public String nome;
    public String equipe; //
    public int idade;

    public void imprimir()
        {
            System.out.println("Nome: " + nome);
            System.out.println("Equipe: " + equipe);
            System.out.println("Idade: " + idade);
        }

    public void separarGrupo()
        {
            if (idade < 6) {
                equipe = "-";  // Condição 1: Idade menor que 6 anos
            } else if (idade >= 6 && idade <= 10) {
                equipe = "A";  // Condição 2: Idade entre 6 e 10 anos
            } else if (idade >= 11 && idade <= 20) {
                equipe = "B";  // Condição 3: Idade entre 11 e 20 anos
            } else {
                equipe = "C";  // Condição 4: Idade maior que 21 anos
            }
        }

}

/*

Classe Acampamento

Esta classe representa um membro de um acampamento, contendo informações relevantes sobre ele,
        como nome, idade e a equipe à qual pertence.

Atributos:
        - nome: Uma String que armazena o nome do membro do acampamento.
- equipe: Um char que representa a equipe a qual o membro pertence. As possíveis equipes são:
        - 'N': Indica que o membro é "Muito novo para estar em uma equipe" (idade menor que 6 anos).
        - 'A': Indica que o membro pertence à Equipe A (idade entre 6 e 10 anos).
        - 'B': Indica que o membro pertence à Equipe B (idade entre 11 e 20 anos).
        - 'C': Indica que o membro pertence à Equipe C (idade maior que 21 anos).
        - idade: Um inteiro que representa a idade do membro do acampamento.

        Métodos:
        - imprimir(): Este método não retorna valor e exibe no console as informações do membro,
incluindo o nome, a equipe e a idade.

- separarGrupo(): Este método também não retorna valor e determina a equipe do membro
com base na sua idade. Ele utiliza uma série de condições (if-else) para classificar
o membro na equipe apropriada de acordo com as faixas etárias definidas.

Uso:
A classe pode ser instanciada em um programa principal onde um objeto do tipo Acampamento
é criado. Após a atribuição de valores aos atributos, o método separarGrupo() é chamado
para definir a equipe correta, seguido do método imprimir() para exibir as informações
do membro.

Esta implementação pode ser útil para sistemas de gerenciamento de acampamentos ou para
educar os usuários sobre Programação Orientada a Objetos (POO), mostrando como classes,
atributos e métodos podem ser utilizados para modelar um cenário do mundo real.

Exemplo de uso:
Acampamento membro = new Acampamento();
membro.nome = "João";
membro.idade = 15;
        membro.separarGrupo();
membro.imprimir();

Ao final, o console exibirá:
Nome: João
Equipe: B
Idade: 15
        */