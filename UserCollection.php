<html>
<body>

<?php

echo 'TÄSSÄ KAIKKI PELIT';
echo nl2br ("\n");
echo nl2br ("\n");


$username = $_GET["name"];

$simpleXmlObject = simplexml_load_file('https://www.boardgamegeek.com/xmlapi2/collection?username=' . $username . '&subtype=boardgame&own=1');

$array = json_decode(json_encode($simpleXmlObject), true);

 
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

</body>
</html>