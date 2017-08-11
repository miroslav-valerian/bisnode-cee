<?php

namespace Valerian\Bisnode\Cee;

class ResponseOptionsType
{

    /**
     * @var boolean $ExpandCodes
     */
    protected $ExpandCodes = null;

    /**
     * @var ServiceLangType $Lang
     */
    protected $Lang = null;

    /**
     * @param boolean $ExpandCodes
     */
    public function __construct($ExpandCodes)
    {
      $this->ExpandCodes = $ExpandCodes;
    }

    /**
     * @return boolean
     */
    public function getExpandCodes()
    {
      return $this->ExpandCodes;
    }

    /**
     * @param boolean $ExpandCodes
     * @return \Valerian\Bisnode\Cee\ResponseOptionsType
     */
    public function setExpandCodes($ExpandCodes)
    {
      $this->ExpandCodes = $ExpandCodes;
      return $this;
    }

    /**
     * @return ServiceLangType
     */
    public function getLang()
    {
      return $this->Lang;
    }

    /**
     * @param ServiceLangType $Lang
     * @return \Valerian\Bisnode\Cee\ResponseOptionsType
     */
    public function setLang($Lang)
    {
      $this->Lang = $Lang;
      return $this;
    }

}
