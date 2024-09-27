public class ComputadorTeste {
    public static void main(String[] args) {
        // Criando um objeto Computador para cada condição
        Computador computadorHP = new Computador();
        computadorHP.marca = "HP";
        computadorHP.cor = "Preto";
        computadorHP.modelo = "Pavilion";
        computadorHP.numeroSerie = "HP123456";
        computadorHP.preco = 2000.00;

        Computador computadorIBM = new Computador();
        computadorIBM.marca = "IBM";
        computadorIBM.cor = "Cinza";
        computadorIBM.modelo = "ThinkPad";
        computadorIBM.numeroSerie = "IBM123456";
        computadorIBM.preco = 3000.00;

        Computador computadorOutro = new Computador();
        computadorOutro.marca = "Acer";
        computadorOutro.cor = "Branco";
        computadorOutro.modelo = "Aspire";
        computadorOutro.numeroSerie = "ACR123456";
        computadorOutro.preco = 1500.00;

        // Alterando os valores dos computadores
        computadorHP.alterarValor(2500.00);
        computadorIBM.alterarValor(3500.00);
        computadorOutro.alterarValor(1800.00);

        // Imprimindo as informações dos computadores
        System.out.println("Informações do Computador HP:");
        computadorHP.imprimir();
        System.out.println("Valor com ajuste: R$ " + computadorHP.calcularValor());

        System.out.println("\nInformações do Computador IBM:");
        computadorIBM.imprimir();
        System.out.println("Valor com ajuste: R$ " + computadorIBM.calcularValor());

        System.out.println("\nInformações do Computador Outro:");
        computadorOutro.imprimir();
        System.out.println("Valor com ajuste: R$ " + computadorOutro.calcularValor());
    }
}

/*
 * Classe: ComputadorTeste
 *
 * A classe ComputadorTeste contém o método principal (main) que serve como ponto de
 * entrada para o programa. Nela, são criados objetos da classe Computador e testadas
 * suas funcionalidades.
 *
 * Objetivos:
 * - Criar instâncias da classe Computador para diferentes marcas e características,
 *   como "HP", "IBM" e uma marca diferente.
 * - Alterar o preço de cada objeto utilizando o método alterarValor().
 * - Imprimir os detalhes de cada computador, juntamente com o preço calculado utilizando
 *   o método calcularValor().
 *
 * Este teste é útil para validar se a classe Computador está funcionando corretamente
 * e se os métodos implementados estão operando como esperado. Pode ser expandido para
 * incluir mais testes e cenários conforme o desenvolvimento do projeto avança.
 */
