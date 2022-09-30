<!DOCTYPE html>
<html lang="pt-br">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>

<body>
    <center>
        <h1>Pessoas:</h1>
        <p>ID: <input type="text" name="id" value="{{$pessoa->id}}" disabled> </p>
        <hr>


        <form action="/editar-pessoa/{{$pessoa->id}}" method="post">
            @csrf
            <label for="lblNome">Nome: </label>
            <input type="text" name="nome" value="{{$pessoa->nome}}" >

            <br><br>

            <label for="lblIdade">Idade: </label>
            <input type="text" name="idade" value="{{$pessoa->idade}}" >

            <br><br>

            <button>Atualizar</button>
        </form>

        <br><br>
        
        <a href="/">Voltar ao início</a>
    </center>
</body>

</html>