<?php

namespace Valerian\Bisnode\Cee;

class PersonQueryType
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var date $DateOfBirth
     */
    protected $DateOfBirth = null;

    /**
     * @var string $PersonalNumber
     */
    protected $PersonalNumber = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \Valerian\Bisnode\Cee\PersonQueryType
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return date
     */
    public function getDateOfBirth()
    {
      return $this->DateOfBirth;
    }

    /**
     * @param date $DateOfBirth
     * @return \Valerian\Bisnode\Cee\PersonQueryType
     */
    public function setDateOfBirth($DateOfBirth)
    {
      $this->DateOfBirth = $DateOfBirth;
      return $this;
    }

    /**
     * @return string
     */
    public function getPersonalNumber()
    {
      return $this->PersonalNumber;
    }

    /**
     * @param string $PersonalNumber
     * @return \Valerian\Bisnode\Cee\PersonQueryType
     */
    public function setPersonalNumber($PersonalNumber)
    {
      $this->PersonalNumber = $PersonalNumber;
      return $this;
    }

}
