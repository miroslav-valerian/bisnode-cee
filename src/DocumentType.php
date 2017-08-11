<?php

namespace Valerian\Bisnode\Cee;

class DocumentType
{

    /**
     * @var string $Type
     */
    protected $Type = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var string $ExecutorCompany
     */
    protected $ExecutorCompany = null;

    /**
     * @var string $Court
     */
    protected $Court = null;

    /**
     * @var string $ReferenceNumber
     */
    protected $ReferenceNumber = null;

    /**
     * @var date $IssueDate
     */
    protected $IssueDate = null;

    /**
     * @var string $OneTimePrice
     */
    protected $OneTimePrice = null;

    /**
     * @var string $RegularPrice
     */
    protected $RegularPrice = null;

    /**
     * @var string $NonMonetary
     */
    protected $NonMonetary = null;

    /**
     * @var SubjectType[] $Subject
     */
    protected $Subject = null;

    /**
     * @param string $Type
     * @param string $Description
     * @param string $ExecutorCompany
     * @param string $Court
     * @param string $ReferenceNumber
     * @param date $IssueDate
     * @param SubjectType[] $Subject
     */
    public function __construct($Type, $Description, $ExecutorCompany, $Court, $ReferenceNumber, $IssueDate, array $Subject)
    {
      $this->Type = $Type;
      $this->Description = $Description;
      $this->ExecutorCompany = $ExecutorCompany;
      $this->Court = $Court;
      $this->ReferenceNumber = $ReferenceNumber;
      $this->IssueDate = $IssueDate;
      $this->Subject = $Subject;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param string $Type
     * @return \Valerian\Bisnode\Cee\DocumentType
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \Valerian\Bisnode\Cee\DocumentType
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return string
     */
    public function getExecutorCompany()
    {
      return $this->ExecutorCompany;
    }

    /**
     * @param string $ExecutorCompany
     * @return \Valerian\Bisnode\Cee\DocumentType
     */
    public function setExecutorCompany($ExecutorCompany)
    {
      $this->ExecutorCompany = $ExecutorCompany;
      return $this;
    }

    /**
     * @return string
     */
    public function getCourt()
    {
      return $this->Court;
    }

    /**
     * @param string $Court
     * @return \Valerian\Bisnode\Cee\DocumentType
     */
    public function setCourt($Court)
    {
      $this->Court = $Court;
      return $this;
    }

    /**
     * @return string
     */
    public function getReferenceNumber()
    {
      return $this->ReferenceNumber;
    }

    /**
     * @param string $ReferenceNumber
     * @return \Valerian\Bisnode\Cee\DocumentType
     */
    public function setReferenceNumber($ReferenceNumber)
    {
      $this->ReferenceNumber = $ReferenceNumber;
      return $this;
    }

    /**
     * @return date
     */
    public function getIssueDate()
    {
      return $this->IssueDate;
    }

    /**
     * @param date $IssueDate
     * @return \Valerian\Bisnode\Cee\DocumentType
     */
    public function setIssueDate($IssueDate)
    {
      $this->IssueDate = $IssueDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getOneTimePrice()
    {
      return $this->OneTimePrice;
    }

    /**
     * @param string $OneTimePrice
     * @return \Valerian\Bisnode\Cee\DocumentType
     */
    public function setOneTimePrice($OneTimePrice)
    {
      $this->OneTimePrice = $OneTimePrice;
      return $this;
    }

    /**
     * @return string
     */
    public function getRegularPrice()
    {
      return $this->RegularPrice;
    }

    /**
     * @param string $RegularPrice
     * @return \Valerian\Bisnode\Cee\DocumentType
     */
    public function setRegularPrice($RegularPrice)
    {
      $this->RegularPrice = $RegularPrice;
      return $this;
    }

    /**
     * @return string
     */
    public function getNonMonetary()
    {
      return $this->NonMonetary;
    }

    /**
     * @param string $NonMonetary
     * @return \Valerian\Bisnode\Cee\DocumentType
     */
    public function setNonMonetary($NonMonetary)
    {
      $this->NonMonetary = $NonMonetary;
      return $this;
    }

    /**
     * @return SubjectType[]
     */
    public function getSubject()
    {
      return $this->Subject;
    }

    /**
     * @param SubjectType[] $Subject
     * @return \Valerian\Bisnode\Cee\DocumentType
     */
    public function setSubject(array $Subject)
    {
      $this->Subject = $Subject;
      return $this;
    }

}
