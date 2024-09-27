import java.util.Scanner;

public class Esfera {
    private double raio;

    public Esfera(double raio) {
        this.raio = raio;
    }

    public double calcularVolume() {
        return (4.0 / 3.0) * Math.PI * Math.pow(raio, 3);
    }

    @Override
    public String toString() {
        return String.format("Raio: %.2f m, Volume: %.2f m³", raio, calcularVolume());
    }

    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        System.out.print("Digite o raio da esfera [metros]: ");

        // Lê a entrada como uma string
        String input = scanner.nextLine();

        try {
            double raio = Double.parseDouble(input); // Tenta converter a string para double

            if (raio < 0) {
                System.out.println("O raio não pode ser negativo.");
            } else {
                Esfera esfera = new Esfera(raio);
                System.out.println(esfera);
            }
        } catch (NumberFormatException e) {
            System.out.println("Entrada inválida. Por favor, insira um número válido para o raio.");
        }

        scanner.close();
    }
}
