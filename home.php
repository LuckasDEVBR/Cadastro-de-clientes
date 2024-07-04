<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        body{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-image: linear-gradient(to right, rgb(0,92,197), rgb(90,20,220));
            text-align: center;
            color: black;
            background-image: url(./img/trabalho2.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }
        .box {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-image: linear-gradient(to right, rgb(0,92,197), rgb(90,20,220));
            padding: 30px;
            border-radius: 15px;
        }
        a {
            font-size: 32px;
            text-decoration: none;
            color: white;
            border: 3px solid white;
            border-radius: 10px;
            padding: 10px;
        }
        a:hover{
            background-color: #191970;
        }
        .font{
            position: absolute;
            top: 10%;
            left: 50%;
            transform: translate(-50%, -10%);
            background-image: linear-gradient(to right, rgb(0,92,197), rgb(90,20,220));
            padding: 30px;
            border-radius: 10px;
            color: #fff;
            font-size: 70px;
        }


    </style>
</head>
<body>
    <h1 class="font">Seja bem vindo!</h1>
    <div class="box">
    <a href="login.php">Login</a>
    <a href="form.php">Cadastre-se</a>

    </div>
</body>
</html>