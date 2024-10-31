<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Pi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
   <button class="btn btn-primary">Entrar</button>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>