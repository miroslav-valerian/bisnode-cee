<?php

namespace Valerian\Bisnode\Cee;

class CauseType
{

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var DocumentType[] $Document
     */
    protected $Document = null;

    /**
     * @param string $Code
     * @param string $Description
     * @param DocumentType[] $Document
     */
    public function __construct($Code, $Description, array $Document)
    {
      $this->Code = $Code;
      $this->Description = $Description;
      $this->Document = $Document;
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
     * @return \Valerian\Bisnode\Cee\CauseType
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
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
     * @return \Valerian\Bisnode\Cee\CauseType
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return DocumentType[]
     */
    public function getDocument()
    {
      return $this->Document;
    }

    /**
     * @param DocumentType[] $Document
     * @return \Valerian\Bisnode\Cee\CauseType
     */
    public function setDocument(array $Document)
    {
      $this->Document = $Document;
      return $this;
    }

}
