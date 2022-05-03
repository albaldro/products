<?php

// app/graphql/queries/quest/QuestsQuery 

namespace App\GraphQL\Queries\CostPrice;

use App\Models\CostPrice;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Query;

class CostPricesQuery extends Query
{
    protected $attributes = [
        'name' => 'costPrices',
    ];

    public function type(): Type
    {
        return Type::listOf(GraphQL::type('CostPrice'));
    }

    public function resolve($root, $args)
    {
        return CostPrice::all();
    }
}