<?php 

require_once __DIR__ ."/classes/Product.php";
require_once __DIR__ ."/classes/User.php";

try {
    $newUser = new User ("Christian", "Ferrazzano", "christian@mail.com", "via delle vie", new Card("Christian Ferrazzano", "65461516511", "12/22", "666"));

    var_dump($newUser);
    
} catch (Exception $error) {
    echo $error->getMessage();
}

?>