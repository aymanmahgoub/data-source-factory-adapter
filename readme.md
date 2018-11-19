# API consumer
* Create a consumer that process products from different data sources of varying data formats,
  and insert them into database (without really inserting anything into the database),
  where consumer shouldn’t know about external data sources (APIs or files) implementation, 
  with the ability to add more data sources without changing code implementation of the consumer.

* Using Factory and Adapter design principle