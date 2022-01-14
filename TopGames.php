
<html>
<body>

<?php


$username = $_GET["name"];

$simpleXmlObject = simplexml_load_file('https://www.boardgamegeek.com/xmlapi2/collection?username=' . $username . '&subtype=boardgame&own=1');
$array = json_decode(json_encode($simpleXmlObject), true);

 
if (!empty($array['item'])) {
 
$items = $array['item'];
$nameArr = [];

foreach ($items as $item){
	
	$nameArr[] = $item['name'];
}

$html = file_get_contents('https://boardgamegeek.com/browse/boardgame');


$dom = new DomDocument();
@ $dom->loadHTML($html);

$xpath = new DOMXpath($dom);


$collection = $dom->getElementById('collection'); //DOMElement

$rows = $collection->getElementsByTagName('tr');


$topGames = $xpath->query("//a[@class='primary']");

$topGameNames = [];

foreach ($topGames as $text) {
	$content = $text->textContent;
	
	if (!in_array($content, $nameArr)){
	$topGameNames[] = $text->textContent;
	}
	
}

$random_key = array_rand($topGameNames, 1);

echo "<h3>here's your new boardgame from the TOP 100 list</h3>";

echo $topGameNames[$random_key];



} else {
	
	echo 'Username not found or API request failed. Try again!';
	
}
	
?>

</body>
</html>