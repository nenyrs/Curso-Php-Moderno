<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M01 Aula 26 – Funções aritméticas</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>
        <p>Curso PHP Moderno com Gustavo Guanabara</p>
        <p>Aluno: Mateus Alves Lopes</p>
    </header>

    <section>
        <h1>Funções aritméticas</h1>
        <br>
        <div>
            <h2>Algorítmo Computacionais</h2>
            <p>São passos a serem seguidos por um módulo processador e seus respectivos usuários que, quando executados
                na ordem correta, conseguem realizar determinada tarefa.</p>
        </div>

        <div>
            <h2>Outras operações aritmétricas</h2>
            <br>
            <p>abs() - Retorna o valor absoluto de um número</p>
            <p>base_convert() - Converte um número entre bases</p>
            <p>ceil() - Arredonda para o número inteiro mais proximo</p>
            <p>floor() - Arredonda para o número inteiro mais antigo</p>
            <p>round() - Arredonda um número para o número inteiro mais proximo</p>
            <p>hypot() - Retorna o valor da hipotenusa</p>
            <p>intdiv() - Retorna o quociente e o resto de dividir x por y</p>
            <p>min() - Retorna o menor valor entre x e y</p>
            <p>max() - Retorna o maior valor entre x e y</p>
            <p>pi() - Retorna o valor de pi</p>
            <p>pow() - Retorna o valor de x elevado a y</p>
            <p>sin() - Retorna o seno de um número</p>
            <p>cos() - Retorna o cosseno de um número</p>
            <p>tan() - Retorna o tangente de um número</p>
            <p>rand() - Retorna um número aleatório entre x e y</p>
            <p>sqrt() - Retorna a raiz quadrada de um número</p>
        </div>

        <div>
            <h2>Exemplos em PHP</h2>
            <br>
            <div>
                <p>abs() - Retorna o valor absoluto de um número ( $abs = abs(-10);) </p>
                <br>
                <?php
                $abs = abs(-10);
                echo $abs;
                ?>
                <hr>

                <p>base_convert() - Converte um número entre bases ( $base = base_convert(10, 2, 8); )</p>
                <br>
                <?php
                $base = base_convert(10, 2, 8);
                echo $base;
                ?>
                <hr>

                <p>ceil() - Arredonda para o número inteiro mais proximo ( $ceil = ceil(10.2); )</p>
                <br>
                <?php
                $ceil = ceil(10.2);
                echo $ceil;
                ?>
                <hr>

                <p>floor() - Arredonda para o número inteiro mais antigo ( $floor = floor(10.2); )</p>
                <br>
                <?php
                $floor = floor(10.2);
                echo $floor;
                ?>
                <hr>

                <p>round() - Arredonda um número para o número inteiro mais proximo ( $round = round(10.2); )</p>
                <br>
                <?php
                $round = round(10.2);
                echo $round;
                ?>
                <hr>

                <p>hypot() - Retorna o valor da hipotenusa ( $hypot = hypot(3, 4); )</p>
                <br>
                <?php
                $hypot = hypot(3, 4);
                echo $hypot;
                ?>
                <hr>

                <p>intdiv() - Retorna o quociente e o resto de dividir x por y ( $intdiv = intdiv(10, 3); )</p>
                <br>
                <?php
                $intdiv = intdiv(10, 3);
                echo $intdiv;
                ?>
                <hr>

                <p>min() - Retorna o menor valor entre x e y ( $min = min(10, 3); )</p>
                <br>
                <?php
                $min = min(10, 3);
                echo $min;
                ?>
                <hr>

                <p>max() - Retorna o maior valor entre x e y ( $max = max(10, 3); )</p>
                <br>
                <?php
                $max = max(10, 3);
                echo $max;
                ?>
                <hr>

                <p>pi() - Retorna o valor de pi ( $pi = pi(); )</p>
                <br>
                <?php
                $pi = pi();
                echo $pi;
                ?>
                <hr>

                <p>pow() - Retorna o valor de x elevado a y ( $pow = pow(2, 3); )</p>
                <br>
                <?php
                $pow = pow(2, 3);
                echo $pow;
                ?>
                <hr>

                <p>sin() - Retorna o seno de um número ( $sin = sin(90); )</p>
                <br>
                <?php
                $sin = sin(90);
                echo $sin;
                ?>
                <hr>

                <p>cos() - Retorna o cosseno de um número ( $cos = cos(90); )</p>
                <br>
                <?php
                $cos = cos(90);
                echo $cos;
                ?>
                <hr>

                <p>tan() - Retorna o tangente de um número ( $tan = tan(90); )</p>
                <br>
                <?php
                $tan = tan(90);
                echo $tan;
                ?>
                <hr>

                <p>rand() - Retorna um número aleatório entre x e y ( $rand = rand(1, 10); )</p>
                <br>
                <?php
                $rand = rand(1, 10);
                echo $rand;
                ?>
                <hr>

                <p>sqrt() - Retorna a raiz quadrada de um número ( $sqrt = sqrt(4); )</p>
                <br>
                <?php
                $sqrt = sqrt(4);
                echo $sqrt;
                ?>
                <hr>
            </div>

        </div>

        </div>

    </section>

    <footer>
        <p>Copyright&copy; <?= date('Y'); ?> - Todos os direitos reservados | Desenvolvido com ❤ e ☕︎ por <a
                href="https://codech.com.br/">Mateus Lopes</a></p>
        <div class="social">
            <a href="https://www.linkedin.com/in/mateus-lopes-b76a31270/" target="_blank">
                <img src="https://img.icons8.com/?size=100&id=13930&format=png&color=000000" alt="LinkedIn"
                    style="width: 40px; height: 40px;"></a>

            <a href="https://www.behance.net/mateuslopes17" target="_blank">
                <img src="https://img.icons8.com/?size=100&id=13655&format=png&color=000000" alt="Behance"
                    style="width: 40px; height: 40px;"></a>

            <a href="https://github.com/nenyrs" target="_blank">
                <img src="https://img.icons8.com/?size=100&id=63777&format=png&color=000000" alt="GitHub"
                    style="width: 40px; height: 40px;"></a>
        </div>
    </footer>
</body>

</html>