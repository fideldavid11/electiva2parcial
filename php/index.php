<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables de Entorno</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 400px;
            width: 100%;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .variable {
            margin-bottom: 10px;
        }

        .variable label {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Variables de Entorno</h1>
        <div class="variable">
            <label>MYSQL_HOST:</label>
            <?php echo $_ENV['MYSQL_HOST']; ?>
        </div>
        <div class="variable">
            <label>MYSQL_USER:</label>
            <?php echo $_ENV['MYSQL_USER']; ?>
        </div>
        <div class="variable">
            <label>MYSQL_PASSWORD:</label>
            <?php echo $_ENV['MYSQL_PASSWORD']; ?>
        </div>
        <div class="variable">
            <label>MYSQL_DATABASE:</label>
            <?php echo $_ENV['MYSQL_DATABASE']; ?>
        </div>
    </div>
</body>
</html>

