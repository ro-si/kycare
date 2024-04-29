<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <!-- Link vers Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('images/slider/slider-bg-1.jpg');
            background-position: center;
            height: 100%;
        }
        .welcome-section {
            padding: 130px;
            color: white;
            opacity: 0.9; /* Diminuer l'opacité */
        }
        .inscription-section {
            opacity: 0.9; /* Diminuer l'opacité */
        }

        /* Style du bouton de connexion */
        .btn-connexion {
            background-color: white;
            color: blue;
            opacity: 1;

        }
        .btn-connexion:hover {
            background-color: blue;
            color: white;
            opacity: 1;

        }
    </style>
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <!-- Colonne pour le formulaire d'inscription -->
        <div class="col-md-6">
            <div class="card inscription-section"> <!-- Ajout de la classe inscription-section -->
                <div class="card-body">
                    <h2 class="card-title text-center">Inscription</h2>
                    <form>
                        <div class="form-group">
                            <input type="text" id="name" name="name" class="form-control" placeholder="Nom" required>
                        </div>

                        <div class="form-group">
                            <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
                        </div>

                        <div class="form-group">
                            <input type="email" id="confirm_email" name="confirm_email" class="form-control" placeholder="Confirmer l'email" required>
                        </div>

                        <div class="form-group">
                            <input type="password" id="password" name="password" class="form-control" placeholder="Mot de passe" required>
                        </div>

                        <div class="form-group">
                            <input type="date" id="date_of_birth" name="date_of_birth" class="form-control" placeholder="Date de naissance" required>
                        </div>

                        <div class="form-group">
                            <input type="text" id="phone_number" name="phone_number" class="form-control" placeholder="Numéro de téléphone" required>
                        </div>

                        <button type="submit" class="btn btn-primary btn-block">S'inscrire</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- Colonne pour le texte de bienvenue et le bouton de connexion -->
        <div class="col-md-6 bg-primary welcome-section">
            <div class="text-center">
                <h2>Heureux de vous 
revoir</h2>
                <a href="/login" class="btn btn-connexion">Connexion</a>
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
