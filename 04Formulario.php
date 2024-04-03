    <!DOCTYPE html>

    <!-- inicializando projeto com o titulo e importação -->
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Formulário de Sintomas </title>
</head>

<body>
    <h1 style="color: green;"> Formulário de Sintomas de dengue </h1>
        <p style="color: red; "> Questionario</p>
        <p style="color: red; "> Responda o questionario para diagnostico: </p>
        <form action="04EnviaForm.php" method="POST">
        <label for="febre">Febre(°C):</label>
    
        <select name="febre" id="febre">
            <?php
                // Gera as opções para a febre de 36 a 40 graus Celsius
                for ($i = 36; $i <= 40; $i++) {
                    echo "<option value='$i'>$i</option>";
                }
            ?>
        </select><br>


        <!-- recebendo os dados das variaveis  -->
        <label for="dores_musculares">Dores musculares intensas (0 a 10):</label>
        <input type="number" name="dores_musculares" id="dores_musculares" min="0" max="10"><br>

        <label for="dor_movimentar_olhos">Dor ao movimentar os olhos:</label>
        <input type="checkbox" name="dor_movimentar_olhos" id="dor_movimentar_olhos"><br>

        <label for="mal-estar">Mal-estar:</label>
        <input type="checkbox" name="mal-estar" id="mal-estar"><br>

        <label for="falta_apetite">Falta de apetite:</label>
        <input type="checkbox" name="falta_apetite" id="falta_apetite"><br>

        <label for="dor_cabeca">Dor de cabeça:</label>
        <input type="checkbox" name="dor_cabeca" id="dor_cabeca"><br>

        <label for="manchas_corpo">Manchas vermelhas no corpo:</label>
        <input type="checkbox" name="manchas_corpo" id="manchas_corpo"><br><br>

        <input style="color: red;" type="submit" value="Enviar" target="_blanck" >

        <!-- <br><br><a href="www.w3schools.com.br" target="_blanck"> CLique aqui</a> NÃO DA PARA ADD LINK EM PHP -->
    </form>
</body>
</html>