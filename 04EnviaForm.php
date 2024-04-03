<?php
    

    //QUESTAO 4 - FORMULARIO PHP

// Verifica se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

// Conta quantas opções foram selecionadas
        $opcoes_selecionadas = 0;
        echo("DIAGNOSTICO: ");

        if(isset($_POST['febre'])) $opcoes_selecionadas++;
        if(isset($_POST['dores_musculares'])) $opcoes_selecionadas++;
        if(isset($_POST['dor_movimentar_olhos'])) $opcoes_selecionadas++;
        if(isset($_POST['mal-estar'])) $opcoes_selecionadas++;
        if(isset($_POST['falta_apetite'])) $opcoes_selecionadas++;
        if(isset($_POST['dor_cabeca'])) $opcoes_selecionadas++;
        if(isset($_POST['manchas_corpo'])) $opcoes_selecionadas++;


// Define a mensagem correspondente
    if ($opcoes_selecionadas == 7) {
        echo ("Você está com dengue.");

    } elseif ($opcoes_selecionadas >= 3) {
        echo "Você está com suspeita de dengue.";

    } else {
        echo "Você não está com dengue.";

    }
    } else {
    // Se o formulário não foi enviado, exibir uma mensagem de erro
        echo  "Erro: O formulário não foi enviado.";
    }


?>