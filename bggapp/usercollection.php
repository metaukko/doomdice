<!DOCTYPE html>
<?php
require_once("./scripts/RequestHandler.php");
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
<form>
 <input type="button" value="Go back!" onclick="history.back()">
</form>

<h1 class="display-4">Your boardgame collection</h1>

<div class="jumbotron">

	<div class="container">
		
	
<?php
$username = $_GET["name"];

$requestHandler = new RequestHandler();

$array = $requestHandler->getUserCollection($username);

 
if (!empty($array['item'])) {
 
$items = $array['item'];

foreach ($items as $item){
	
	echo "<p style='font-size:15px;'>" . $item['name'] .  ": ";
	echo  $item['yearpublished'] . "</p>";
	echo "<img src='" . $item['thumbnail'] . "'/>";
	echo nl2br ("\n");

}

} else {
	
	echo 'Username not found or API request failed. Try again!';
}
echo nl2br ("\n");
	
?>
	
	
	
	</div>
	
</div>	



</body>
</html>