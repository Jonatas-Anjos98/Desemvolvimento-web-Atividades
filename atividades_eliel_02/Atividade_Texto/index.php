<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade Eliel</title>
    <link rel="stylesheet" href="style_at_02_txt.css">
</head>
<body>
    <header>
        <h1>Atividades de PHP Eliel Cruz - Jonatas Anjos Nogueira</h1>
    </header>

    <main>
        <!-- Atividade 01-->
        <section>
            <form action="index.php" method="GET">
                Nome:<br>
                <input type="text" name="Nome"  placeholder="Digete seu nome"><br><br>
                Ano de Nascimento:<br>
                <input type="number" name="Nasc" placeholder="Digete seu ano de nascimento"><br><br>

                <button type="submit">Enviar</button><br><br>
            </form>
            <?php 
                $Nome = $_REQUEST['Nome'];
                $Nasc = $_REQUEST['Nasc'];
                $Idade = date("Y") - $Nasc;


                print("Seu nome e $Nome E sua idade é $Idade Seja bem vindo ao meu site.<br><br><br>");
            ?>
        </section>

        <!-- Atividade 03-->
        <section>
            <form action="index.php" method="GET" >
                Digite sua mensagem:<br>
                <textarea name="Text_01" placeholder="Escreva um texto"></textarea><br><br>

                <button type="submit">Enviar</button><br><br>
            </form>
            <?php 
                $Text_01 = $_REQUEST['Text_01'];
                $Num_Crts = strlen($Text_01);
                $Num_plvrs = str_word_count($Text_01);
                print("O seu texto tem $Num_Crts letras digitadas e $Num_plvrs palavras digitadas.");
            ?>
        </section>

        <!-- Atividade 04-->
         <section>
            <form action="index.php" method="GET">
                Nome: <br><input type="text" name="Text_01" placholder="Digite seu nome"><br><br>
                Data de nascimento: <br><input type="date" name="Data_01" placehplder="Digite sua idade"><br><br>
                <button type="submit">Enviar</button><br>
            </form>

            <?php 
                $Text_01 = $_REQUEST['Text_01'];
                $Text_02 = $_REQUEST['Data_01'];

                $Senha_01 = $Text_01 . $Text_02;
                $Senha_01 = str_replace(" ","",$Senha_01);
                $Senha_01 = str_replace("-","",$Senha_01);
                $Senha_01 = str_shuffle($Senha_01);
                $Senha_01 = substr($Senha_01,8,8);
                print("<br>Senha: <br>$Senha_01<br><br>")
            ?>
         </section>

         <!-- Atividade 05-->
          <section>
            <form action="index.php" method="GET">
                Mensagem:<br><textarea name="Text_01" placeholder="Digite sua mensagem"></textarea><br><br>
                <button type="submit">Enviar</button><br>
            </form>
            <?php 
                $Text_01 = $_REQUEST['Text_01'];
                print strrev(ucwords($Text_01));
                
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