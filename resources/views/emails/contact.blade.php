<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo contato do site</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .info {
            margin: 20px 0;
            color: #666;
        }
        .info p {
            margin-bottom: 10px;
        }
        .message {
            padding: 15px;
            background-color: #f9f9f9;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Novo Contato do Site</h1>
        <div class="info">
            <p><strong>Nome:</strong> {{ $data['nome'] }}</p>
            <p><strong>Email:</strong> {{ $data['email'] }}</p>
            <p><strong>Telefone:</strong> {{ $data['telefone'] }}</p>
        </div>
        <div class="message">
            <p><strong>Mensagem:</strong></p>
            <p>{{ $data['mensagem'] }}</p>
        </div>
    </div>
</body>
</html>
