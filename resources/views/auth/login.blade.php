<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <!-- Link vers Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('images/slider/slider-bg-1.jpg');
            background-position: center;
            height: 100vh;
        }
        .login-form {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>







<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="login-form">
                <h2 class="text-center mb-4">Connexion</h2>
                <form>
                    <div class="form-group">
                        <label for="email">Email :</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
                    </div>

                    <div class="form-group">
                        <label for="password">Mot de passe :</label>
                        <input type="password" id="password" name="password" class="form-control" placeholder="Mot de passe" required>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Connexion</button>
                    </div>
                    <div class="form-group text-right">
                        <a href="#" class="text-red">Mot de passe oublié</a>
                    </div>
                </form>
                <p class="text-center">Vous n'avez pas de compte ? <a href="/register">Inscrivez-vous ici</a></p>
            </div>
        </div>
    </div>
</div>

<!-- Link vers jQuery (nécessaire pour Bootstrap JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Link vers Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
