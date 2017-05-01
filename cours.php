<!DOCTYPE html>
<html>

<head>
<meta charset= "utf-8"
<title> Cours Php </title>
</head>

<body>

<h1 style= "color: blue";> Mon Site Web</h1>

<p>Aujourd'hui nous sommes le <?php echo date('d/m/Y h:i:s'); ?>.</p>

    <p>
        <?php
    
    $ageduvisiteur = 24;
     echo 'Le visiteur a ' . $ageduvisiteur . ' ans'; 
    ?>
    </p>
    
   <p>
       <?php
    $prix = 2.5; //mettre un . et non une ,
    $quantite= 3;
    $total= $prix * $quantite; /* la base des variables */
    echo 'Le prix des tomates est de ' . $total . ' euros.';
   
    
       ?> 
    </p>
    

</body>

</html>
