<meta charset="utf-8"
<?php
error_reporting(E_ALL); // (0) / (E_ALL)
ini_set('display_errors', 'on'); // 'off' / 'on'
?>
<?php
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'YummyDishes';
    $link = mysqli_connect($host, $user, $pass, $db); //, $db
    mysqli_query($link, "SET NAMES 'utf8'");

    $id = $_GET['id'];
    $query = "SELECT * FROM dishes WHERE id=$id";
    $res = mysqli_query($link, $query) or die(mysqli_error($link));
    $user = mysqli_fetch_assoc($res);
?>
<>
<form action="/save.php?id=<?= $_GET['id'] ?>" method="POST">
    <input name="name" value="<?= $user['name']?>">
    <input name="cost" value="<?= $user['cost']?>">
    <input name="weight" value="<?= $user['weight']?>">
    <input type="submit">
</form>

