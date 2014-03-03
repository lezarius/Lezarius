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


<div class="col-xs-6 col-md-4">
<h3>Lezarius <small>le lezare avec 42 personalité.</small></h3>
<article>Un jour on ma dit "Trouve toi un pseudo !" J'ai mis trente seconde as le trouver. Mais je vais mettre 20 ligne as vous expliquer pourquoi du comment de 42.
</br> </br>
Tout d'abbord j'ai demandé à mes amis. Une d'entre elle (<a href="https://twitter.com/snitchyx">@Snitchyx</a>) ma répondu réponse, plutot spammé dira thon. Une de ses réponse retenue mon attention. C'était Lezarius.
<br> C'est un habil mélange de ma timiditer et de mon amour pour le steam punk. <br>
Mais cette entité représente désormé le scientifique que je suis que se soit dans mes experimentasie dans la vie ou de mes divers projet web (Qui as dit que je fessait que des truc random ? xD)
<br><br><br>

Voila as peux près comment est né Lezarius
</article>
</div>
	
<div class="col-xs-6 col-md-4">	
<div class="well well-sm"> <h4>Random Quote:</h4>
<?php $fichier = file('quote.txt'); // Nom du fichier qui contient les citations

$total = count($fichier); // Total du nombre de lignes du fichier

$i = mt_rand(0, $total-1); // Nombre au hasard entre 0 et le total du nombre de lignes

echo $fichier[$i]; // On affiche une citation au hasard

 ?>
 </div>
 </div>

<div class="col-xs-6 col-md-4">
<div class="well well-sm">
<h4>Dernier article:</h4>
<a href="http://blog.lezarius.eu">
  <?php $file = 'http://blog.lezarius.eu/feed.php?rss';
if(!$xml = simplexml_load_file($file))
  exit('Failed to open '.$file);

echo($xml->channel->item->title)
?> 
</a>
</div>
</div>



</div>
</div>


<?php include 'footer.php'; ?>

</body>
</html>