<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style_at_03.css">
</head>
<body>
    <header>
        <h1>Atividades de PHP Eliel Cruz - Jonatas Anjos Nogueira</h1>
    </header>
    
    <main>
        <!--Atividade 01 - Escreva um programa em PHP que receba um número e verifique se ele é positivo, negativo ou zero.-->
        <section>
            <form action="index.php" method="GET">
                Número: <br><input type="number" Name="Num_01" placeholder="Digete um número"><br><br>

                <button type="submit">Enviar</button><br><br>
            </form>

            <?php 
                $Num_01 = $_REQUEST['Num_01'];

                if ($Num_01 > 0) {
                    print "O número $Num_01 e positivo" . "<br><br><br>";
                }elseif($Num_01 < 0){
                    print "O número $Num_01 e negativo" . "<br><br><br>";
                }else {
                    print "Seu numero e 0 " . "<br><br><br>";
                }
            ?>

        </section>

        <!--Atividade 02 - Peça ao usuário a idade e use if/else para verificar: Se for menor que 12 → exiba "Criança". Se estiver entre 12 e 17 → exiba "Adolescente". Se for 18 ou mais → exiba "Adulto".-->
        <section>

            <form action="index.php" method="GET">
                Número:<br><input type="number" name="Idade_01"><br><br>

                <button type="submit">Enviar</button><br><br>
            </form>

            <?php 
                $Idade_01 = $_REQUEST['Idade_01'];
                
                if($Idade_01 < 12 ) {
                    print "Você e menor de Idade" . "<br><br><br>";
                }elseif($Idade_01 > 12 and $Idade_01 <= 17){
                    Print "Você e um adolecente" . "<br><br><br>";
                }else {
                    print "Você e adulto" . "<br><br><br>";
                }
            ?>
        </section>

        <!--Atividade 03 - Receba uma string e verifique se ela está toda em maiúscula (strtoupper) ou toda em minúscula (strtolower). Mostre a mensagem correspondente.-->
        <section>
            <form action="index.php" method="GET">
                Texto: <br><input type="text" name="Texto_01"><br><br>

                <button type="submit">Enviar</button><br><br>
            </form>

            <?php 
                $Texto_01 = $_REQUEST['Texto_01'];

                if($Texto_01 == strtoupper($Texto_01)) {
                    print "A sua mensagem está toda em maiúscula!" . "<br><br><br>";
                }else {
                    print "A sua mensagem está toda em minúscula!" . "<br><br><br>";
                }
            ?>
        </section>

        <!--Atividade 04 - Peça ao usuário que digite um nome e verifique, usando substr(), se a primeira letra é "A" (maiúscula ou minúscula). Exiba "O nome começa com A" ou "O nome não começa com A".-->
        <section>
            <form action="index.php" method="GET">
                Nome: <br><input type="text" name="Texto_01"><br><br>

                <button type="submit">Enviar</button><br><br>
            </form>

            <?php 
                $Texto_01 = $_REQUEST['Texto_01'];

                if(substr ($Texto_01, 0, 1) == "A" || substr ($Texto_01, 0, 1) == "a"){
                    print "O nome começa com A (maiúscula ou minúscula)." . "<br><br><br>";
                }else{
                    print "O nome não começa com A (maiúscula ou minúscula)." . "<br><br><br>";
                }
                
            ?>
        </section>

        <!--Atividade 05 - Solicite um número e use if/else para verificar se ele é par ou ímpar.-->
        <section>
            <form action="index.php" method="POST">
                Número: <br><input type="number" name="Num_01"><br><br>

                <button type="submit">Enviar</button><br><br>
            </form>
            <?php 
                $Num_01 = $_REQUEST['Num_01'];

                if ($Num_01 % 2 == 0 ) {
                    print "O seu número é par!" . "<br><br><br>";
                }else {
                    print "O seu número é impar!" . "<br><br><br>";
                }
            ?>
        </section>

        <!--Atividade 06 - Crie um pequeno sistema de login em que o usuário e a senha corretos são "admin" e "1234". Se ambos coincidirem, exiba "Acesso permitido", senão "Acesso negado".-->
        <section>
            <form action="index.php" method="POST">
                Login: <br><input type="text" name="Texto_01"><br><br>
                Senha: <br><input type="password" name="Senha_01"><br><br>

                <button type="submit">Enviar</button><br><br>
            </form>
            <?php 
                $Texto_01 = $_REQUEST['Texto_01'];
                $Senha_01 = $_REQUEST['Senha_01'];

                const LOGIN = "admin";
                const SENHA = "1234";

                if ($Texto_01 == LOGIN && $Senha_01 == SENHA) {
                    print "acesso permitido" . "<br><br><br>";
                }else{
                    print "acesso negado" . "<br><br><br>";
                }
            ?>
        </section>

        <!--Atividade 07 - Crie um pequeno sistema de login em que o usuário e a senha corretos são "admin" e "1234". Se ambos coincidirem, exiba "Acesso permitido", senão "Acesso negado".-->
        <section>
            <form action="index.php" method="POST">
                Dia da Semana: <br><input type="number" name="Dia_Semana" ><br><br>

                <button type="submit">Enviar</button><br><br>
            </form>
            <?php 
                $Dia_Semana = $_REQUEST['Dia_Semana'];

                if ($Dia_Semana >= 1 and $Dia_Semana <= 5) {
                    print "Hoje e dia $Dia_Semana ou seja é dia útil" . "<br><br><br>";
                }elseif ($Dia_Semana >= 6 and $Dia_Semana <= 7){
                    print "Hoje e dia $Dia_Semana ou seja é fim de semana" . "<br><br><br>";
                }else{
                    Print "Digite um valor de 1 a 7 que são os dias da semana!" . "<br><br><br>";
                }     
            ?>
        </section>

        <!--Atividade 08 - Peça um ano e verifique se é bissexto ou não. (Dica: use a função date("L", strtotime("$ano-01-01"))).-->
        <section>
            <form action="index.php" method="POST">
                Ano: <br><input type="number" name="Data" ><br><br>
                <button type="submit">Enviar</button><br><br>
            </form>
            <?php
                $Data_01 = $_REQUEST['Data'];
                if (date("L", strtotime("$Data_01-01-01")) == 1) { 
                    print "O ano de $Data_01 é bissexto. " . "<br><br><br>";
                }else {
                    print"O ano de $Data_01 não é bissexto." . "<br><br><br>";
                }
            ?>
        </section>
        
        <!--Atividade 09 - Receba duas palavras e verifique se são iguais (mesmo conteúdo). Caso não sejam, exiba qual delas é maior em quantidade de caracteres (strlen).-->
        <section>
            <form action="index.php" method="POST">
                Texto: <br><input type="text" name="Texto_01" ><br><br>
                Texto: <br><input type="text" name="Texto_02" ><br><br>     
                <button type="submit">Enviar</button><br><br>
            </form>
            <?php 
                $Texto_01 = $_REQUEST['Texto_01'];
                $Texto_02 = $_REQUEST['Texto_02'];
                $Num_Crts_Text_01 = strlen($Texto_01);
                $Num_Crts_Text_02 = strlen($Texto_02);

                if ($Texto_01 == $Texto_02) {
                    print "Os seus textos são iguais!" . "<br><br><br>";
                }elseif ($Num_Crts_Text_02 > $Num_Crts_Text_01) {
                    print "O segundo texto e maior posuindo " . strlen($Texto_02) . " letras." . "<br><br><br>";
                }elseif ($Num_Crts_Text_01 > $Num_Crts_Text_02){
                    Print "O primeiro texto e maior posuindo " . strlen($Texto_01) . " letras." . "<br><br><br>";
                }
                
            ?>
        </section>
         
        <!--Atividade 10 - Usando date("H"), verifique a hora atual do sistema e mostre: "Bom dia" se for entre 6h e 11h. "Boa tarde" se for entre 12h e 17h. "Boa noite" se for entre 18h e 23h. "Madrugada" se for entre 0h e 5h.-->
        <section>
            <form action="index.php" method="POST">
                Nome: <br><input type="text" name="Nome_01"><br><br>
                <button type="submit">Enviar</button><br><br>
            </form>
            <?php 
                $Nome = $_REQUEST['Nome_01'];
                $Hora_01 = date("H");
                
                if ($Hora_01 >= 6 and $Hora_01 <= 11) {
                    print "Bom dia $Nome seja bem vindo ao meu site";
                }elseif ($Hora_01 >= 12 and $Hora_01 <= 17){
                    print ("Boa tarde $Nome seja bem vindo ao meu site");
                }elseif ($Hora_01 >= 18 and $Hora_01 <= 23){
                    Print "Boa Noite $Nome seja bem vindo ao meu site";
                }else {
                    Print "Boa madrugada $Nome seja bem vindo ao meu site";
                }

            ?>
        </section>
        
    </main>

    <footer>
        <p>&copy; 2025 - Todos os direitos reservados.</p>
        <p>Valeu professor! Obrigado pelas aulas e pela paciência!</p>
        <p>Criado por Jonatas Anjos</p>
    </footer>

</body>
</html>