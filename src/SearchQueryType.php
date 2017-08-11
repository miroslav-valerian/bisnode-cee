<?php

namespace Valerian\Bisnode\Cee;

class SearchQueryType
{

    /**
     * @var CompanyQueryType $CompanyQuery
     */
    protected $CompanyQuery = null;

    /**
     * @var PersonQueryType $PersonQuery
     */
    protected $PersonQuery = null;

    /**
     * @param CompanyQueryType $CompanyQuery
     * @param PersonQueryType $PersonQuery
     */
    public function __construct($CompanyQuery, $PersonQuery)
    {
      $this->CompanyQuery = $CompanyQuery;
      $this->PersonQuery = $PersonQuery;
    }

    /**
     * @return CompanyQueryType
     */
    public function getCompanyQuery()
    {
      return $this->CompanyQuery;
    }

    /**
     * @param CompanyQueryType $CompanyQuery
     * @return \Valerian\Bisnode\Cee\SearchQueryType
     */
    public function setCompanyQuery($CompanyQuery)
    {
      $this->CompanyQuery = $CompanyQuery;
      return $this;
    }

    /**
     * @return PersonQueryType
     */
    public function getPersonQuery()
    {
      return $this->PersonQuery;
    }

    /**
     * @param PersonQueryType $PersonQuery
     * @return \Valerian\Bisnode\Cee\SearchQueryType
     */
    public function setPersonQuery($PersonQuery)
    {
      $this->PersonQuery = $PersonQuery;
      return $this;
    }

}
