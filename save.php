<meta charset="utf-8"
<?php
error_reporting(E_ALL); // (0) / (E_ALL)
ini_set('display_errors', 'on'); // 'off' / 'on'
?>
<?php
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'db';
    $link = mysqli_connect($host, $user, $pass, $db); //, $db
    mysqli_query($link, "SET NAMES 'utf8'");

    $id = $_GET['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $salary = $_POST['salary'];
    $query = "UPDATE salary SET name='$name', age='$age', salary='$salary' WHERE id=$id";
    mysqli_query($link, $query) or die(mysqli_error($link));
    echo 'Пользователь успешно изменён!'
?>

