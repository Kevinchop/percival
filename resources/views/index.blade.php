<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba</title>
</head>
<body>
    <div>Hola Mundo! @php echo(' ::: Mundo lindo') @endphp</div>
    <div>@foreach ($datos as $vectorcito)
        <div>{{ $vectorcito->id }}</div>
        
    @endforeach
    {{-- Esto de abajo es una paginacion del SELECT * del ORM de LARAVEL --}}
    {{ $datos->links() }}</div>
</body>
</html>