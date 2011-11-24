<?php

/**
* 
*/
class Links_controller
{
	
	public function __construct()
	{
		# code...
	}

	
	public function add_link()
	{
		$url       = input::post('url_address');
		$link_txt  = input::post('url_link_txt');
		$category      = input::post('category');

		$links = load::model('links');
		$add_link = $links->add_link($url, $link_txt, $category);
		
		load::view('welcome');
	}

	public function get_cats()
	{
		$links = load::model('links');
		$data['cats'] = $links->get_cats();
		load::view('forms/add_links_frm', $data);
	}


}