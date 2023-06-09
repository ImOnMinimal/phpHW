<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="15">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    
    <?php
        session_start();
        echo "<ul>";
        foreach ($_SESSION['test'] as $value){
            echo "<li>$value</li>";
        }
        echo "</ul>";
        echo "<a href='index.php'>view</a>";
    ?>
</body>
</html>