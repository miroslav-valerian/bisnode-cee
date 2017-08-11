<?php

require __DIR__ . '/../vendor/autoload.php';

$username = 'username';
$password = 'password';


$login = new \Valerian\Bisnode\Cee\LoginDataType($username, $password);
$personQuery = new \Valerian\Bisnode\Cee\PersonQueryType();

$personQuery->setName('Jméno Přijmení')
    ->setDateOfBirth('1992-12-23');

$searchQuery = new \Valerian\Bisnode\Cee\SearchQueryType(null, $personQuery);
$indicationQueryType = new \Valerian\Bisnode\Cee\IndicationQueryType($login, $searchQuery);
$cee = new \Valerian\Bisnode\Cee\CEEService();
/** @var \Valerian\Bisnode\Cee\IndicationResultType $response */
$response = $cee->Indication($indicationQueryType);

var_dump($response->getCausesFound());
