<!DOCTYPE html>
<?php
require_once("./scripts/RequestHandler.php");
$username = $_GET["name"];
$requestHandler = new RequestHandler();
$array = $requestHandler->getUserCollection($username);
?>
<html>
<head>
	<title>Maista paska</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<link rel="stylesheet" href="./css/styles.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
	

	<h1 class="display-4">Your boardgame collection</h1>
	
	<form>
		<input type="button" value="Go back!" onclick="history.back()">
	</form>
	<?="<b>Total items: " . $array['@attributes']['totalitems'] . "</b>";?>

<div class="jumbotron">

<?php

if (!empty($array['item'])) {
 
$items = $array['item'];

foreach ($items as $item){

	echo "<div class='card' style='width:180px'>";
	
	echo "<img class='card-img-top' src='" . $item['image'] . "' style='width:100%'>";
	
	echo "<h5 class='card-title'>" . $item['name'] . "</h5>";
	echo "<div class='card-body'>";
	
	echo "<p class='card-text'>Published in: " . $item['yearpublished'] . "</p>";
	
	echo "</div>";
	echo "</div>";
	
	echo nl2br ("\n");

}

} else {
	
	echo 'Username not found or API request failed. Try again!';
}
	
?>
	
</div>	
	
<footer class="page-footer font-small special-color-dark pt-4">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2021 Sono Ö</div>
  <!-- Copyright -->

</footer>

</body>
</html>