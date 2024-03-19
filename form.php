<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superglobal-Vježba</title>
    <style>
        form {
            display: inline-block;
            vertical-align: middle;
        }

        label {
            display: inline-block;
            width: 100px;
            text-align: right;
            margin-right: 10px;
        }

        input[type="text"] {
            width: 200px;
        }

        .button-container { 
            text-align: right;
        }

        button {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <form action="form.php" method="post">
        <label for="name">Ime:</label>
        <input type="text" name="name" required><br><br>
        <label for="meal">Omiljeno jelo:</label>
        <input type="text" name="meal"required><br><br>
        <div class="button-container">
        <button type="submit">Pošalji</button>
    </form>

    
</body>
</html>