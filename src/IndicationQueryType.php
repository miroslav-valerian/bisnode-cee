<?php

namespace Valerian\Bisnode\Cee;

class IndicationQueryType
{

    /**
     * @var LoginDataType $LoginData
     */
    protected $LoginData = null;

    /**
     * @var SearchQueryType $SearchQuery
     */
    protected $SearchQuery = null;

    /**
     * @param LoginDataType $LoginData
     * @param SearchQueryType $SearchQuery
     */
    public function __construct($LoginData, $SearchQuery)
    {
      $this->LoginData = $LoginData;
      $this->SearchQuery = $SearchQuery;
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
     * @return IndicationQueryType
     */
    public function setLoginData($LoginData)
    {
      $this->LoginData = $LoginData;
      return $this;
    }

    /**
     * @return SearchQueryType
     */
    public function getSearchQuery()
    {
      return $this->SearchQuery;
    }

    /**
     * @param SearchQueryType $SearchQuery
     * @return IndicationQueryType
     */
    public function setSearchQuery($SearchQuery)
    {
      $this->SearchQuery = $SearchQuery;
      return $this;
    }

}
