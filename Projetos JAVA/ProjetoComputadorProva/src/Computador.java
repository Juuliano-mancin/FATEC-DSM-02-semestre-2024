public class Computador {

        // Atributos públicos da classe Computador
        public String marca;
        public String cor;
        public String modelo;
        public String numeroSerie;
        public double preco;

        // Método para imprimir as informações do computador
        public void imprimir() {
            System.out.println("Marca: " + marca);
            System.out.println("Cor: " + cor);
            System.out.println("Modelo: " + modelo);
            System.out.println("Número de Série: " + numeroSerie);
            System.out.println("Preço: R$ " + preco);
        }

        // Método para calcular o valor do computador com base na marca
        public double calcularValor() {
            if (marca.equalsIgnoreCase("HP")) {
                preco *= 1.3; // Aumenta o preço em 30% para a marca HP
            } else if (marca.equalsIgnoreCase("IBM")) {
                preco *= 1.5; // Aumenta o preço em 50% para a marca IBM
            }
            return preco; // Retorna o preço atualizado
        }

        // Método para alterar o valor do computador
        public void alterarValor(double novoPreco) {
            preco = novoPreco; // Atualiza o preço com o novo valor fornecido
        }
    }

/*
 * Classe: Computador
 *
 * A classe Computador representa um computador com atributos como marca, cor, modelo,
 * número de série e preço. É uma implementação básica que permite a manipulação e
 * exibição de informações sobre computadores.
 *
 * Atributos:
 * - String marca: Armazena a marca do computador (ex: "HP", "IBM").
 * - String cor: Armazena a cor do computador (ex: "Preto", "Branco").
 * - String modelo: Armazena o modelo do computador (ex: "Pavilion", "ThinkPad").
 * - String numeroSerie: Armazena o número de série único do computador.
 * - double preco: Armazena o preço do computador.
 *
 * Métodos:
 * - void imprimir(): Imprime os detalhes do computador, incluindo marca, cor, modelo,
 *   número de série e preço.
 * - double calcularValor(): Calcula o preço do computador com base na marca. Se a
 *   marca for "HP", aumenta o preço em 30%. Se for "IBM", aumenta em 50%. Para
 *   outras marcas, mantém o preço atual.
 * - void alterarValor(double novoPreco): Atualiza o preço do computador para o novo
 *   valor fornecido.
 *
 * Esta classe é uma base para manipular informações de computadores em um sistema
 * maior, podendo ser expandida com mais funcionalidades no futuro.
 */

