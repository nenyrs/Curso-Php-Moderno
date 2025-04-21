<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M01 Aula 35 – Desafio 5</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>
        <p>Curso PHP Moderno com Gustavo Guanabara</p>
        <p>Aluno: Mateus Alves Lopes</p>
    </header>

    <?php
    $saque = $_GET['v1'] ?? 0;
    $valor = $saque;

    $notas = [
        100 => 0,
        50  => 0,
        20  => 0,
        10  => 0,
        5   => 0,
        2   => 0
    ];

    // Cálculo sempre feito, mesmo que o valor seja 0
    if ($valor >= 0 && $valor % 2 == 0) {
        foreach ($notas as $nota => $_) {
            if ($valor >= $nota) {
                $notas[$nota] = intdiv($valor, $nota);
                $valor %= $nota;
            }
        }
    }
    ?>

    <main>
        <h1>Curso PHP Moderno com Gustavo Guanabara</h1>
        <p>Aluno: Mateus Alves Lopes</p>
    </main>

    <section class="flex">
        <h1>Caixa Eletrônico</h1>
        <div>
            <form action="<?= $_SERVER['PHP_SELF']; ?>" method="get" class="formulario">
                <label for="v1">Qual valor você deseja sacar? (R$)</label>
                <input type="number" name="v1" id="v1" value="<?= $saque; ?>" class="input-form">
                <input type="submit" value="Sacar">
            </form>
        </div>

        <div class="formulario">
            <h2>Saque de R$<?= number_format($saque, 2, ',', '.'); ?> realizado</h2>
            <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
            <ul>
                <?php foreach ([100, 50, 20, 10, 5, 2] as $valorNota): ?>
                <li>
                    <img src="img/<?= $valorNota; ?>.webp" alt="Nota de R$<?= $valorNota ?>" style="width:120px;">
                    x<?= $notas[$valorNota] ?>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>

        <?php if ($saque > 0 && $saque % 2 !== 0): ?>
        <div>
            <p style="color: red;">Valor inválido para saque. Só aceitamos valores múltiplos de 2!</p>
        </div>
        <?php endif; ?>
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