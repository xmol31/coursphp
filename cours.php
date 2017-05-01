<!DOCTYPE html>
<html>

<head>
<meta charset= "utf-8">


    
<title> Cours Php </title>
</head>

<body>

<h1> Mon Site Web</h1>



  

       <?php
    
    $age = 19; //changer pour voir la condition s'appliquer
    
if ($age <= 17)
{
 ?> 
    <p style= "color: blue";> Salut jeune! </p>
    <?php
}
    elseif ($age==18)
    {
        echo ' Tu as pile l\'age ^^'; // le \ sert à mettre le ' 

}
    else
    {
        echo 'Bonjour Adulte!';
    }

?>
</body>

</html>
