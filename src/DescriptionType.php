<?php

namespace Valerian\Bisnode\Cee;

class DescriptionType
{

    /**
     * @var string $_
     */
    protected $_ = null;

    /**
     * @var ServiceLangType $lang
     */
    protected $lang = null;

    /**
     * @param string $_
     * @param ServiceLangType $lang
     */
    public function __construct($_, $lang)
    {
      $this->_ = $_;
      $this->lang = $lang;
    }

    /**
     * @return string
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param string $_
     * @return \Valerian\Bisnode\Cee\DescriptionType
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return ServiceLangType
     */
    public function getLang()
    {
      return $this->lang;
    }

    /**
     * @param ServiceLangType $lang
     * @return \Valerian\Bisnode\Cee\DescriptionType
     */
    public function setLang($lang)
    {
      $this->lang = $lang;
      return $this;
    }

}
