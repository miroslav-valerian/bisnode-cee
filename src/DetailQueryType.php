<?php

namespace Valerian\Bisnode\Cee;

class DetailQueryType
{

    /**
     * @var LoginDataType $LoginData
     */
    protected $LoginData = null;

    /**
     * @var string $CauseCode
     */
    protected $CauseCode = null;

    /**
     * @param LoginDataType $LoginData
     * @param string $CauseCode
     */
    public function __construct($LoginData, $CauseCode)
    {
      $this->LoginData = $LoginData;
      $this->CauseCode = $CauseCode;
    }

    /**
     * @return LoginDataType
     */
    public function getLoginData()
    {
      return $this->LoginData;
    }

    /**
     * @param LoginDataType $LoginData
     * @return \Valerian\Bisnode\Cee\DetailQueryType
     */
    public function setLoginData($LoginData)
    {
      $this->LoginData = $LoginData;
      return $this;
    }

    /**
     * @return string
     */
    public function getCauseCode()
    {
      return $this->CauseCode;
    }

    /**
     * @param string $CauseCode
     * @return \Valerian\Bisnode\Cee\DetailQueryType
     */
    public function setCauseCode($CauseCode)
    {
      $this->CauseCode = $CauseCode;
      return $this;
    }

}
