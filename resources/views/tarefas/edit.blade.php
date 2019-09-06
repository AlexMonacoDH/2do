<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/tarefas/{{$tarefa['id']}}" method="POST">
        @csrf
        @method('put')
    <input type="text" value="{{$tarefa['texto']}}" name="texto" id="texto" placeholder="Digite a próxima tarefa">
        <button type="submit">Salvar</button>
    </form>
</body>
</html>