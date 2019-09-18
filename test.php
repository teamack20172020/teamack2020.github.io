<?php

require_once("GooglePlacesAPIController.php");

	
$test = new GooglePlacesAPIController();
var_dump($test->getPlaceList());
