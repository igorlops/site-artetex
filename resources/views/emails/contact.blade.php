<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensagem de Contato</title>
</head>
<body>
    <h1>Contato do Site</h1>

    <p>Nome: {{ $data['name'] }}</p>
    <p>Email: {{ $data['email'] }}</p>
    <p>Mensagem: {{ $data['message'] }}</p>
</body>
</html>
