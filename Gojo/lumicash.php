<?php
session_start();
include("connexion.php");

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nom = trim($_POST['nom'] ?? '');
    $telephone = trim($_POST['telephone'] ?? '');
    $montant = trim($_POST['montant'] ?? '');
    $motif = trim($_POST['motif'] ?? '');

    if ($nom == "" || $telephone == "" || $montant == "" || $motif == "") {
        $message = "Veuillez remplir tous les champs.";
    } elseif (!is_numeric($montant) || $montant <= 0) {
        $message = "Veuillez entrer un montant valide.";
    } else {

        /*
         * Pour le moment, nous ne débitons pas réellement
         * le compte Lumicash.
         *
         * Cette partie servira plus tard à connecter
         * le paiement officiel Lumicash.
         */

        $reference = "LMC-" . date("YmdHis");

        $message = "Demande de paiement créée avec succès.<br>
                    Référence : <strong>$reference</strong><br>
                    Montant : <strong>" . number_format($montant, 0, ',', ' ') . " FBu</strong>";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Paiement Lumicash</title>

    <style>

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f2f4f7;
        }

        .container {
            width: 90%;
            max-width: 650px;
            margin: 50px auto;
        }

        .card {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.10);
        }

        .logo {
            text-align: center;
            margin-bottom: 20px;
        }

        .logo h1 {
            margin: 0;
            color: #e30613;
        }

        .logo p {
            color: #666;
        }

        .message {
            background: #e8f8ed;
            border: 1px solid #28a745;
            color: #176b2c;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            line-height: 1.6;
        }

        .error {
            background: #fdeaea;
            border: 1px solid #dc3545;
            color: #a71d2a;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-top: 15px;
            margin-bottom: 7px;
            font-weight: bold;
        }

        input,
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 15px;
        }

        textarea {
            resize: vertical;
            min-height: 90px;
        }

        input:focus,
        textarea:focus {
            outline: none;
            border-color: #e30613;
            box-shadow: 0 0 5px rgba(227,6,19,0.2);
        }

        .btn {
            width: 100%;
            margin-top: 25px;
            padding: 14px;
            border: none;
            border-radius: 8px;
            background: #e30613;
            color: white;
            font-size: 17px;
            font-weight: bold;
            cursor: pointer;
        }

        .btn:hover {
            background: #b8040e;
        }

        .info {
            margin-top: 20px;
            padding: 15px;
            background: #f8f9fa;
            border-radius: 8px;
            color: #555;
            font-size: 14px;
        }

        .back {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: #333;
            text-decoration: none;
        }

        .back:hover {
            text-decoration: underline;
        }

    </style>
</head>

<body>

<div class="container">

    <div class="card">

        <div class="logo">
            <h1>💳 Lumicash</h1>
            <p>Paiement des services de l'agence</p>
        </div>

        <?php if ($message != ""): ?>

            <?php if (strpos($message, "succès") !== false): ?>

                <div class="message">
                    <?= $message ?>
                </div>

            <?php else: ?>

                <div class="error">
                    <?= $message ?>
                </div>

            <?php endif; ?>

        <?php endif; ?>


        <form method="POST" action="">

            <label for="nom">
                Nom complet
            </label>

            <input
                type="text"
                id="nom"
                name="nom"
                placeholder="Ex : Jean Dupont"
                required
            >


            <label for="telephone">
                Numéro Lumicash
            </label>

            <input
                type="tel"
                id="telephone"
                name="telephone"
                placeholder="Ex : 79xxxxxx"
                required
            >


            <label for="montant">
                Montant à payer (FBu)
            </label>

            <input
                type="number"
                id="montant"
                name="montant"
                placeholder="Ex : 50000"
                min="1"
                required
            >


            <label for="motif">
                Motif du paiement
            </label>

            <textarea
                id="motif"
                name="motif"
                placeholder="Ex : Frais de traitement du dossier"
                required
            ></textarea>


            <button type="submit" class="btn">
                💳 Continuer le paiement
            </button>

        </form>


        <div class="info">
            <strong>ℹ️ Information</strong><br><br>

            Cette page permet actuellement de préparer une
            demande de paiement Lumicash.

            Le débit réel du compte Lumicash sera ajouté
            après configuration de l'intégration officielle
            Lumicash.
        </div>


        <a href="index.php" class="back">
            ← Retour à l'espace utilisateur
        </a>

    </div>

</div>

</body>
</html>