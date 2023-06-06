<?php

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;

class ProductFilter extends AbstractFilter
{
    const BRANDS = 'brands';
    const MANUFACTURERS = 'manufacturers';
    const PACKAKING = 'packaging_types';
    const PRICES = 'prices';
    const TAGS = 'tags';

    protected function getCallbacks(): array
    {
        return [
            self::BRANDS => [$this, 'brands'],
            self::MANUFACTURERS => [$this, 'manufacturers'],
            self::PACKAKING => [$this, 'packaging_types'],
            self::PRICES => [$this, 'prices'],
            self::TAGS => [$this, 'tags'],
        ];
    }

    protected function brands(Builder $builder, $value)
    {
        $builder->whereIn('brand_id', $value);
    }

    protected function manufacturers(Builder $builder, $value)
    {
        $builder->whereIn('manufacturer_id ', $value);
    }

    protected function packaging_types(Builder $builder, $value)
    {
        $builder->whereIn('packaging_id', $value);
    }

    protected function prices(Builder $builder, $value)
    {
        $builder->whereBetween('price', $value);
    }

    protected function tags(Builder $builder, $value)
    {
        $builder->whereHas('tags', function ($b) use ($value) {
            $b->whereIn('tag_id', $value);
        });
    }
}
