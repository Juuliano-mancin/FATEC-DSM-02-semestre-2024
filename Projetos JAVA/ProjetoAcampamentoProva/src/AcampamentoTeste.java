public class AcampamentoTeste {
    public static void main(String[] args) {
        // Criando um objeto da classe Acampamento
        Acampamento membro = new Acampamento();

        // Atribuindo valores aos atributos do objeto
        membro.nome = "João";
        membro.idade = 15;

        // Separar grupo com base na idade
        membro.separarGrupo();

        // Imprimir as informações do membro
        membro.imprimir();
    }
}

/*
Classe AcampamentoTeste

Esta classe contém o método principal (main), que serve como ponto de entrada para o programa.
Ela é responsável por instanciar objetos da classe Acampamento e realizar testes básicos
dos métodos disponíveis nessa classe.

Uso:
- O método main cria vários objetos do tipo Acampamento para testar a funcionalidade da
  lógica de separação de grupos.

Objetos criados:
1. membro1: Um membro chamado "João" com idade de 4 anos. Este membro será classificado
   como "Muito novo para estar em uma equipe" (Equipe 'N').

2. membro2: Um membro chamado "Maria" com idade de 8 anos. Este membro será classificado
   na Equipe 'A', que é para idades entre 6 e 10 anos.

3. membro3: Um membro chamado "Pedro" com idade de 15 anos. Este membro será classificado
   na Equipe 'B', que é para idades entre 11 e 20 anos.

4. membro4: Um membro chamado "Ana" com idade de 25 anos. Este membro será classificado
   na Equipe 'C', que é para idades maiores que 21 anos.

Após a criação de cada objeto, o método separarGrupo() é chamado para determinar
a equipe correspondente à idade do membro. O método imprimir() é então invocado para exibir
as informações de cada membro, que inclui seu nome, a equipe atribuída e a idade.

Exemplo de uso:
Ao executar o programa, a saída será:
Nome: João
Equipe: N
Idade: 4
Nome: Maria
Equipe: A
Idade: 8
Nome: Pedro
Equipe: B
Idade: 15
Nome: Ana
Equipe: C
Idade: 25

Considerações:
Esta classe é fundamental para testar a funcionalidade da classe Acampamento. A adição
de múltiplos membros permite a verificação da lógica de separação de grupos e a exibição
das informações associadas. Novos casos de teste podem ser facilmente adicionados,
modificando os valores atribuídos a 'nome' e 'idade', e observando as saídas resultantes.
*/