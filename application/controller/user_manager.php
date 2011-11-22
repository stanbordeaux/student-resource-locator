<?php

/**
 * This is a user manager class built to use flat files for storing user log in data
 * 
 * @author Stan Bordeaux
 * @copyright 2011
 * @version 0.1
 */
class User_manager_controller 
{
    
    private $username;
    private $password;
    private $file      = 'members.txt';
    private $email;
    private $valid     = false;
    private $logged_in = false;
    private $temp_file = 'tempmembers.txt';
    protected $data    = array();                                    

    public function __construct()
    {
        //$this->data = load::model('student'); 
        $file = $this->file;
        
    }

    public function index()
    {
        //echo 'hello shithead!' ."<br>";
        //echo $this->file;
        //echo $this->get_filename .'<br>';
        //$this->validate_user('joe', 'joe');
        load::view('login');
    }

    public function validate_user()
    {
        $user_manager = load::model('user_manager');
        $username = input::post('username');
        $password = input::post('password');

        $logged_in = $user_manager->log_in($username, $password);
        if ($logged_in)
        {
            //header('Location: welcome.php');
            //$data['user'] = 'stan';
            $this->username = $username;
            $this->password = $password;
            load::view('welcome', array('username' => $username));
        }
        else
        {
            
            load::view('register');
        }

    }


    /**
    * Log in function accepts username and password and 
    * matches against data stored in get_filename() 
    *  
    * @param string $username user name for validation
    * @param string $password user password for validation
    * @return boolean $logged_in 
    */


     /**
     * register form
     * 
     */
    public function reg_frm()
    {
        load::view('register_frm');
    }
    

    /**
    * Register user function. 
    * Extended bu check_username() to see if
    * username already registered
    * 
    * @param string $username
    * @param string $email
    * @param string $password 
    * @return string $result Success message
    */
    public function register()
    {
        //initialise vars
        session_start();

        $username = input::post('username');
        $email    = input::post('email');
        $password = input::post('password');
        
        $user_manager = load::model('user_manager');

        $data['message'] = $user_manager->add_user($username, $email, $password);
        if ($registered)
        {
            $data['username'] = $_SESSION['username'];
        }
        else
        {
            
        }

        load::view('welcome', $data);
    }



    /**
    * Function to delete user data
    * 
    * @param string $data string used for matching data
    */
    public function delete_line($data)
    {

    $file_name = $this->get_filename();
    $file = fopen($file_name, 'r');

    rewind($file);
    while (!feof($file))
    {
        $line = fgets($file);
        
        $temp = explode(', ', $line);
      
        if ($temp[0] == $data)
        {
           //if there is a match of data unset (delete) the data
           unset($temp);
          
        }
        else
        {
            //here we rewrite the data back to a temp file
            $temp2 = implode(', ', $temp);
            $temp_file = $this->temp_file;
            
            //open the temp file and append each line of data
            $fh = fopen($temp_file, 'a+');
            fwrite($fh, "$temp2");
            fclose($fh);
        }
     
    }
    fclose($file);

    //matched data deleted and other data written to temp file now we need to rename temp file to
    //original users file path
    rename($temp_file, $this->get_filename()) or die("error renaming");

    $data = "Data deleted and file written";
    return $data;
    }

}
