<?php

require_once("static/apiController.php");

class GooglePlacesAPIController extends apiController
{

	private $placelist;

	public function __construct()
	{
		$keyword = "ランチ　香川県";
		$baseUrl = "https://maps.googleapis.com/maps/api/place/textsearch/";
		$key = "AIzaSyDdNwvpwNP85oA8D2P9eGXEMp_WYAL4w1Y";
		$type = true;
		$param    = [
			'query' => $keyword,
			'language' => "ja",
		];
		$this->init($baseUrl,$key,$type,$param);
		$list = json_decode($this->requestApi());
		$this->placelist = $list->results;

	}

	public function getPlaceList(){	

		$list  = $this->placelist;
		$results = array();
		foreach((array) $list as $value){
			array_push($results , $value->name);
		}
		return $results;
	}
}
