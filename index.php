<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="BootStrap/css/bootstrap.css"> 
	<link rel="stylesheet" type="text/css" href="BootStrap/css/footer.css">
</head>
<body>
	<?php include 'menu.php'; ?>


<div class="wrap">
<div class="container">
	

<?php $fichier = file('quote.txt'); // Nom du fichier qui contient les citations

$total = count($fichier); // Total du nombre de lignes du fichier

$i = mt_rand(0, $total-1); // Nombre au hasard entre 0 et le total du nombre de lignes

echo $fichier[$i]; // On affiche une citation au hasard

 ?>






</div>
</div>


<?php include 'footer.php'; ?>

</body>
</html>