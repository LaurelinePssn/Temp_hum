<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    <div class="container mx-auto">
        <h1 class="text-center mt-5">Connexion</h1>
        <form action="{{ route('login') }}" method="POST" class="mt-5">
            @csrf
            <div>
                <label for="email">Adresse Email</label>
                <input type="email" id="email" name="email" required class="form-control">
            </div>
            <div>
                <label for="password">Mot de Passe</label>
                <input type="password" id="password" name="password" required class="form-control">
            </div>
            <div class="mt-3">
                <button type="submit" class="btn btn-primary">Se connecter</button>
            </div>
        </form>
    </div>
</body>
</html>