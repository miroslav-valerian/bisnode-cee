<?php

namespace Valerian\Bisnode\Cee;

class IndicationResultType
{

    /**
     * @var CauseInfoType[] $CauseInfo
     */
    protected $CauseInfo = null;

    /**
     * @var int $causesFound
     */
    protected $causesFound = null;

    /**
     * @var int $remainingCredits
     */
    protected $remainingCredits = null;

    /**
     * @param int $causesFound
     * @param int $remainingCredits
     */
    public function __construct($causesFound, $remainingCredits)
    {
      $this->causesFound = $causesFound;
      $this->remainingCredits = $remainingCredits;
    }

    /**
     * @return CauseInfoType[]
     */
    public function getCauseInfo()
    {
      return $this->CauseInfo;
    }

    /**
     * @param CauseInfoType[] $CauseInfo
     * @return \Valerian\Bisnode\Cee\IndicationResultType
     */
    public function setCauseInfo(array $CauseInfo = null)
    {
      $this->CauseInfo = $CauseInfo;
      return $this;
    }

    /**
     * @return int
     */
    public function getCausesFound()
    {
      return $this->causesFound;
    }

    /**
     * @param int $causesFound
     * @return \Valerian\Bisnode\Cee\IndicationResultType
     */
    public function setCausesFound($causesFound)
    {
      $this->causesFound = $causesFound;
      return $this;
    }

    /**
     * @return int
     */
    public function getRemainingCredits()
    {
      return $this->remainingCredits;
    }

    /**
     * @param int $remainingCredits
     * @return \Valerian\Bisnode\Cee\IndicationResultType
     */
    public function setRemainingCredits($remainingCredits)
    {
      $this->remainingCredits = $remainingCredits;
      return $this;
    }

}
