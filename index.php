<?php

    require_once "./functions.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            background-color: rgb(0, 0, 50);
            text-align: center;
            
        }

        h1 {
            margin-top: 4rem;
            color: gray;
        }

        h2 {
            color: white;
        }

        .container {
            margin: 0 auto;
            display: flex;
            flex-direction: column;
        }

        form {
            background-color: white;

            width: 500px;
            height: 300px;
            border-radius: 10px;

            margin-inline: auto;
            padding-left: 30px;
            padding-right: 50px;
            padding-block: 30px;

            display: flex;
            justify-content: space-between;

            && div{
                display:flex;
                flex-direction: column;
            }
        }

        button {
            color: white;
            background-color: blue;
            border-radius: 10px;
            position: relative;
            top: 250px;
        }
    </style>
</head>
<body>
    <h1>Strong Password Generator</h1>
    <div class="container">
        <h2>Genera una password sicura</h2>

        <form action="./index.php?password-length" method="GET">
            <div>
                <label for="password_length">Lunghezza password:</label>
                <button type="submit">Invia</button>
            </div>

            <div>
                <input id="password_length" name="password_length" type="number">
                <p>la password scelta è: <?php echo get_password() ?></p>
            </div>

        </form>
    </div>
</body>
</html>