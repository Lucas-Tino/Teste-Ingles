<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste de Inglês - Questões</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>


<script type="text/javascript">
    function verificacao() {
        if(document.getElementById('nome').value == "") {
            alert("Informe seu nome.");
        }

        if(document.getElementById('questao1').value == "" ||
            document.getElementById('questao2').value == "" ||
            document.querySelector( 'input[name="questao3"]:checked') == null ||
            document.getElementById('questao4').value == "" ||
            document.querySelector( 'input[name="questao5"]:checked') == null ||
            document.getElementById('questao6').value == ""
        ) {
            alert("Preencha todas as questões.");
        }
    }
</script>


<body class="bg-secondary-subtle">
    <div class="row">
        <div class="col">
            <nav class="bg-primary">
                <p class="text-white fs-2 py-2 text-center">TESTE DE INGLÊS - Questões</p>
            </nav>
        </div>
    </div>

    <form action="resultados.php" method="POST">
        <div class="container bg-light rounded py-3">
            <h1 class="text-center pb-2">Teste de Inglês</h1>
            <h5 class="text-center">Responda a 6 questões relacionadas à língua inglesa e veja sua pontuação ao final do teste.</h5>
            <h5 class="pb-2 text-center">Dificuldade: Fácil</h5>
            <div class="mb-3 px-4">
                <label for="nome" class="form-label fs-5">Informe seu nome antes de começar:</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome..." required>
            </div>
        </div>

        <br>

        <div class="container bg-light rounded py-3">
            <!-- Questão 1 -->
            <div class="mb-3 px-4 pt-3">
                <label for="questao1" class="form-label fs-5">1- Digite o número "two million, five hundred and forty thousand and seventy-three" em forma númerica:</label>
                <input type="number" class="form-control" id="questao1" name="questao1" placeholder="Digite sua resposta..." required>
            </div>

            <!-- Questão 2 -->
            <div class="mb-3 px-4 pt-3">
                <label for="questao2" class="form-label fs-5">2- Como escrevemos o verbo "to buy" no passado?</label>
                <input type="text" class="form-control" id="questao2" name="questao2" placeholder="Digite sua resposta..." required>
            </div>

            <!-- Questão 3 -->
            <div class="mb-3 px-4 pt-3">
                <label for="questao3" class="form-label fs-5">3- "No geral, a língua inglesa não possui acentos". Essa afirmação está correta ou incorreta?</label>
                <br>
                <input class="form-check-input fs-5" type="radio" name="questao3" id="questao3correta" value="correta" required>
                <label class="form-check-label fs-5" for="questao3correta">
                    Correta
                </label>
                <br>
                <input class="form-check-input fs-5" type="radio" name="questao3" id="questao3incorreta" value="incorreta">
                <label class="form-check-label fs-5" for="questao3incorreta">
                    Incorreta
                </label>
            </div>

            <!-- Questão 4 -->
            <div class="mb-3 px-4 pt-3">
                <label for="questao4" class="form-label fs-5">4- Digite a palavra desta sequência que é um falso cognato:
                    <br>
                    <span class="ps-4">Station, imagination, fabric, president, assistance.</span>
                </label>
                <input type="text" class="form-control" id="questao4" name="questao4" placeholder="Digite sua resposta..." required>
            </div>

            <!-- Questão 5 -->
            <div class="mb-3 px-4 pt-3">
                <label for="questao5" class="form-label fs-5">5- Qual é a palavra certa para completar esta frase?
                    <br>
                    <span class="ps-4">"I walked ______ a forest."</span>
                </label>
                <br>
                <input class="form-check-input fs-5" type="radio" name="questao5" id="questao5tough" value="tough" required>
                <label class="form-check-label fs-5" for="questao5tough">
                    Tough
                </label>
                <br>
                <input class="form-check-input fs-5" type="radio" name="questao5" id="questao5throw" value="throw">
                <label class="form-check-label fs-5" for="questao5throw">
                    Throw
                </label>
                <br>
                <input class="form-check-input fs-5" type="radio" name="questao5" id="questao5through" value="through">
                <label class="form-check-label fs-5" for="questao5through">
                    Through
                </label>
                <br>
                <input class="form-check-input fs-5" type="radio" name="questao5" id="questao5thought" value="thought">
                <label class="form-check-label fs-5" for="questao5thought">
                    Thought
                </label>
            </div>

            <!-- Questão 6 -->
            <div class="mb-3 px-4 py-3">
                <label for="questao6" class="form-label fs-5">6- Digite a palavra desta sequência que não tem relação com o corpo humano:
                    <br>
                    <span class="ps-4">Head, arm, heart, wheel, stomach, leg, eye.</span>
                </label>
                <input type="text" class="form-control" id="questao6" name="questao6" placeholder="Digite sua resposta..." required>
            </div>

            <div class="row text-center pb-2">
                <div class="col">
                    <input type="submit" name="Enviar" value="Enviar" class="btn btn-primary btn-lg" onclick="verificacao();">
                    &nbsp;
                    <input type="reset" name="Limpar" value="Limpar" class="btn btn-danger btn-lg">
                </div>
            </div>
        </div>
    </form>
    <br>
</body>
</html>