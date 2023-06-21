<?php

require_once 'vendor/autoload.php';

use Dadata\DaDataApi;

$daDataApi = new DaDataApi();

var_export($daDataApi->getBankNameByBIK('044525225'));
echo "<br>";
var_export($daDataApi->getOrganizationNameByINN('7707083893'));