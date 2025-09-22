<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividades_Eliel_01</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>

    <header>

        <h1>Atividades de PHP Eliel Cruz - Jonatas Anjos Nogueira</h1>
        
    </header>

    <main>
<!-- Atividade 01-->
        <section>
            <p><strong>Atividade 01</strong> - Usando as variáveis, faça um algoritmo que receba seu nome completo e ano de seu nascimento em variáveis e apresente a seguinte mensagem. Meu nome é -- e tenho -- anos.</p>

            <?php

                $nome = "Jonatas Anjos Nogueira";   
                $data_nascimento = 2005;
                $idade_atual = 2025 - $data_nascimento;
                
                print "Meu nome e $nome e tenho $idade_atual anos. <br><br>";

            ?>
        </section>

<!-- Atividade 02-->
        <section>
            <p><strong>Atividade 02</strong> - Faça um algoritmo que calcule 2 números nos 6 operadores aritméticos.</p>

            
            <?php 
                $a = 4;
                $b = 5;
                $c = $a + $b;
                $d = $a - $b;
                $e = $a * $b;
                $f = $a / $b;
                $g = $a % $b;
                $h = $a ** $b;

                echo "a = $a e b = $b <br><br>";

                echo "A adição de a e b e igual a $c <br>";
                echo "A subtração de a e b e igual a $d <br>";
                echo "A multiplicação de a e b e igual a $e <br>";
                echo "A divisão de a e b e igual a $f <br>";
                echo "O resto da divisão de a e b e igual a $g <br>";
                echo "A exponenciação de a e b e igual a $h <br><br>";
            ?>
        </section>

<!-- Atividade 03-->
        <section>
            <p><strong>Atividade 03</strong> - Faça um algoritmo que receba um texto Lorem Ipsum e diga quantas palavras e quantas letras possuem o texto.</p>

            <?php
                $txt = "lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

                print "<strong>Texto original:</strong> <br>$txt<br><br>";

                $caracteres = strlen($txt);
                $palavras = str_word_count($txt);
                print "O texto apresentado possue $caracteres letras  e $palavras palavras." . "<br><br>";
            ?>
        </section>

<!-- Atividade 04-->
        <section>
            <P><strong>Atividade 04 </strong> - Faça um algoritmo que receba seu nome e data de nascimento e crie uma senha de 8 dígitos com base nestes dados.</P>

            <?php 
                $txt = "jonatas Anjos 18012005";

                $senha_segura = substr($txt,8,8);

                print str_shuffle($senha_segura)."<br><br>";
            ?>
        </section>
        
<!-- Atividade 05-->
        <section>
            <p><strong>Atividade 05</strong> - Faça um algoritmo que escreva um texto Lorem Ipsum ao contrário e com as iniciais de cada palavra em maiúsculo.</p>
            
            <?php 
                $txt = "lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

                print "<strong>Texto original:</strong> <br>$txt<br><br>";

                print strrev(ucwords($txt)) . "<br><br>";   
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