<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Degen Tasks</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-neutral-800">

    <header>
        <div class="flex justify-between items-center p-4 bg-neutral-900">
            <div class="flex items-center gap-2">
                <img src="{{ asset('images/logo.png') }}" alt="Logo Degen Tasks" class="w-12 h-12">
                <h1 class="text-2xl text-amber-100">Degen Tasks</h1>
            <button>Entrar</button>
            <button>Registrar-se</button>
        </div>
    </header>

    <section class="text-amber-100 grid-cols-2 grid place-items-center gap-4">
        <div class="flex flex-col gap-1.5">
            <img src="{{ asset('images/logo.png') }}" alt="Logo Degen Tasks" class="w-48 h-48 mb-4">
            <div class="text-wrap w-2xl">
                <p>Caso esteja em busca de um aplicação para listar e organizar suas tarefas, seja bem vindo a degen tasks!</p>
                <p>Venha se organizar onde você pode ganhar ganhar pontos enquanto as concluem e ainda pode troca-los por nossos incriveis itens.</p>
            </div>
        </div>
        <div>
            <p>formulario</p>
            <form method="post"></form>
        </div>
    </section>
</body>
</html>
