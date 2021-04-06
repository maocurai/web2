<?php
class User
{
  private $nick_name;
  private $password;
  private $info;
  
  public function __construct($nick_name, $password, $info)
  {
    $this->nick_name = $nick_name;
    $this->password = $password;
    $this->info = $info;
  }

  public function toString()
  {
    return "nick_name: {$this->nick_name}<br/>password: {$this->password}<br/>info: {$this->info}<br/>";
  }

  public function getNick_name()
  {
    return $this->nick_name;
  }
 
  public function getPassword()
  {
    return $this->password;
  }

  public function getInfo()
  {
    return $this->info;
  }

  public function userMethod()
  {
    echo "User's method is used<br/>";
  }
}

class RootUser extends User
{
  private $rootUserAttribute;

  function __construct($nick_name, $password, $info, $rootUserAttribute)
  {
    parent::__construct($nick_name, $password, $info);
    $this->rootUserAttribute = $rootUserAttribute;
  }

  public function rootUserMethod()
  {
    echo "Root user's method is used<br/>";
  }

  public function getRootUserAttribute()
  {
    return $this->rootUserAttribute;
  }
}

class Autorisation
{
    private static $instance = null;
    private $autorisedUsers;

    public static function getInstance()
    {
        if (null === self::$instance)
        {
            self::$instance = new self();
        }
        return self::$instance;
    }

    private function __clone() {}

    private function __construct() {}

    public function addData($data)
    {
        $this->autorisedUsers = $data;
    }

    public function addUser($newUser) 
    {
        if(!(array_key_exists($newUser->getPassword(), $this->autorisedUsers))) {
            $this->autorisedUsers[$newUser->getPassword()] = $newUser;
    } else {
        echo "Password already exists!<br/>";
    }
        echo "User added!<br/>";
    }

    public function getUser($userPassword) {
        return $this->autorisedUsers[$userPassword]->toString();
    }
}
?>