<?php

namespace App\src\DataSources\APIs;

use App\src\DataSources\APIs\DataSourceContract;
use App\src\DataSources\APIs\FormatterContract;

class CSVFile implements DataSourceContract, FormatterContract
{
    /**
     * @var mixed
     */
    protected $data;

    /**
     * @param $path
     */
    public function __construct($path)
    {
        $this->processFile($path);
    }

    public function processFile($path)
    {
        // open path and get product data
        // set product data in $data variable
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
