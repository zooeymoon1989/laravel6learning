<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pipelines</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>
<body>
    <ul>
        @foreach($pipelines as $pipeline)
            <li>{{$pipeline->title}} -- {{$pipeline->active}}</li>
        @endforeach
    </ul>
</body>
</html>
