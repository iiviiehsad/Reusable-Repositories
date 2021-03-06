<?php namespace Acme\Repos\Product;

use Acme\Repos\DbRepository;
use Product;

class DbProductRepository extends DbRepository implements ProductRepository {

    /**
     * @var Product
     */
    protected $model;

    /**
     * @param Product $model
     */
    function __construct(Product $model)
    {
        $this->model = $model;
    }

}