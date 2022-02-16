<?php 

require_once __DIR__ ."/classes/Product.php";
require_once __DIR__ ."/classes/User.php";

try {
    $newUser = new User ("Christian", "Ferrazzano", "christian@mail.com", "28", "via delle vie", new Card("Christian Ferrazzano", "65461516511", "12/22", "666"));
    
    $newUser->setLevel("gold");

    $newProduct = new Product("Jordan 1", 210.00);


    var_dump($newUser);
    var_dump($newProduct);
    
} catch (Exception $error) {
    echo $error->getMessage();
}

?>