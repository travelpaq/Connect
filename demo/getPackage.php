<?php

	require "../vendor/autoload.php";
	use TravelPAQ\PackagesAPI\PackagesAPI;

	$tp = new PackagesAPI
		(
			[
				'api_key' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpIjoiNTAifQ.35LFiBOikbD0zQxSlXKe6_t2jltNxQc3FZm5cMGKssA',
				'item_per_page' => 10
			]
		);

	
	//Conversión de los parámetros
	$request_params = json_decode(file_get_contents('php://input'),true);

	try{
		$response = $tp->getPackageList($request_params,0);
		foreach($response->result as $package){
			$response->getPackage = 
		}
		echo json_encode($response, JSON_PRETTY_PRINT);
	} catch(Exception $e){
		echo $e->getMessage();
	}