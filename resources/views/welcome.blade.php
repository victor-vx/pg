<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Pi</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        body{
            align-items: center;
            justify-content: center;
            display: flex;
            height: 100vh;
        }

        .div-home{
            background-color: black;
            width: 500px;
            height: 400px;
            border-radius: 10px;
        }
        .div-home form{
            display: flex;
            flex-direction: column;
            gap: 20px;
            align-items: center;
            justify-content: center;
            height: 35vh;
        }
        .div-home form input{
            padding: 15px;
            width: 400px;
            border-radius: 10px;
            border: none;
        }
        .submit{
            background-color: black;
            color: white;
            font-size: 20px;
        }
        .div-home ::placeholder{
            color: black;
            font-size: 18px;
        }

    </style>
</head>
<body>
    <div class="div-home">
        <form>
            <input type="text" placeholder="Usuario">
            <input type="password" placeholder="Senha">
            <input class="submit" type="submit" value="Entrar">
        </form>
    </div>
</body>
</html>