<?php

class Website {
	
	// private $_siteid = Config::get('website/id');

	public function getWebsite() {
		$site = DB::getInstance()->get('customer_startup', array('uid', '=', Config::get('website/id')));

		return $site;
	}

	public function info() {
		$info = DB::getInstance()->get('customer_website', array('CustomerID', '=', Config::get('website/id')));
		
		return $info;
	}
}