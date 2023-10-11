<?php


require '_connec.php';
$pdo = new PDO(DSN, USER, PASS);

$data = array_map('trim', $_POST);

$firstname = htmlentities($data['firstname']);
$lastname = htmlentities($data['lastname']);

$errors = [];

if (empty($firstname)) {
    $errors[] = 'Le prénom doit être renseigné';
}

if (empty($lastname)) {
    $errors[] = 'L\e nom doit être renseigné';
}

if (!empty($errors)) {
    require 'error.php';
    die();
}

$query = "INSERT INTO friend (firstname, lastname) VALUES (:firstname, :lastname)";
$statement = $pdo->prepare($query);

$statement->bindValue(':firstname', $firstname, PDO::PARAM_STR);
$statement->bindValue(':lastname', $lastname, PDO::PARAM_STR);

$statement->execute();

header("Location: index.php");
