<?php

class Website {
	
	public function getInfo() {
		$site = DB::getInstance()->get('CustomerInfo', array('id', '=', Config::get('website/id')));

		return $site;
	}

	public function getWebsite() {
		$info = DB::getInstance()->get('CustomerWebsite', array('CustomerID', '=', Config::get('website/id')));
		
		return $info;
	}

	public function media() {
		$media = $this->getWebsite()->first()->media;
		
		return $media;
	}

	public function banner() {
		$banner = $this->getWebsite()->first()->mainbanner;
		$banner = json_decode($banner);
		
		return $banner;
	}

	public function MainBannerImg() {
		$bannerImg = $this->banner()->bannerImg;
		
		return $this->media() . $bannerImg;
	}

	public function MainBannerText() {
		$bannerText = $this->banner()->bannerText;
		$bannerText = escape($bannerText);

		return $bannerText;
	}

	public function Sections() {
		$Sections = DB::getInstance()->get('CustomerWebsiteSections', array('CustomerID', '=', Config::get('website/id')));
		$Sections = $Sections->results();
		return $Sections;
	}

	public function getSection($name) {
		$name = escape($name);
		foreach ($this->Sections() as $key => $slug) {
			
			if ($slug->section_slug == $name) {
				return $this->Sections()[$key];
			}
		}
		return false;
	}

}