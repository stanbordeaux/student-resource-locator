<?php

class User_manager_model {

    private $file = "members.txt";
    
     //
    public function log_in($username, $password)
    {
    //initalise user data
    //$this->username = input::post('username');
    //$this->password = input::post('password');

    $fh = file($this->file);


    for ($i = 0; $i < count($fh); $i++)
    {
        //extract each element use comma-space for delimeter and trim any white space around elements 
        $temp = explode(', ', 	trim($fh[$i]));
    	
    	//create the new array
        $fh[$i] = array('username' => $temp[0], 'password' => trim($temp[2]));
        
        //here we check if the submitted name is in the registered members file
    	if ($fh[$i]['username'] == $username && $fh[$i]['password'] == $password)
    	{
    		$this->logged_in = true; 
            break;       
    	}
        else
        {
            $this->logged_in = false;
        }
        
    }
        return  $this->logged_in;
    }
    
    //add new registration to members file
    public function add_user($username, $email, $password)
    {
        $registered = false;
        $fh = fopen($this->file, 'a+');

        //check if the file has data.  If empty file then we write user details
        if (filesize($this->file) === 0)
        {
            fwrite($fh, "\r\n$username, $email, $password");
        }
        else
        {
            //if users already registered check for duplicate usernames
            $username_taken = $this->check_username($username);
              
            if ($username_taken)
            {
                $registered = false;

            } 
            else
            {
                fwrite($fh, "\r\n$username, $email, $password");
                $registered = true;
            }

        }
        return $registered;
    }  
    
    /**
    * Function to check if username has already been
    * registered.
    * 
    * @param string $username
    * @return boolean $result
    */
    private function check_username($username)
    {
        $fh   = fopen($this->file, 'r');

        rewind($fh);
        while (!feof($fh))
        {
            $line = fgets($fh);
            $temp = explode(', ', $line);
            if ($temp[0] == $username)
            {
                //$this->found = true;
                $username_taken = true;
                break;
            }
            else
            {
                $username_taken = false;
            }
        }

        return $username_taken;
    }      
     
}