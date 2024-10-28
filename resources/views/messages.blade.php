<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensajes</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Prueba superada</h1>
        @if($messages->isEmpty())
            <p>No hay mensajes en la base de datos</p>
        @else
            <table border="1">
                <thead>
                    <tr>
                        <th>Mensaje</th>
                        <th>Editar mensaje</th>
                    </tr>
                </thead>
                @foreach($messages as $message)
                    <tbody>
                        <tr>
                            @if($message->negrita==true && $message->subrayado==true)
                                <td><b><u>{{$message->text}}</u></b></td>
                            @elseif($message->negrita==true)
                                <td><b>{{$message->text}}</b></td>
                            @elseif($message->subrayado==true)
                                <td><u>{{$message->text}}</u></td>
                            @else
                                <td>{{$message->text}}</td>
                            @endif
                            <td>
                                <form action="{{ route('edicion.solicitud', $message->id) }}" method="POST">
                                    @csrf
                                    <button type="submit">Editar duda</button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
        @endif

        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif
    </div>
</body>
</html>