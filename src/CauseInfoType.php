<?php

namespace Valerian\Bisnode\Cee;

class CauseInfoType
{

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var string $DocumentType
     */
    protected $DocumentType = null;

    /**
     * @var date $RegistrationDate
     */
    protected $RegistrationDate = null;

    /**
     * @var SubjectInfoType $SubjectInfo
     */
    protected $SubjectInfo = null;

    /**
     * @param string $Code
     * @param string $DocumentType
     * @param date $RegistrationDate
     * @param SubjectInfoType $SubjectInfo
     */
    public function __construct($Code, $DocumentType, $RegistrationDate, $SubjectInfo)
    {
      $this->Code = $Code;
      $this->DocumentType = $DocumentType;
      $this->RegistrationDate = $RegistrationDate;
      $this->SubjectInfo = $SubjectInfo;
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param string $Code
     * @return \Valerian\Bisnode\Cee\CauseInfoType
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return string
     */
    public function getDocumentType()
    {
      return $this->DocumentType;
    }

    /**
     * @param string $DocumentType
     * @return \Valerian\Bisnode\Cee\CauseInfoType
     */
    public function setDocumentType($DocumentType)
    {
      $this->DocumentType = $DocumentType;
      return $this;
    }

    /**
     * @return date
     */
    public function getRegistrationDate()
    {
      return $this->RegistrationDate;
    }

    /**
     * @param date $RegistrationDate
     * @return \Valerian\Bisnode\Cee\CauseInfoType
     */
    public function setRegistrationDate($RegistrationDate)
    {
      $this->RegistrationDate = $RegistrationDate;
      return $this;
    }

    /**
     * @return SubjectInfoType
     */
    public function getSubjectInfo()
    {
      return $this->SubjectInfo;
    }

    /**
     * @param SubjectInfoType $SubjectInfo
     * @return \Valerian\Bisnode\Cee\CauseInfoType
     */
    public function setSubjectInfo($SubjectInfo)
    {
      $this->SubjectInfo = $SubjectInfo;
      return $this;
    }

}
