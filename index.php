<?php
    $name = "my name is Jonathan.";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>
<body>
    <h1>Php Course</h1>
    <h2>Variables in php</h2>
    <p class="even">
    <?php
        // For concat strings we use a dot,
        // its not like in other lenguages that we use a plus symbol
        echo "Hello World! " . $name . "<br>";
        // if we use " we can concat without using a dot
        echo "Hello World! $name <br>";
        // otherwise happens with ' we must use a dot for concat
        echo 'Hello World! $name <br>';
        echo 'Hello World! ' . $name . '<br>';
    ?></p>
</body>
</html>