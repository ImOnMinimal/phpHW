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
        $arr=[1,2,3,4,5,6];
        $fhalf=count($arr)/2;
        $farr = array_slice($arr, 0, $fhalf);
        foreach($farr as $value){
            $fsum+=$value;
        }
        echo $fsum;
        echo '<br>';
        
        $sarr = array_slice($arr, $fhalf, count($arr));
        foreach($sarr as $value){
            $ssum+=$value;
        }
        echo $ssum;
        echo '<br>';


        echo $fsum/$ssum
    ?>
</body>
</html>