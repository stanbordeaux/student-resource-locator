<?php

class main_controller
{
    private $site_title;
    private $sub_title;
	
	/**
	 * starting main controller
	 * 
	 */

    public function __construct()
    {
        $this->site_title = config::get('site_title');
        $this->sub_title = config::get('sub_title');
    }
	public function index($logged_in = false)
	{
        $data['site_title'] = $this->site_title;
        $data['sub_title'] = $this->sub_title;
        $data['content'] = "pages/home";
		if ($logged_in)
        {
            //header('Location: welcome.php');
            //$data['user'] = 'stan';
            $this->username = $username;
            $this->password = $password;
            $data['username'] = $this->username;
            $data['style'] = $this->style_file;
            load::view('index', $data);
        }
        else
        {
            load::view('templates/layout', $data);
        }
	}

    public function about()
    {
        $data['site_title'] = $this->site_title;
        $data['sub_title'] = $this->sub_title;
        $data['content'] = "pages/about";

        load::view('templates/layout', $data);
        
    }
}