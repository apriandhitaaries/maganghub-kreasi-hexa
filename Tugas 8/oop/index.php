<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 8 - OOP PHP</title>
</head>

<body>
    <?php
    require_once 'Animal.php';
    require_once 'Ape.php';
    require_once 'Frog.php';

    $sheep = new Animal(name: "shaun");
    echo "Name: " . $sheep->getName() . "<br>";
    echo "Legs: " . $sheep->getLegs() . "<br>";
    echo "Cold Blooded: " . $sheep->getColdblooded() . "<br>";
    echo "<br>";

    $kodok = new Frog("buduk");
    echo "Name: " . $kodok->getName() . "<br>";
    echo "Legs: " . $kodok->getLegs() . "<br>";
    echo "Cold Blooded: " . $kodok->getColdblooded() . "<br>";
    $kodok->jump();
    echo "<br>";

    $sungokong = new Ape("kera sakti");
    echo "Name: " . $sungokong->getName() . "<br>";
    echo "Legs: " . $sungokong->getLegs() . "<br>";
    echo "Cold Blooded: " . $sungokong->getColdblooded() . "<br>";
    $sungokong->yell();
    echo "<br>";

    ?>
</body>

</html>