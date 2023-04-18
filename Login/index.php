<!DOCTYPE html>
<html lang="pt-BR">
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
        <main>
            <div class="container">
                <div class="box">
                    <h2>Login</h2>
                    <form name="cadastro" method="POST" action="login.php">
                        <label for="email">Email:</label><br>
                        <input class="input" type="email" name="email" id="email" required> <br>
                        <label for="senha">Senha:</label><br>
                        <input class="input" type="password" name="senha" id="senha" required> <br>
                        <br>
                        <input class="botao" type="submit" value="Entrar" id="entrar">
                    </form>
                </div>
            </div>
        </main>
    </body>
</html>
⠀