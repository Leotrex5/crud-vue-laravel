<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>teste</h1>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>Nome</th>
                <th>email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($workers as $worker)
                <tr>
                    <td>{{ $worker->id }}</td>
                    <td>{{ $worker->name}}</td>
                    <td>{{ $worker->email}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
