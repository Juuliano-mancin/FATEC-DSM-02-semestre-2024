<?php

$cep = $_POST['cep'];

if (strlen($cep) == 8) {

    $url = "https://viacep.com.br/ws/$cep/json/";

    $response = file_get_contents($url);

    if ($response !== false) {

        $data = json_decode($response, true);
       
        if (!isset($data['erro'])) {
            echo "<p>Endereço encontrado:</p>";
            echo "<ul>";
            echo "<li><strong>Logradouro:</strong> " . $data['logradouro'] . "</li>";
            echo "<li><strong>Bairro:</strong> " . $data['bairro'] . "</li>";
            echo "<li><strong>Cidade:</strong> " . $data['localidade'] . "</li>";
            echo "<li><strong>Estado:</strong> " . $data['uf'] . "</li>";
            echo "</ul>";
        } else {
            echo "<p>CEP não encontrado.</p>";
        }
        } else {
            echo "<p>Erro ao consultar o CEP. Tente novamente mais tarde.</p>";
        }
    } else {

    echo "<p>CEP inválido. Certifique-se de que o CEP tenha 8 dígitos.</p>";
}

?>