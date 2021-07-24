<?php

namespace Digisalad\Shop\Http\Resources;

use Digisalad\Basic\Http\Resources\BaseResourceCollection;
use Digisalad\Shop\Http\Resources\Interfaces\ProductCollectionInterface;
use Digisalad\Shop\Http\Resources\Interfaces\ProductResourceInterface;

/**
 * Class ProductCollection
 * @package Digisalad\Shop\Http\Resources
 */
class ProductCollection extends BaseResourceCollection implements ProductCollectionInterface
{
    /**
     * ProductCollection constructor.
     * @param $resource
     */
    public function __construct($resource)
    {
        parent::__construct($resource, app(ProductResourceInterface::class));
    }
}
