<?php

class RequestHandler {
	
	const BASE_URL = 'https://www.boardgamegeek.com/xmlapi2';
	
	const TOP_GAMES_URL = 'https://boardgamegeek.com/browse/boardgame';
	
	
	function getUserCollection($name): array
	{
		$username = $_GET["name"];

		$simpleXmlObject = simplexml_load_file(self::BASE_URL . '/collection?username=' . $username . '&subtype=boardgame&own=1');

		$array = json_decode(json_encode($simpleXmlObject), true);
		
		return $array;
	}
	
	function getTopGames():array
	{
		
		$html = file_get_contents(self::TOP_GAMES_URL);

		$dom = new DomDocument();
		@ $dom->loadHTML($html);

		$xpath = new DOMXpath($dom);

		$collection = $dom->getElementById('collection');

		$rows = $collection->getElementsByTagName('tr');


		$topGames = $xpath->query("//a[@class='primary']");

		$topGameNames = [];
		
		foreach ($topGames as $text) {
			
			$topGameNames[] = $text->textContent;
		}
		
		return $topGameNames;
		
	}
	
	

}