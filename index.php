<?php 

require_once __DIR__ ."/classes/Product.php";
require_once __DIR__ ."/classes/User.php";

try {
    $newUser = new User ("gold", "Christian", "Ferrazzano", "christian@mail.com", "28", "via delle vie", new Card("Christian Ferrazzano", "65461516511", "12/22", "666"));

    $newProduct = new Product("Jordan 1", 210.00);


    var_dump($newUser);
    var_dump($newProduct);
    
} catch (Exception $error) {
    echo $error->getMessage();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li><h1>Utente</h1></li>
        <li>Nome: <? echo $newUser->getName() ?></li>
        <li>Cognome: <? echo $newUser->getLastName() ?></li>
        <li>Email: <? echo $newUser->getEmail() ?></li>
        <li>Età: <? echo $newUser->getAge() ?></li>
        <li>Indirizzo: <? echo $newUser->getAddress() ?></li>
        <li>Sconto: %<? echo $newUser->getLevel() ?></li>
    </ul>
</body>
</html>