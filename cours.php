<!DOCTYPE html>
<html>

<head>
<meta charset= "utf-8">


    
<title> Cours Php </title>
</head>

<body>

<h1> Mon Site Web</h1>


<?php /*boucle*/
    
for ($boucle=1;$boucle<=10;$boucle++)
{
   echo '<p> Ceci est le numero ' . $boucle . ' de la boucle </p>';
}
    ?>
    
    <?php
    $repet=0;
    
        while ($repet<=3)
        {
        echo 'ceci est la repet ' . $repet . ' :) '; //en ligne parce que pas de <p>
         $repet=$repet + 1;
        }
    ?>
</body>

</html>
