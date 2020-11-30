<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pokemon</title>

    <link href="../../css/app.css" rel="stylesheet">
</head>
<body>
    <table class="table table-striped">
        <tr>
            <td class="text-center"><b>Nome</b></td>
        </tr>
        @foreach ($data as $pokemons)
            <tr>
                <td class="text-center">{{$pokemons['name']}}</td>
            </tr>

        @endforeach
    </table>
    
</body>
</html>