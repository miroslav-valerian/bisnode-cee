<?php

namespace Valerian\Bisnode\Cee;

class CEEService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'LoginDataType' => 'Valerian\\Bisnode\\Cee\\LoginDataType',
      'ResponseOptionsType' => 'Valerian\\Bisnode\\Cee\\ResponseOptionsType',
      'DescriptionType' => 'Valerian\\Bisnode\\Cee\\DescriptionType',
      'IndicationQueryType' => 'Valerian\\Bisnode\\Cee\\IndicationQueryType',
      'DetailQueryType' => 'Valerian\\Bisnode\\Cee\\DetailQueryType',
      'IndicationResultType' => 'Valerian\\Bisnode\\Cee\\IndicationResultType',
      'DetailResultType' => 'Valerian\\Bisnode\\Cee\\DetailResultType',
      'SearchQueryType' => 'Valerian\\Bisnode\\Cee\\SearchQueryType',
      'CompanyQueryType' => 'Valerian\\Bisnode\\Cee\\CompanyQueryType',
      'PersonQueryType' => 'Valerian\\Bisnode\\Cee\\PersonQueryType',
      'CauseInfoType' => 'Valerian\\Bisnode\\Cee\\CauseInfoType',
      'CauseType' => 'Valerian\\Bisnode\\Cee\\CauseType',
      'DocumentType' => 'Valerian\\Bisnode\\Cee\\DocumentType',
      'SubjectType' => 'Valerian\\Bisnode\\Cee\\SubjectType',
      'SubjectInfoType' => 'Valerian\\Bisnode\\Cee\\SubjectInfoType',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      if (!$wsdl) {
          $wsdl = 'https://source.bisnode.cz/services/cee_fix/v002/soap?wsdl';
          //$wsdl = 'https://source.bisnode.cz/services/cee/v002/soap?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param IndicationQueryType $parameter
     * @return IndicationResultType
     */
    public function Indication(IndicationQueryType $parameter)
    {
      return $this->__soapCall('Indication', array($parameter));
    }

    /**
     * @param DetailQueryType $parameter
     * @return DetailResultType
     */
    public function Detail(DetailQueryType $parameter)
    {
      return $this->__soapCall('Detail', array($parameter));
    }

}
