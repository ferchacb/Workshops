<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ordenamiento</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <div class="container">
    <h2>Paises&Capitales</h2>
    <br>
        <?php foreach($paises as $y=>$y_value):?>
            
            <h6>La Capital de <?php echo $y;?> es: <?php echo $y_value;?></h6>
            <br>
        <?php endforeach;?>
        <h2>Rango de temperaturas</h2><br>
        <h6>La temperatura promedio es : <?php echo $total;?></h6><br>
        <h6>Las 5 temperaturas mas bajas : <?php echo $hightest[0].",",$hightest[2].",",$hightest[3].",",$hightest[4].",",$hightest[5]?></h6><br>
        <h6>Las 5 temperaturas mas altas : <?php echo $lowest[0].",",$lowest[2].",",$lowest[3].",",$lowest[4].",",$lowest[5];?></h6><br>
    </div>


</body>
</html>