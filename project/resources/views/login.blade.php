<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootsstrap Css--only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Contador</title>
</head>

<body class="bg-dark">

    <div class="day m-3">
        <p class="text-light"><?= date('d / M / Y') ?></p>
    </div>

    <div class="container bg-light p-3 rounded-4 mt-5" style="width: 750px;">

    </div>
    <div class="container text-center mt-4">
        <button id="link_1" class="btn btn-success rounded-4 register">Regitrar-se</button>
        <button style="display: none;" id="link_2" class="btn btn-success rounded-4 login">Login</button>
    </div>

    <script src="./js/script.js"></script>

</body>

</html>
