<?php

namespace Valerian\Bisnode\Cee;

class SubjectInfoType
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Address
     */
    protected $Address = null;

    /**
     * @var RegIDType $RegistrationID
     */
    protected $RegistrationID = null;

    /**
     * @var date $DateOfBirth
     */
    protected $DateOfBirth = null;

    /**
     * @param string $Name
     * @param string $Address
     */
    public function __construct($Name, $Address)
    {
      $this->Name = $Name;
      $this->Address = $Address;
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
     * @return \Valerian\Bisnode\Cee\SubjectInfoType
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
      return $this->Address;
    }

    /**
     * @param string $Address
     * @return \Valerian\Bisnode\Cee\SubjectInfoType
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

    /**
     * @return RegIDType
     */
    public function getRegistrationID()
    {
      return $this->RegistrationID;
    }

    /**
     * @param RegIDType $RegistrationID
     * @return \Valerian\Bisnode\Cee\SubjectInfoType
     */
    public function setRegistrationID($RegistrationID)
    {
      $this->RegistrationID = $RegistrationID;
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
     * @return \Valerian\Bisnode\Cee\SubjectInfoType
     */
    public function setDateOfBirth($DateOfBirth)
    {
      $this->DateOfBirth = $DateOfBirth;
      return $this;
    }

}
