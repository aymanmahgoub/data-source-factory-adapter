<?php

namespace App\src\DataSources;

const API_NAMESPACE = 'App\src\DataSources\APIs\\';

class DataSourceFactory
{
    public static function getDataSourceInstance($ApiName, $path)
    {
        try {
            $ADIReflection =  new \ReflectionClass(API_NAMESPACE . $ApiName);
        } catch (\Throwable $throwable) {
            return 'Invalid API Name: API class is not found';
        }

        return $ADIReflection->newInstance($path);
    }
}
