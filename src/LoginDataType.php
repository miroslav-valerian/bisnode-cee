<?php

namespace Valerian\Bisnode\Cee;

class LoginDataType
{

    /**
     * @var string $UserName
     */
    protected $UserName = null;

    /**
     * @var string $Password
     */
    protected $Password = null;

    /**
     * @param string $UserName
     * @param string $Password
     */
    public function __construct($UserName, $Password)
    {
      $this->UserName = $UserName;
      $this->Password = $Password;
    }

    /**
     * @return string
     */
    public function getUserName()
    {
      return $this->UserName;
    }

    /**
     * @param string $UserName
     * @return \Valerian\Bisnode\Cee\LoginDataType
     */
    public function setUserName($UserName)
    {
      $this->UserName = $UserName;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
      return $this->Password;
    }

    /**
     * @param string $Password
     * @return \Valerian\Bisnode\Cee\LoginDataType
     */
    public function setPassword($Password)
    {
      $this->Password = $Password;
      return $this;
    }

}
