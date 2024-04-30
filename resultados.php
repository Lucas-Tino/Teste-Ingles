<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste de Inglês - Resultados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>


<?php
    $resultados = array("Placeholder");
    $quant = 0;

    // Questão 1
    if ($_POST['questao1'] == 2540073) {
        $resultados[0] = "<p class='text-success ps-4 fs-4'>Questão 1 - ✓</p>";
        $quant++;
    } else {
        $resultados[0] = "<p class='text-danger ps-4 fs-4'>Questão 1 - 🗙</p>";
    }

    // Questão 2
    if (strtolower($_POST['questao2']) == "bought") {
        $resultados[1] = "<p class='text-success ps-4 fs-4'>Questão 2 - ✓</p>";
        $quant++;
    } else {
        $resultados[1] = "<p class='text-danger ps-4 fs-4'>Questão 2 - 🗙</p>";
    }

    // Questão 3
    if ($_POST['questao3'] == "correta") {
        $resultados[2] = "<p class='text-success ps-4 fs-4'>Questão 3 - ✓</p>";
        $quant++;
    } else {
        $resultados[2] = "<p class='text-danger ps-4 fs-4'>Questão 3 - 🗙</p>";
    }

    // Questão 4
    if (strtolower($_POST['questao4']) == "fabric") {
        $resultados[3] = "<p class='text-success ps-4 fs-4'>Questão 4 - ✓</p>";
        $quant++;
    } else {
        $resultados[3] = "<p class='text-danger ps-4 fs-4'>Questão 4 - 🗙</p>";
    }

    // Questão 5
    if (strtolower($_POST['questao5']) == "through") {
        $resultados[4] = "<p class='text-success ps-4 fs-4'>Questão 5 - ✓</p>";
        $quant++;
    } else {
        $resultados[4] = "<p class='text-danger ps-4 fs-4'>Questão 5 - 🗙</p>";
    }

    // Questão 6
    if (strtolower($_POST['questao6']) == "wheel") {
        $resultados[5] = "<p class='text-success ps-4 fs-4'>Questão 6 - ✓</p>";
        $quant++;
    } else {
        $resultados[5] = "<p class='text-danger ps-4 fs-4'>Questão 6 - 🗙</p>";
    }

?>


<body class="bg-secondary-subtle">
    <div class="row">
        <div class="col">
            <nav class="bg-primary">
                <p class="text-white fs-2 py-2 text-center">TESTE DE INGLÊS - Resultados</p>
            </nav>
        </div>
    </div>

    <div class="container bg-light rounded py-3">
        <h1 class="text-center pb-2">Seus Resultados:</h1>
        <?php echo "<h5 class='text-center'>" . $_POST['nome'] . ", você acertou " . $quant . " questões!</h5>";?>
        <h5 class="pb-2 text-center">Confira a seguir:</h5>

        <div class="row text-center">
            <div class="col">
                <?php
                    for ($i = 0; $i <= 2; $i++) {
                        echo $resultados[$i] . "<br>";
                    }
                ?>
            </div>
            <div class="col">
                <?php
                    for ($i = 3; $i <= 5; $i++) {
                        echo $resultados[$i] . "<br>";
                    }
                ?>
            </div>
        </div>
        
        <div class="row text-center pb-2">
            <div class="col">
                <a href="index.php" class="btn btn-primary btn-lg">Tentar novamente</a>
            </div>
        </div>
    </div>
</body>
</html>