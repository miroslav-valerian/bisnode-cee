<?php

namespace Valerian\Bisnode\Cee;

class CompanyQueryType
{

    /**
     * @var RegIDType $RegistrationID
     */
    protected $RegistrationID = null;

    /**
     * @param RegIDType $RegistrationID
     */
    public function __construct($RegistrationID)
    {
      $this->RegistrationID = $RegistrationID;
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
     * @return CompanyQueryType
     */
    public function setRegistrationID($RegistrationID)
    {
      $this->RegistrationID = $RegistrationID;
      return $this;
    }

}
