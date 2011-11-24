<?php

class Links_model {
	
	private $file     = 'categories.txt';
	private $textfile = 'url_links01.txt';

	public function get_cats()
	{
		$fh = file($this->file);
		  
		  for ($i = 0; $i < count($fh); $i++) 
		  {
		    // separate each element and store in a temporary array
		    $tmp = explode(',', $fh[$i]);
		    // assign each element of the temporary array to a named array key
		    $data[$i] = array('value' => $tmp[0], 'name' => $tmp[1]);
		  }
		  return $data;
	}

	public function add_link($url, $link_txt, $category) 
	{
		$cat     = str_replace('_', ' ', $category);
		$cat_uc  = ucwords($cat);
		$now     = time();
		$counter = 0;

		
		$data = file($this->textfile);

		//open the file for writing
		$fh = fopen($this->textfile,"a");

		//assemble the data into a line variable
		$data = $url . "," . $link_txt . "," . $cat_uc . "," .$now. "," .$counter. "\n";

		// write the data to the file
		fwrite($fh, $data);

		//close the file
		fclose($fh);
		//header('Location: view_links.php');
	}
}