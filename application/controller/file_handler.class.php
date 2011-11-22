<?php

//initiate the class

/**
 * File_handler class.  This class performs a number of usefull
 * file operations, including open, read, write and make useful arrays from file contents
 * @version 1.0
 * @author Stan Bordeaux
 * 
 */

class File_handler {
    
    private $file;
    private $data;
	private $location = false;
	private $fh = false;
	private $found = false;
    private $handle;
    private $keys = false;
    private $length;
    private $method;
     
	
    public function __construct($file, $method = 'r')
    {
        $this->file = $file;
        $this->method = $method;
        $this->length = filesize($file);
    }
    
    public function open_file()
    {
        //$method = $this->method;
        $this->file = fopen($this->file, $this->method);
        return $file;
    }
    /**
     * write_file: opens the file and writes to file, closes file
     * 
     * @access public
     * @param $file string file name
     * @param $data sring to write to file
     * 
    */
    public function write_file($data)
    {
        $method = $this->method;
        $file = fopen($this->file, $method);
        
        fwrite($file, $data);
        fclose($file);
    }
    
    /**
     * read_file: opens the file and reads the content
     * @access public
     * @param $file string file name
     * @param $length int number of characters
     * @return $data sring contents of file
     * 
    */
    public function read_file()
    {
        $file = $this->file;
        $length = $this->length;
        
        $handle = fopen($file, 'r');
        $data = fread($handle, $length);
        //if (isset($length))
//        {
//            //read number of characters passed
//            $length = $this->length;
//            $data = fread($handle, $this->length);
//        }
//        else
//        {
//            //read the whole file
//            $this->length = filesize($this->file);
//            $data = fread($handle, $this->length);
//        }
        return $data;
        
        
    }
    
    public function append_file($data)
    {
        $handle = fopen($this->file, 'a+');
        fwrite($handle, $data);
        fclose($handle);
    }
    
    public function make_array($keys = false)
    {
        $file = $this->file;
        
        $data = file($file);
        if (is_array($keys))
        {                
            for ($i = 0; $i < count($data); $i++)
            {
                 //extract each element use comma-space for delimeter and trim any white space around elements 
                $temp = explode(', ', trim($data[$i]));
                $data[$i] = array_combine($keys, $temp);
            }
        }
        else
        {
            for ($i = 0; $i < count($data); $i++)
            {
                 //extract each element use comma-space for delimeter and trim any white space around elements 
                $data[$i] = explode(', ', trim($data[$i]));
              
            }
        }                        
        return $data;
    }
    
		
    public function check_duplicate($check)
    {
        
        $fh = $this->file;
        //$fh = fopen($file, 'r');
		rewind($fh);
        while (!feof($fh))
        {
            $line = fgets($fh);
            $temp = explode(', ', $line);
            if ($temp[0] == $check)
            {
				$this->found = true;
                $result = "Username already taken. Choose another one.";
                break;
            }
        if(!$this->found)
		{
			fwrite($fh, "\r\n$check");
		}
        }
		
        return $result;
    }
	
	public function render($heads, $data, $extra = null)
    {
        $c = false;
        echo "<table class='$extra'>";
        echo "<tr>";
        if (!empty($heads[0]))
        {
            foreach ($heads as $head)
            {
               echo '<th>' .$head. '</th>';
            }
            
            echo '</tr>';
            foreach ($data as $key => $value)
            {
                echo '<tr'.(($c = !$c)?' class="odd"':' class="even"').'>';
                foreach ($value as $val)
                {
                    echo '<td>'.$val.'</td>';
                }
            }
             echo '</tr>';
        }
        echo '</table>';
    }
    
    public function display($length = null)
    {
        if (isset($length)) 
        {
            $this->length = $length;
        }
        else
        {
            $length = $this->length;
        }
        
        $data = $this->read_file($this->file, $this->length);
        
        echo nl2br($data);
    }
}