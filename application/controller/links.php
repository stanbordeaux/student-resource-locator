<?php

/**
* 
*/
class Links_controller
{
	private $links;
	
	public function __construct()
	{
		# code...
		
	}

	
	public function add_link()
	{
		$url      = input::post('url_address');
		$link_txt = input::post('url_link_txt');
		$category = input::post('category');

		$links = load::model('links');
		$add_link = $links->add_link($url, $link_txt, $category);
		
		load::view('welcome');
	}

	public function get_form($name = null, $frmdata = null)
	{
		
		$data['site_title'] = config::get('site_title');
		$data['sub_title'] = config::get('sub_title');
		$data['content'] = "forms/$name";
		$data['cats'] = $frmdata;
		load::view('templates/layout', $data);
	}
	public function add_form()
	{
		$links = load::model('links');
		$data['cats'] = $links->get_cats();
		$this->get_form('add_links_frm', $data);
		//load::view('forms/add_links_frm', $data);
	}

	public function links_form()
	{
		$links = load::model('links');
		$data['cats'] = $links->get_cats();
		$this->get_form('view_links_frm', $data);
		
	}

	public function category_form()
	{
		$this->get_form('add_cat_frm');
	}
}