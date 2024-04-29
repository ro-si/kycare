<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choix du Profil</title>
    <!-- Link vers Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
        }
        .container {
            margin: 50px auto;
        }
        .section {
            text-align: center;
            padding: 100px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            height: 300px; /* Définir la hauteur */
        }
        .btn-section {
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="section">
                <h2>Êtes-vous un patient ?</h2>
                <a href="/register" class="btn btn-primary btn-block btn-section">Patient</a>
            </div>
        </div>
        <div class="col-md-6">
            <div class="section">
                <h2>Êtes-vous un praticien ?</h2>
                <a href="/registe" class="btn btn-secondary btn-block btn-section">Praticien</a>
            </div>
        </div>
    </div>
</div>

</body>
</html>
