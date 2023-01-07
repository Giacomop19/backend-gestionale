<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP JWT</title>
    <style>
        div {
            max-width: 600px;
            word-wrap: break-word;
            padding: 5px;
            background: #f5f5f5;
            border: 1px solid #999999;
        }
    </style>
</head>

<body>
    <?php
    require '../jwt/JwtHandler.php';
    $jwt = new JwtHandler();

    $token = $jwt->jwtEncodeData(
        'http://localhost/backend-gestionale/',
        array("name" => "John", "email" => "john@email.com", "id" => 21)
    );

    echo "<strong>Your Token is -</strong><br><div><code>$token</code></div>";
    ?>
</body>

</html>