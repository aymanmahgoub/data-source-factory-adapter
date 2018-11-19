<?php

namespace App\src\DataSources\APIs;

use App\src\DataSources\APIs\DataSourceContract;
use App\src\DataSources\APIs\FormatterContract;

class XMLAPI implements DataSourceContract, FormatterContract
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
        // handle curl get Product data
    }

    public function getData()
    {
        return $this->formattedData($this->data);
    }

    public function formattedData($data)
    {
        // return json response for data
    }

}
