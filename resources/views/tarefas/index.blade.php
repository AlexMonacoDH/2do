<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>2do list</title>
</head>
<body>
    <div class="container justify-content-center p-5">
        <h3 style="text-align:center"><a href="/tarefas/create">Clique aqui para criar nova tarefa</a></h3>
        <table style="margin:auto; border:2px solid black; background-color:lightblue; border-radius:5px">
            @foreach($tarefas as $t)
            <tr>
                <td>{{$t->texto}}</td>
                <td>
                <a href="/tarefas/{{$t['id']}}/edit">Editar</a>
                <form action="/tarefa/{{$t['id']}}">
                    @csrf
                    @method('delete')
                    <button type="submit">Remover</button>
                </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>