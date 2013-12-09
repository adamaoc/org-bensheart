<?php

class Website {
	
	public function getWebsite() {
		$site = DB::getInstance()->get('customer_startup', array('uid', '=', Config::get('website/id')));

		return $site;
	}

	public function info() {
		$info = DB::getInstance()->get('customer_website', array('CustomerID', '=', Config::get('website/id')));
		
		return $info;
	}

	public function media() {
		$media = $this->info()->first()->media;
		
		return $media;
	}

	public function banner() {
		$banner = $this->info()->first()->mainbanner;
		$banner = json_decode($banner);

		return $banner;
	}

	public function MainBannerImg() {
		$bannerImg = $this->banner()->mainBanner;
		
		return $this->media() . $bannerImg;
	}

	public function MainBannerText() {
		$bannerText = $this->banner()->mainBannerTitle;

		return $bannerText;
	}

}