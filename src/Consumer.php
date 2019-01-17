 <?php

namespace App ;

use  App\src\DataSources\DataSourceFactory ;

class Consumer   {
    private     $dataSource;

    /**
     * Consumer constructor.
     * @param string $dataSource
     *
     * @param string $path
     */
    public function __construct(string $dataSource , string $path){
        $this->dataSource =  DataSourceFactory::getDataSourceInstance($dataSource , $path);
    }

    public function getProductData(

    ){
        $this->dataSource->getData();



    }
}
