<!DOCTYPE html>
<html lang="pt-br">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar</title>

    <style>
        table,td,th {
            border: 1px solid;
            padding: 20px;
            border-collapse: collapse;
        }


    </style>
</head>

<body>

    <center>
        <h1>Listar Usuarios</h1>
        <br><br>

        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Idade</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <!-- Dados do banco -->
                @foreach ($pessoas as $p)
                <tr>
                    <td>{{$p->nome}}</td>
                    <td>{{$p->idade}}</td>
                    <td><button><a href="/editar/{{$p->id}}">Editar</a></button></td>
                    <td><button><a href="/excluir/{{$p->id}}">Excluir</a></button></td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <br><br>
        <a href="/">Voltar</a>
    </center>
</body>

</html>