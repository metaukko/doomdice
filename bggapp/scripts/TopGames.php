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

<?php

$username = $_GET["name"];

$requestHandler = new RequestHandler();

$array = $requestHandler->getUserCollection($username);

 
if (!empty($array['item'])) {
 
$items = $array['item'];
$nameArr = [];

foreach ($items as $item){
	
	$nameArr[] = $item['name'];
}

$topGameNames = $requestHandler->getTopGames();

$selectedNameList = []

foreach ($topGameNames as $text) {
	$content = $text;
	
	if (!in_array($content, $nameArr)){
	$selectedNameList[] = $text->textContent;
	}
	
}

$random_key = array_rand($selectedNameList, 1);

echo "<h3>here's your new boardgame from the TOP 100 list</h3>";

echo $selectedNameList[$random_key];


} else {
	
	echo 'Username not found or API request failed. Try again!';
	
}
	
?>

</body>
</html>