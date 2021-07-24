<?php

namespace Digisalad\Shop\Http\Resources;

use Digisalad\Basic\Http\Resources\BaseResource;
use Digisalad\Shop\Http\Resources\Interfaces\ProductResourceInterface;
use Illuminate\Http\Request;

/**
 * Class ProductResource
 * @package Digisalad\Shop\Http\Resources
 */
class ProductResource extends BaseResource implements ProductResourceInterface
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array
     */
    public function toArray($request): array
    {
        return parent::toArray($request);
    }
}
