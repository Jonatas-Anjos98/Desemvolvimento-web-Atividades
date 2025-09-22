<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividades_Eliel_04</title>
    <link rel="stylesheet" href="style_at_04.css">
</head>
<body>
    <header>
        <h1>Atividades de PHP Eliel Cruz - Jonatas Anjos Nogueira</h1>
    </header>
    <main>
        <!--Atividade 01 - Peça ao usuário um número de 1 a 7 e use switch para exibir o dia da semana correspondente (1 = Segunda, 7 = Domingo).-->
        <section>
            <form action="index.php" method="Get">
                Dia: <br><input type="number" name="Dia_01" min="1" max="7" placeholder="1 à 7"><br><br>
                <button type="submit">Enviar</button><br><br>
            </form>
            <?php 
                switch ($_REQUEST['Dia_01']) {
                    case 1:
                        print "Segunda-feira" . "<br><br><br>";
                        break;
                    case 2:
                        print "Terça-feira" . "<br><br><br>";
                        break;
                    case 3:
                        print "Quarta-feira" . "<br><br><br>";
                        break;
                    case 4:
                        print "Quinta-feira" . "<br><br><br>";
                        break;
                    case 5:
                        print "Sexta-feira" . "<br><br><br>";
                        break;
                    case 6:
                        print "Sabado" . "<br><br><br>";
                        break;
                    case 7:
                        print "Domingo" . "<br><br><br>";
                        break;
                    default:
                        print "Digete um número de 1 á 7." . "<br><br><br>";
                }
            ?>
        </section>

        <!--Atividade 02 - Receba uma letra de conceito escolar (A, B, C, D, F) e exiba a mensagem correspondente. - A → Excelente B → Bom,C → Regular, D → Insuficiente e F → Reprovado-->
        <section>
            <form action="index.php" methot="GET">
                Nota: <br><input type="text" name="Nota_01" placeholder="Digite sua nota"><br><br>
                <button type="submit">Enviar</button><br><br>
            </form>
            <?php 
                switch ($_REQUEST['Nota_01']){
                    case 'A':
                    case 'a':
                        print "Excelente" . "<br><br><br>";
                        break;
                    case 'B':
                    case 'b':
                        print "Bom" . "<br><br><br>";
                        break;
                    case 'C':
                    case 'c':
                        print "Regular" . "<br><br><br>";
                        break;
                    case 'D': 
                    case 'd': 
                        print "Insuficiente" . "<br><br><br>";
                        break;
                    case 'F':
                    case 'f':
                        print "Reprovado" . "<br><br><br>";
                        break;
                    default:
                        print "Digite uma nota A, B, C, D, F." . "<br><br><br>";
                    }
            ?>
        </section>

        <!--Atividade 03 - Receba um número de 1 a 12 e mostre o nome do mês correspondente usando switch.-->
        <section>
            <form action="index.php" method="GET">
                Mês do ano: <br><input type="text" name="Mes_01" placeholder="Digite o mês"><br><br>
                <button type="submit">Enviar</button><br><br>
                <?php 
                    switch (@$_REQUEST['Mes_01']) {
                        case '1':
                            print 'Janeiro' . "<br><br><br>";
                            break;
                        case '2':
                            print 'Fevereiro' . "<br><br><br>";
                            break;
                        case '3':
                            print 'Março' . "<br><br><br>";
                            break;
                        case '4':
                            print 'Abril' . "<br><br><br>";
                            break;
                        case '5':
                            print 'Maio' . "<br><br><br>";
                            break;
                        case '6':
                            print 'Junho' . "<br><br><br>";
                            break;
                        case '7':
                            print 'Julho' . "<br><br><br>";
                            break;
                        case '8':
                            print 'Agosto' . "<br><br><br>";
                            break;
                        case '9':
                            print 'Setembro' . "<br><br><br>";
                            break;
                        case '10':
                            print 'Outubro' . "<br><br><br>";
                            break;
                        case '11':
                            print 'Novembro' . "<br><br><br>";
                            break;
                        case '12':
                            print 'Dezembro' . "<br><br><br>";
                            break;
                        default:
                            print "Digite algum número de 1 a 12." . "<br><br><br>";
                    }
                ?>
            </form>
        </section>

        <!--Atividade 04 - Solicite dois números e uma operação (+, -, *, /) e use switch para realizar a operação correta.-->
        <section>
            <form action="index.php" method="GET">
                Número 01: <br><input type="number" name="Num_01" placeholder="Digite um número"><br><br>
                Número 02: <br><input type="number" name="Num_02" placeholder="Digite um número"><br><br>
                Operador: <br><input type="text" name="Oper_01" placeholder="Digite o operador"><br><br>
                <button type="submit">Enviar</button><br><br>
            </form>
            <?php 
                $Num_01 = $_REQUEST['Num_01'];
                $Num_02 = $_REQUEST['Num_02'];
                $Num_02 =9;
                $Resul_Soma = $Num_01 + $Num_02;
                $Resul_Sub = $Num_01 - $Num_02;
                $Resul_Mult = $Num_01 * $Num_02;
                $Resul_Div = $Num_01 / $Num_02;

                switch ($_REQUEST['Oper_01']){
                    case '+':
                        print"A soma do $Num_01 + $Num_02 = $Resul_Soma" . "<br><br><br>";
                        break;
                    case '-':
                        print"A subtração do $Num_01 - $Num_02 = $Resul_Sub" . "<br><br><br>";
                        break;
                    case '*':
                        print"A multiplicação do $Num_01 * $Num_02 = $Resul_Mult" . "<br><br><br>";
                        break;
                    case '/':
                        print"A divisão do $Num_01 / $Num_02 = $Resul_Div" . "<br><br><br>";
                        break;
                    default:
                        print "Digite um operador +, -, *, /." . "<br><br><br>";
                }
            ?>
        </section>

        <!--Atividade 05 - Monte um menu simples com 3 opções: 1 - Cadastrar usuário, 2 - Listar usuários e 3 - Sair. Use switch para exibir a mensagem correspondente.-->
        <section>
            <form action="index.php" method="GET">
                Menu: <br><input type="number" name="Menu_01" min="1" max="3" placeholder="1 à 3"><br><br>
                <button type="submit">Enviar</button><br><br>
            </form>
            <?php 
                switch ($_REQUEST['Menu_01']) {
                    case 1:
                        print "Cadastrar usuário" . "<br><br><br>";
                        break;
                    case 2:
                        print "Listar usuários" . "<br><br><br>";
                        break;
                    case 3:
                        print "Sair" . "<br><br><br>";
                        break;
                    default:
                        print "Digite 1 para cadastrar. Digite 2 para listar usuários. Digite 3 para sair." . "<br><br><br>";
                }
            ?>
        </section>

        <!--Atividade 06 - Peça ao usuário que digite uma faixa etária (crianca, adolescente, adulto, idoso) e use switch para exibir uma descrição.-->
        <section>
            <form action="index.php" method="GET">
                Faixa etária: <br><input type="text" name="Faixa_01" placeholder="Digite sua faixa etária"><br><br>
                <button type="submit">Enviar</button><br><br>
            </form>
            <?php 
                switch ($_REQUEST['Faixa_01']) {
                    case 'crianca':
                        print "Fase marcada pelo crescimento e pelas descobertas, em que o brincar, a curiosidade e os vínculos afetivos são fundamentais para o desenvolvimento." . "<br><br><br>";
                        break;
                    case 'adolescente':
                        print "Período de intensas mudanças físicas e emocionais, de busca por identidade, independência e afirmação diante da família e dos amigos." . "<br><br><br>";
                        break;
                    case 'adulto':
                        print "Etapa de consolidação da autonomia, das responsabilidades profissionais e familiares, em que se busca estabilidade, realizações e equilíbrio de vida." . "<br><br><br>";
                        break;
                    case 'idoso':
                        print "Momento de envelhecimento natural, em que a valorização das memórias, a sabedoria adquirida e o cuidado com a saúde e a qualidade de vida se tornam centrais." . "<br><br><br>";
                        break;
                    default:
                        print "Digite sua faixa etária crianca, adolescente, adulto, idoso." . "<br><br><br>";
                }
            ?>
        </section>

        <!--Atividade 07 - Receba uma letra e use switch para verificar se é vogal ou consoante.-->
        <section>
            <form action="index.php" method="GET">
                Letra: <br><input type="text" name="Text_01" placeholder="Digite uma letra"><br><br>
                <button type="submit">Enviar</button><br><br>
            </form>
            <?php 
                switch ($_REQUEST['Text_01']) {
                    case 'a': case 'A':
                    case 'e': case 'E':
                    case 'i': case 'I':
                    case 'o': case 'O':
                    case 'u': case 'U':
                        print "A sua letra e uma vogal." . "<br><br><br>";
                        break;
                    case 'b': case 'B';
                    case 'c': case 'C';
                    case 'd': case 'D';
                    case 'f': case 'F';
                    case 'g': case 'G';
                    case 'h': case 'H';
                    case 'j': case 'J';
                    case 'k': case 'K';
                    case 'l': case 'L';
                    case 'm': case 'M';
                    case 'n': case 'N';
                    case 'p': case 'P';
                    case 'q': case 'Q';
                    case 'r': case 'R';
                    case 's': case 'S';
                    case 't': case 'T';
                    case 'v': case 'V';
                    case 'x': case 'X';
                    case 'y': case 'Y';
                    case 'w': case 'W';
                    case 'z': case 'Z';
                        print "A sua letra e uma consoante." . "<br><br><br>";
                        break;
                    default:
                        print "Digete qulquer letra do alfabeto.";
                }
            ?>
        </section>

        <!--Atividade 08 - Receba uma cor (vermelho, verde, azul) e exiba uma mensagem personalizada para cada cor.-->
        <section>
            <form action="index.php" method="GET">
                Cor(vermelho, verde, azul): <br><input type="text" name="Text_01" placeholder="Digite uma cor"><br><br>
                <button type="submit">Enviar</button><br><br>
            </form>
            <?php 
                switch ($_REQUEST['Text_01']) {
                    case 'vermelho':
                        print "O vermelho é uma cor intensa e vibrante, associada à paixão, ao amor e à energia. Também pode transmitir sensações de força, coragem e urgência, sendo muito marcante visualmente." . "<br><br><br>";
                        break;
                    case 'verde':
                        print "O verde remete à natureza, à tranquilidade e ao equilíbrio. Está ligado à esperança, ao frescor e à renovação, evocando paz e harmonia." . "<br><br><br>";
                        break;
                    case 'azul':
                        print "O azul transmite calma, serenidade e confiança. É uma cor que inspira estabilidade, profundidade e introspecção, frequentemente associada ao céu e ao mar." . "<br><br><br>";
                        break;
                    
                    default:
                        print "escolha apenas as cores vermelho, verde, azul" . "<br><br><br>";
                }
            ?>
        </section>

        <!--Atividade 09 - Peça uma nota de 0 a 10 e, com switch, classifique em categorias (Perfeito, Muito bom, Aprovado, Recuperação, Reprovado).-->
        <section>
        <form action="index.php" name="Num_01">
            Nota: <br><input type="number" placeholder="1 à 10" min="1" max="10"><br><br>
            <button type="submit">Enviar</button><br><br>
        </form>
        <?php 
            switch ($_REQUEST['Num_01']){
                case 1:
                case 2:
                case 3:
                    print "Reprovado" . "<br><br><br>";
                    break;
                case 4:
                case 5:
                    print "Recuperação" . "<br><br><br>";
                    break;
                case 6:
                case 7:
                    print "Aprovado" . "<br><br><br>";
                    break;
                case 8:
                case 9:
                    print "Muito bom" . "<br><br><br>";
                    break;
                case 9:
                    print "Perfeito" . "<br><br><br>";
                    break;
                default:
                    print "Digite uma nota de 1 a 10." . "<br><br><br>";
            }
        ?>
        </section>

        <!--Atividade 10 - Receba um mês (1 a 12) e use switch para mostrar se o mês tem 30, 31 dias ou se é Fevereiro (28 ou 29).-->
        <section>
            <form action="index.php" method="GET">
                Mes: <br><input type="number" name="Mes_01" placeholder="1 à 12" min="1" max="12"><br><br>
                <button type="submit">Enviar</button><br><br>
            </form>
            <?php 
                switch($_REQUEST['Mes_01']){
                    case 4:
                    case 6:
                    case 9:
                    case 11:
                        print "O mês $Mes_01 tem 30 dias." . "<br><br><br>";
                        break;
                    case 1:
                    case 3:
                    case 5:
                    case 7:
                    case 8:
                    case 10:
                    case 12:
                        print "O mês $Mes_01 tem 31 dias." . "<br><br><br>";
                        break;
                    case 2:
                        print "O mês $Mes_01 tem 28 ou 19 dias." . "<br><br><br>";
                        btrak;
                    default:
                        print "Digite um mês válido" . "<br><br><br>";
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