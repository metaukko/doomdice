<?php

class Utils {
	
	
	function getRandomGame($topGames, $userGames): array
	{
		$selectedNameList = [];
	
		foreach ($topGames as $name => $url) {
	
			if (!in_array($name, $userGames)){
				$selectedNameList[$name] = [
				'url' => $url,
				'name' => $name
				];
			}
		}
		
		$randomKey = array_rand($selectedNameList, 1);
		return $selectedNameList[$randomKey];
	}
	
}