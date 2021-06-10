<!DOCTYPE html>
<html lang='fr'>
	<head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>PHP ex 5.2 fonction</title>
    </head>
    <body >
        <?php
        $monthArray= array('janvier','février','mars','avril','mai','juin','juillet','aout','septembre','octobre','novembre','décembre');
        var_dump($monthArray);
        ?>
        <p> 3ième ligne= <?= $monthArray[2] ?></p>
    </body>
</html>