<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style_at_02_num.css">
</head>
<body>
    <header>
        <h1>Atividades de PHP Eliel Cruz - Jonatas Anjos Nogueira</h1>
    </header>

    <main>
        <!--Atividade 02-->
        <section>
            <form action="index.php" method="GET">

                Numero 01:<br><input type="number" name="Num_01" placeholder="Digite o primeiro número"><br><br>
                Numero 02:<br><input type="number" name="Num_02" placeholder="Digite o primeiro número"><br><br>

                <button type="submit">Enviar</button><br><br>

                <?php 
                    $Num_01 = $_REQUEST['Num_01'];
                    $Num_02 = $_REQUEST['Num_02'];
                    
                    $Resul = $Num_01 + $Num_02;
                    print("<div class='resultado'>Adição:<br>$Num_01 + $Num_02 = $Resul</div><br><br>");
                    
                    $Resul = $Num_01 - $Num_02;
                    print("<div class='resultado'>Subtração:<br>$Num_01 - $Num_02 = $Resul</div><br><br>");
                    
                    $Resul = $Num_01 * $Num_02;
                    print("<div class='resultado'>Multiplicação:<br>$Num_01 X $Num_02 = $Resul</div><br><br>");

                    $Resul = $Num_01 / $Num_02;
                    print("<div class='resultado'>Divisão:<br>$Num_01 / $Num_02 = $Resul: 2f</div><br><br>");

                    $Resul = $Num_01 % $Num_02;
                    print("<div class='resultado'>Modulo(Resto da divisão):<br>$Num_01 % $Num_02 = $Resul</div><br><br>");

                    $Resul = $Num_01 ** $Num_02;
                    print("<div class='resultado'>Potenciação:<br>$Num_01<sup>$Num_02</sup> = $Resul</div><br><br>");
                    
                ?>
            </form>
        </section> 
    </main>

    <footer>
        <p>&copy; 2025 - Todos os direitos reservados.</p>
        <p>Valeu professor! Obrigado pelas aulas e pela paciência!</p>
        <p>Criado por Jonatas Anjos</p>
    </footer>
</body>
</html>