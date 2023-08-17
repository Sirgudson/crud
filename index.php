<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-light bg-light menu">
        <div class="container">
            <a href="#" class="navbar-brand">
                CRUD PHP
            </a>
        </div>

    <div class="container">
        <form>
            <div class="row">
                <div class="col-md-3">
                    <label>Nome</label>
                    <input type="text" name="nome" autofocus class="form-control" require/>
                </div>
                <div class="col-md-5">
                    <label>Sobrenome</label>
                    <input type="text" name="sobrenome" class="form-control" require/>
                </div>
                <div class="col-md-2">
                    <label>Idade</label>
                    <input type="number" name="idade" class="form-control" require/>
                </div>
                <div class="col-md-2">
                    <label>Sexo</label>
                    <select name="sexo" id="" class="form-control">
                        <option value="fem" class="fem">Feminino</option>
                        <option value="masc" class="masc">Masculino</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 mt-4">
                <button class="btn btn-primary" name="Cadastrar">Cadastrar</button>
                </div>
            </div>
        </form>
    </div>
    </nav>

    <main>
        <div class="container">
            <?php
            $nome = $_GET["nome"];
            $sobrenome = $_GET["sobrenome"];
            $idade = $_GET["idade"];
            $sexo = $_GET[""];
            ?>
        </div>
    </main> 
</body>
</html>