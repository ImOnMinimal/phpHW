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
    <form action="" method="GET">
        <!-- Вам есть 18?
        <input type="hidden" name="flag" value="0">
        <input type="checkbox" name="flag" value="1">
        <input type="submit"> -->

        <!-- ам или цм <br>
        <input type="hidden" name="flag" value="0">
        ам <input type="radio" name="flag" value="1"> <br>
        цм <input type="radio" name="flag" value="2">
        <input type="submit"> -->

        Choose your language <br>
        <select name="test">
            <option value="1">Русский</option>
            <option value="2">English</option>
            <option value="3">Deutsch</option>
        </select>
        <input type="submit">
    </form>
    <?php
        // if (!empty($_GET)){
        //     if ($_GET['flag']==='1'){
        //         echo 'Доступ к сайту разрешён';
        //     }
        //     else{
        //         echo 'Доступ к сайту запрещён, ю ар ту шмол';
        //     }
        // }

        // if (!empty($_GET)){
        //     if ($_GET['flag']==='1'){
        //         echo '800гпм';
        //     }
        //     else if($_GET['flag']==='2'){
        //         echo '5-pos няшчка';
        //     }
        // }

        if (!empty($_GET)){
            if ($_GET['test']==='1'){
                echo '<strong>Карла</strong> (англ. Karla) — персонаж-торговец в игре Dark Souls III.<br><br>
                <strong>Местонахождение</strong> <br>
                Изначально находится в одной из запертых камер в Подземельях Иритилла, камера на нижнем ярусе, где бродит много тюремщиков. Для её освобождения потребуются соответствующие ключи. Если Негорящий согласится взять её на службу, то после произнесения клятвы перемещается в Храм огня.';
            }
            else if($_GET['test']==='2'){
                echo '<strong>Karla</strong> — is a merchant character in the game Dark Souls III.<br><br>
                <strong>Location</strong> <br>
                Initially, it is located in one of the locked cells in the Dungeons of Irithilla, a cell on the lower tier, where many jailers roam. To release it, you will need the appropriate keys. If the Unlit agrees to take her into service, then after the oath is pronounced, she moves to the Temple of Fire.';
            }
            else if($_GET['test']==='3'){
                echo '<strong>Carla</strong> (engl. Karla) — ist ein Händlercharakter im Spiel Dark Souls III.<br><br>
                <strong>Standort</strong> <br>
                Sie befindet sich ursprünglich in einer der verschlossenen Zellen in Iritilla-Dungeons, einer Zelle auf der unteren Ebene, in der viele Gefängnisinsassen herumlaufen. Die entsprechenden Schlüssel werden benötigt, um sie freizugeben. Wenn der nicht Brennende bereit ist, ihn zum Dienst zu nehmen, bewegt er sich nach dem Aussprechen des Eides in den Tempel des Feuers.';
            }
        }
    ?>
</body>
</html>