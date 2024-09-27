public class Funcionario {
    private String departamento;
    private double salario;
    private String rg;
    private String nome;
    private boolean ativo;

    // Construtor
    public Funcionario(String departamento, double salario, String rg, String nome, boolean ativo) {
        this.departamento = departamento;
        this.salario = salario;
        this.rg = rg;
        this.nome = nome;
        this.ativo = ativo;
    }

    // Método para bonificar o salário do funcionário
    public void bonificar(double valor) {
        if (valor > 0) {
            salario += valor; // Aumenta o salário pela bonificação
        } else {
            System.out.println("Valor da bonificação deve ser positivo.");
        }
    }

    // Método toString para listar informações do funcionário
    @Override
    public String toString() {
        return "Funcionário {" +
                "Nome: '" + nome + '\'' +
                ", RG: '" + rg + '\'' +
                ", Departamento: '" + departamento + '\'' +
                ", Salário: R$ " + salario +
                ", Ativo: " + (ativo ? "Sim" : "Não") +
                '}';
    }
}

