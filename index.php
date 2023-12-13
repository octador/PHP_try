<?php
//connexion BDD
require_once('./database_connect.php');
//etape 2 preparation
$request = $database->query('SELECT * FROM user');
// var_dump($request)

$user = $request->fetch();
// var_dump($user);
$request =$database->query('SELECT * FROM product ');
// var_dump($request);

$products =$request->fetchAll();
// var_dump($product);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Hello <?php echo $user['prenom'] ?> </p>
    <ul>
        <?php
         foreach ($products as $product) {
           echo '<li> le nom du produit est ' .$product['name']. ' prix ' .$product['price']/100 . 'euros' . '</li>';
         }
        ?>
    </ul>
</body>
</html>