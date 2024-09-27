import java.util.Scanner;

public class ContaTeste {
    // Atributo público chamado cc
    public String cc;
    private Conta conta; // Criação de um objeto Conta para manipulação
    private Scanner scanner; // Scanner para entrada de dados

    public ContaTeste() {
        scanner = new Scanner(System.in); // Inicializa o scanner no construtor
        conta = new Conta(); // Inicializa a conta
    }

    // Método para cadastrar uma nova conta
    public void execCadastrar() {
        System.out.print("Informe o número da conta: ");
        conta.conta = scanner.nextLine(); // Lê o número da conta

        System.out.print("Informe o número da agência: ");
        conta.agencia = scanner.nextLine(); // Lê o número da agência

        System.out.print("Informe o nome do cliente: ");
        conta.nomeCliente = scanner.nextLine(); // Lê o nome do cliente

        conta.saldo = 0.0; // Define o saldo inicial como zero
        System.out.println("Conta cadastrada com sucesso."); // Mensagem de sucesso
    }

    // Método para consultar informações de uma conta
    public void execConsultar() {
        System.out.println("=== Informações da Conta ===");
        conta.imprimir(); // Chama o método imprimir da classe Conta para exibir as informações
    }

    // Método para realizar um saque
    public void execSacar() {
        System.out.print("Informe o valor a ser sacado: ");
        double valor = scanner.nextDouble(); // Lê o valor do saque

        // Tenta realizar o saque usando o método sacar da classe Conta
        if (conta.sacar(valor)) {
            System.out.println("Saque realizado com sucesso.");
        } else {
            System.out.println("Não foi possível realizar o saque. Saldo insuficiente.");
        }
    }

    // Método para realizar um depósito
    public void execDepositar() {
        System.out.print("Informe o valor a ser depositado: ");
        double valor = scanner.nextDouble(); // Lê o valor do depósito

        // Realiza o depósito usando o método depositar da classe Conta
        conta.depositar(valor); // Adiciona o valor ao saldo da conta
        System.out.println("Depósito realizado com sucesso."); // Mensagem de sucesso
    }

    public static void main(String[] args) {
        ContaTeste teste = new ContaTeste(); // Cria uma instância de ContaTeste
        int opcao; // Variável para armazenar a opção escolhida

        do {
            // Exibe o menu de opções
            System.out.println("\n=== Menu ===");
            System.out.println("1 - Cadastrar");
            System.out.println("2 - Depositar");
            System.out.println("3 - Sacar");
            System.out.println("4 - Consultar");
            System.out.println("0 - Sair");
            System.out.print("Escolha uma opção: ");

            // Lê a opção do usuário
            opcao = teste.scanner.nextInt();
            teste.scanner.nextLine(); // Consome a nova linha deixada pelo nextInt()

            // Executa a ação correspondente à opção escolhida
            switch (opcao) {
                case 1:
                    teste.execCadastrar();
                    break;
                case 2:
                    teste.execDepositar();
                    break;
                case 3:
                    teste.execSacar();
                    break;
                case 4:
                    teste.execConsultar();
                    break;
                case 0:
                    System.out.println("Saindo...");
                    break;
                default:
                    System.out.println("Opção inválida! Tente novamente.");
            }
        } while (opcao != 0); // Repete o loop até que a opção 0 seja escolhida

        teste.scanner.close(); // Fecha o scanner para evitar vazamentos de memória
    }
}

/**
 * Classe de teste para a classe Conta, que simula operações bancárias.
 *
 * A classe contém um objeto do tipo Conta e um Scanner para entrada de dados do usuário.
 *
 * Métodos:
 * - execCadastrar(): Solicita ao usuário os dados da conta (número da conta,
 *   número da agência e nome do cliente) e cadastra a conta, definindo o saldo inicial como zero.
 *
 * - execConsultar(): Exibe as informações da conta cadastrada, utilizando o método imprimir da classe Conta.
 *
 * - execSacar(): Solicita ao usuário um valor e executa o método sacar da classe Conta.
 *   Se o saque for realizado com sucesso, exibe uma mensagem de confirmação;
 *   caso contrário, informa que não foi possível realizar o saque devido a saldo insuficiente.
 *
 * - execDepositar(): Solicita ao usuário um valor e executa o método depositar da classe Conta,
 *   adicionando o valor ao saldo e confirmando a operação.
 *
 * O método main() contém um menu em loop que permite ao usuário escolher entre as opções
 * de cadastrar uma conta, depositar, sacar, consultar informações da conta ou sair.
 */

