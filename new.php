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
?>
<>
<form action="" method="POST">
    <input name="name">
    <input name="cost">
    <input name="weight">
    <input type="submit">
</form>
<?php
    
    if (!empty($_POST)){    
        if (isset($_POST['name'],$_POST['cost'],$_POST['weight'])){
            $name = $_POST['name'];
            $name = urldecode($name);
            $name = strip_tags($name);
            $name = trim($name, '=');
            $name = strtr($name, "+&=/", '    ');

            $cost = $_POST['cost'];
            $cost = urldecode($cost);
            $cost = strip_tags($cost);
            $cost = trim($cost, '=');
            $cost = strtr($cost, "+&=/", '    ');

            $weight = $_POST['weight'];
            $weight = urldecode($weight);
            $weight = strip_tags($weight);
            $weight = trim($weight, '=');
            $weight = strtr($weight, "+&=/", '    ');

            $dupl = "SELECT * FROM dishes WHERE name='$name'";
            $res = mysqli_query($link, $dupl) or die(mysqli_error($link));
            for ($data = []; $row = mysqli_fetch_assoc($res); $data[] = $row);
            if(!count($data)>0&isset($_POST['name'],$_POST['cost'],$_POST['weight'])){
                $query = "INSERT INTO dishes SET name='$name', cost='$cost', weight='$weight'";
                mysqli_query($link, $query) or die(mysqli_error($link));
                header('Location: index.php');
                die();
            }
            else{
                session_start();

                $_SESSION['flash'] = 'Неверно заполнена форма!';
                header('Location: error.php');
                die();
            }
        }
        else{
            session_start();
    
            $_SESSION['flash'] = 'Неверно заполнена форма!';
            header('Location: error.php');
            die();
        }
    }
    
?>
