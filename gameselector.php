<!DOCTYPE html>
<?php
require_once("./bggapp/scripts/RequestHandler.php");
require_once ("./bggapp/scripts/Utils.php");
$username = $_GET["name"];
$requestHandler = new RequestHandler();
$array = $requestHandler->getUserCollection($username);
$baseUrl = 'https://www.boardgamegeek.com';
?>
<html>
<head>
	<title>Maista paska</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<link rel="stylesheet" href="./bggapp/css/styles.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>


<h1 class="display-4">Your new game awaits</h1>
	
	<form>
		<input type="button" value="Go back!" onclick="history.back()">
	</form>
	
<div class="jumbotron">


<?php
if (!empty($array['item'])) {
 
	$items = $array['item'];
	$nameArr = [];

	foreach ($items as $item){
	
		$nameArr[] = $item['name'];
	}

	$topGameNames = $requestHandler->getTopGames();

	$utils = new Utils();

	$randomGame = $utils->getRandomGame($topGameNames, $nameArr);

} else {
	echo 'Username not found or API request failed. Try again!';
}
?>
	<div class="content-wrapper">
		<h3>Check out your new boardgame from the TOP 100 list</h3>
			<button data-toggle="collapse" class="btn btn-primary" data-target="#demo">Reveal</button>
			<div id="demo" class="collapse">
			<?= "*<a href='" . $baseUrl . $randomGame['url'] . "'>" . $randomGame['name'] . "</a>*";?>
			</div>
	</div>
	
</div>
	
<footer class="page-footer font-small special-color-dark pt-4">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2021 Sono Ö</div>
  <!-- Copyright -->

</footer>

</body>
</html>