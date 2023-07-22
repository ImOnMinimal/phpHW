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

    

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        mysqli_query($link, "DELETE FROM dishes WHERE id=$id") or die(mysqli_error($link));
    }
    
    $query = "SELECT * FROM dishes";
    $res = mysqli_query($link, $query) or die(mysqli_error($link));
    for ($data = []; $row = mysqli_fetch_assoc($res); $data[] = $row);
    
    

?>
<>
<table>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>cost</th>
        <th>weight</th>
        <th>delete</th>
        <th>edit</th>
    </tr>
    <?php foreach ($data as $elem) { ?>
        <tr>
            <td><?= $elem['id']?></td>
            <td><?= $elem['name']?></td>
            <td><?= $elem['cost']?></td>
            <td><?= $elem['weight']?></td>
            <td><a href="?id=<?=$elem['id']?>">Удалить</a></td>
            <td><a href="/edit.php?id=<?=$elem['id']?>">Изменить</a></td>
        </tr>
    <? }?>
</table>
