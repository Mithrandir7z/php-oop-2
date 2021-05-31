<?php 

//All require once
require_once __DIR__ . '/sony.php';
require_once __DIR__ . '/microsoft.php';
require_once __DIR__ . '/nintendo.php';
require_once __DIR__ . '/user.php';



$playstation_4 = new Sony('Playstation 4', 'Sony');
$playstation_4->scheda_video = 'AMD';
// var_dump($playstation_4->getInfoData());


$xbox_one = new Microsoft('Xbox One', 'Microsoft');
$xbox_one->scheda_video = 'nVidia';
// var_dump($xbox_one->getInfoData());


$nintendo_switch = new Nintendo('Nintendo Switch', 'Nintendo');
$nintendo_switch->scheda_video = 'AMD';
// var_dump($nintendo_switch->getInfoData());



//ACQUISTI
$user = new User('Marco', 'Rossi');
$user->addProduct($playstation_4);
$user->addProduct($nintendo_switch);
var_dump($user);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Videogames Shop</title>
</head>
<body>
    
    <h1>Riepilogo Ordine</h1>

    <?php foreach($user->getProducts() as $product) { ?>  
        <div>
            <ul>
                <li>Modello <?php echo $product->nomeConsole ?></li>
                <li>Marca <?php echo $product->marca ?></li>
            </ul>
        </div>
    <?php } ?>

</body>
</html>