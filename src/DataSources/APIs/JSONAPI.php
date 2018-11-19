<?php

namespace App\src\DataSources\APIs;

use App\src\DataSources\APIs\DataSourceContract;

class JSONAPI implements DataSourceContract
{
    /**
     * @var mixed
     */
    protected $data;

    /**
     * @param $curl
     */
    public function __construct($curl)
    {
        $this->data = $this->handleRequest($curl);

    }

    public function handleRequest($curl)
    {
        // handle curl request and get Product parameters
    }

    public function getData()
    {
        return $this->data;
    }

}
