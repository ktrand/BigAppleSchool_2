<?php

namespace Dadata;

use Dadata\Dadata\DadataClient;

class DaDataApi
{

    private $api_key = '4b8a7b9d1a53b30e6faf1b9ebd2330e1758e5530';

    /**
     * @var DadataClient
     */
    private DadataClient $daDataClient;

    function __construct()
    {
        $this->daDataClient = new DadataClient($this->api_key, null);
    }

    /**
     * Метод получает БИК банка и возвращает его наиминование
     * @param string $bik
     * @return string
     */
    public function getBankNameByBIK(string $bik): string
    {
        $result = $this->daDataClient->findById("bank", $bik, 1);
        return $result[0]['value'];
    }

    /**
     * Метод получает ИНН организации и возвращает его наиминование
     * @param string $inn
     * @return string
     */
    public function getOrganizationNameByINN(string $inn): string
    {
        $result = $this->daDataClient->findById("party", $inn, 1);
        return $result[0]['value'];
    }
}