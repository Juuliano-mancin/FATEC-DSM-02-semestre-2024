public class Conta {
    // Atributos públicos da classe Conta
    public String conta;
    public String agencia;
    public double saldo;
    public String nomeCliente;

    // Método para sacar um valor da conta
    public boolean sacar(double valor) {
        if (valor <= saldo) {
            saldo -= valor; // Deduz o valor do saldo
            return true; // Saque realizado com sucesso
        }
        return false; // Saldo insuficiente
    }

    // Método para depositar um valor na conta
    public void depositar(double valor) {
        saldo += valor; // Adiciona o valor ao saldo
    }

    // Método para imprimir as informações da conta
    public void imprimir() {
        System.out.println("Número da Conta: " + conta);
        System.out.println("Número da Agência: " + agencia);
        System.out.println("Nome do Cliente: " + nomeCliente);
        System.out.println("Saldo: R$ " + saldo);
    }
}

/**
 * Classe que representa uma conta bancária.
 *
 * A classe possui os seguintes atributos públicos:
 * - conta: O número da conta bancária (String).
 * - agencia: O número da agência onde a conta está registrada (String).
 * - saldo: O saldo disponível na conta (double).
 * - nomeCliente: O nome do cliente associado à conta (String).
 *
 * Métodos:
 * - sacar(double valor): Realiza um saque na conta, deduzindo o valor do saldo.
 *   Retorna true se o saque for bem-sucedido, ou false se não houver saldo suficiente.
 *
 * - depositar(double valor): Realiza um depósito na conta, adicionando o valor ao saldo.
 *
 * - imprimir(): Imprime as informações da conta, incluindo número da conta,
 *   número da agência, nome do cliente e saldo disponível.
 */


