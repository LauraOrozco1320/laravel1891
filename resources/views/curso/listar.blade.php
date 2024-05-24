<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 
    <h1>hola desde listar</h1>


    <table>

        @foreach ($cursos as $Curso)
        {{-- creo una fila --}}
        <tr>
            <td>{{$Curso->id}}</td>
            <td>{{$Curso->name}}</td>
            <td>{{$Curso->descripcion}}</td>
            <td><a href="{{route('curso.show', $Curso->id)}}">Mostrar</a></td> 
            <td>
                <form action ="{{route('curso.destroy',$Curso->id)}}"method="POST">
                  @csrf
                 @method('delete')
                 <button type="submit">eliminar </button>
                </form>
            </td>

        </tr>
        @endforeach


</body>
</html>