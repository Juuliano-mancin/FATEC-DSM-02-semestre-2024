import java.util.ArrayList;
import java.util.Scanner;

public class GerenciarFuncionario {
    private ArrayList<Funcionario> funcionarios; // Lista para gerenciar múltiplos funcionários

    // Construtor
    public GerenciarFuncionario() {
        funcionarios = new ArrayList<>(); // Inicializa a lista de funcionários
    }

    // Método principal
    public static void main(String[] args) {
        GerenciarFuncionario gerenciar = new GerenciarFuncionario();
        Scanner scanner = new Scanner(System.in);
        int opcao;

        do {
            System.out.println("Menu:");
            System.out.println("1 - Cadastrar Funcionário");
            System.out.println("2 - Bonificar Funcionário");
            System.out.println("3 - Consultar Funcionário");
            System.out.println("0 - Sair");
            System.out.print("Escolha uma opção: ");
            opcao = scanner.nextInt();
            scanner.nextLine(); // Limpa o buffer

            switch (opcao) {
                case 1:
                    gerenciar.execCadastro(scanner);
                    break;
                case 2:
                    gerenciar.execBonificacao(scanner);
                    break;
                case 3:
                    gerenciar.execConsulta();
                    break;
                case 0:
                    System.out.println("Saindo...");
                    break;
                default:
                    System.out.println("Opção inválida! Tente novamente.");
            }
        } while (opcao != 0);

        scanner.close();
    }

    // Método para executar o cadastro de um funcionário
    public void execCadastro(Scanner scanner) {
        // Coleta as informações do novo funcionário
        System.out.print("Informe o nome do funcionário: ");
        String nome = scanner.nextLine();

        System.out.print("Informe o RG do funcionário: ");
        String rg = scanner.nextLine();

        System.out.print("Informe o departamento do funcionário: ");
        String departamento = scanner.nextLine();

        System.out.print("Informe o salário do funcionário: ");
        double salario = scanner.nextDouble();

        // Cria um novo funcionário com as informações coletadas
        Funcionario novoFuncionario = new Funcionario(departamento, salario, rg, nome, true);
        funcionarios.add(novoFuncionario); // Adiciona o funcionário à lista

        System.out.println("Funcionário cadastrado com sucesso!");
        System.out.println(novoFuncionario); // Exibe as informações do funcionário cadastrado
    }

    // Método para executar a bonificação de um funcionário
    public void execBonificacao(Scanner scanner) {
        System.out.print("Informe o RG do funcionário a ser bonificado: ");
        String rg = scanner.nextLine();

        // Busca o funcionário pelo RG
        Funcionario funcionario = buscarFuncionario(rg);
        if (funcionario != null) {
            // Solicita o valor da bonificação
            System.out.print("Informe o valor da bonificação: ");
            double valorBonificacao = scanner.nextDouble();
            funcionario.bonificar(valorBonificacao);
            System.out.println("Bonificação aplicada com sucesso!");
        } else {
            System.out.println("Funcionário não encontrado.");
        }
    }

    // Método para executar a consulta de um funcionário
    public void execConsulta() {
        System.out.print("Informe o RG do funcionário a ser consultado: ");
        Scanner scanner = new Scanner(System.in);
        String rg = scanner.nextLine();

        Funcionario funcionario = buscarFuncionario(rg);
        if (funcionario != null) {
            System.out.println(funcionario); // Imprime as informações do funcionário
        } else {
            System.out.println("Funcionário não encontrado.");
        }
    }

    // Método para buscar um funcionário pelo RG
    private Funcionario buscarFuncionario(String rg) {
        for (Funcionario f : funcionarios) {
            if (f.toString().contains(rg)) {
                return f; // Retorna o funcionário encontrado
            }
        }
        return null; // Retorna null se não encontrar
    }
}

/*
Este código implementa um sistema simples de gerenciamento de funcionários, onde é possível cadastrar, bonificar e consultar funcionários.

Classe Funcionario:
- Esta classe representa um funcionário, contendo atributos privados que armazenam informações como departamento, salário, RG, nome e status de atividade.
- O método bonificar(double valor) permite aumentar o salário do funcionário, desde que o valor fornecido seja positivo.
- O método toString() foi sobrescrito para retornar uma representação textual das informações do funcionário, facilitando a visualização de seus dados.

Classe GerenciarFuncionario:
- Esta classe gerencia uma lista de funcionários utilizando um ArrayList.
- O método main() apresenta um menu em loop onde o usuário pode escolher entre cadastrar um funcionário, bonificá-lo ou consultá-lo.
- O método execCadastro(Scanner scanner) coleta informações do novo funcionário e o adiciona à lista.
- O método execBonificacao(Scanner scanner) solicita o RG do funcionário a ser bonificado e aplica a bonificação, informando ao usuário sobre o sucesso da operação.
- O método execConsulta() permite consultar um funcionário pelo RG, exibindo suas informações.
- O método privado buscarFuncionario(String rg) é responsável por localizar um funcionário na lista com base no RG fornecido.

Atualizações e Correções:
1. Adicionada uma lista de funcionários utilizando ArrayList para gerenciar múltiplos registros.
2. O Scanner foi passado como parâmetro para os métodos de cadastro, bonificação e consulta.
3. Adicionado um método privado para buscar funcionários pelo RG, aumentando a modularidade do código.
4. Implementação de mensagens informativas para as operações de cadastro, bonificação e consulta.
5. Validação simples de entrada ao permitir a bonificação somente com valores positivos.

*/

