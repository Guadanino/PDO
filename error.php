<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="errorPanel">
            <p>Nous rencontrons les problèmes suivants pour traiter votre demande : </p>
            <ul>
                <?php foreach($errors as $error) : ?>
                    <li><?= $error ?></li>
                <?php endforeach; ?>
            </ul>
            <p>
                <a href="index.php">Retour au formulaire</a>
            </p>
        </div>
</body>
</html>