import model.Aluguel;
import model.Caminhao;
import model.Carro;
import model.Moto;

import java.time.LocalDate;
import java.time.LocalDateTime;


public class GerenciarControleAluguel {
    public static void main(String[] args) throws InterruptedException {
        // Instanciando veículos
        Carro carro = new Carro();
        carro.setPlaca("ABC1234");
        carro.setMarca("Fiat");
        carro.setModelo("Uno");
        carro.setAno(2020);
        carro.setCor("Prata");
        carro.setNumeroPortas(4);

        Moto moto = new Moto();
        moto.setPlaca("XYZ9876");
        moto.setMarca("Honda");
        moto.setModelo("CG");
        moto.setAno(2021);
        moto.setCor("Preta");
        moto.setCilindrada(150);

        Caminhao caminhao = new Caminhao();
        caminhao.setPlaca("DEF5678");
        caminhao.setMarca("Volvo");
        caminhao.setModelo("FH");
        caminhao.setAno(2019);
        caminhao.setCor("Azul");
        caminhao.setCapacidadeCarga(5000);


        Aluguel aluguelCarro = new Aluguel();
        aluguelCarro.setIdAluguel(1);
        aluguelCarro.setVeiculo(carro);
        aluguelCarro.setDataAluguel(LocalDate.now());
        aluguelCarro.setHoraAluguel(LocalDateTime.now());
        aluguelCarro.apresentarRegistroAluguel(carro);

        Thread.sleep(1000);


        aluguelCarro.setHoraDevolucao(LocalDateTime.now().plusHours(2));
        System.out.println("Veículo devolvido: Carro");
        System.out.println("Hora de Devolução: " + aluguelCarro.getHoraDevolucao());

        Thread.sleep(1000);


        Aluguel aluguelMoto = new Aluguel();
        aluguelMoto.setIdAluguel(2);
        aluguelMoto.setVeiculo(moto);
        aluguelMoto.setDataAluguel(LocalDate.now());
        aluguelMoto.setHoraAluguel(LocalDateTime.now());
        aluguelMoto.apresentarRegistroAluguel(moto);

        Thread.sleep(1000);


        aluguelMoto.setHoraDevolucao(LocalDateTime.now().plusHours(2));
        System.out.println("Veículo devolvido: Moto");
        System.out.println("Hora de Devolução: " + aluguelMoto.getHoraDevolucao());
        Thread.sleep(1000);


        Aluguel aluguelCaminhao = new Aluguel();
        aluguelCaminhao.setIdAluguel(3);
        aluguelCaminhao.setVeiculo(caminhao);
        aluguelCaminhao.setDataAluguel(LocalDate.now());
        aluguelCaminhao.setHoraAluguel(LocalDateTime.now());
        aluguelCaminhao.apresentarRegistroAluguel(caminhao);

        Thread.sleep(1000); // Atraso de 1 segundo

        // Registrando devolução do caminhão
        aluguelCaminhao.setHoraDevolucao(LocalDateTime.now().plusHours(3));
        System.out.println("Veículo devolvido: Caminhão");
        System.out.println("Hora de Devolução: " + aluguelCaminhao.getHoraDevolucao());
    }
}