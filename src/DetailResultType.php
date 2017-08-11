<?php

namespace Valerian\Bisnode\Cee;

class DetailResultType
{

    /**
     * @var CauseType $Cause
     */
    protected $Cause = null;

    /**
     * @var int $remainingCredits
     */
    protected $remainingCredits = null;

    /**
     * @param int $remainingCredits
     */
    public function __construct($remainingCredits)
    {
      $this->remainingCredits = $remainingCredits;
    }

    /**
     * @return CauseType
     */
    public function getCause()
    {
      return $this->Cause;
    }

    /**
     * @param CauseType $Cause
     * @return \Valerian\Bisnode\Cee\DetailResultType
     */
    public function setCause($Cause)
    {
      $this->Cause = $Cause;
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
     * @return \Valerian\Bisnode\Cee\DetailResultType
     */
    public function setRemainingCredits($remainingCredits)
    {
      $this->remainingCredits = $remainingCredits;
      return $this;
    }

}
