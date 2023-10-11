<?php
require '_connec.php';

$pdo = new PDO(DSN, USER, PASS);



$query = 'SELECT * FROM friend;';
$statement = $pdo->query($query);
$friends = $statement->fetchAll(PDO::FETCH_ASSOC); // Get data
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Récapitulatif - Réclamation</title>
</head>

<body>    

    <header>
        <h1>Liste des Friends</h1>
    </header>

    <main>
        <div class="summary">
            <!-- BONUS -->
            
<?php foreach ($friends as $friend): ?>
            <!-- TODO 2 - Replace those placeholders by the values sent from the form -->
            <ul>
                <li>personnage : <span><?=$friend['firstname'] . $friend['lastname'] ?></span></li>
                </li>
            </ul>
            <?php endforeach ?>
        </div>

        <form action="check.php" method="post">
            <div>
                <label for="firstname">Prénom :</label>
                <input type="text" id="firstname" name="firstname" required="true">
            </div>
            <div>
                <label for="lastname">Nom : </label>
                <input type="text" id="lastname" name="lastname" required="true">
            </div>
            <div class="buttonsLine">
                <button type="submit">Envoyer</button>
            </div>
        </form>
    </main>
</body>

</html>
