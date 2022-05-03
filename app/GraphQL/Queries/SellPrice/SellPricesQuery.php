<?php

// app/graphql/queries/quest/QuestsQuery 

namespace App\GraphQL\Queries\SellPrice;

use App\Models\SellPrice;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Query;

class SellPricesQuery extends Query
{
    protected $attributes = [
        'name' => 'sellPrices',
    ];

    public function type(): Type
    {
        return Type::listOf(GraphQL::type('SellPrice'));
    }

    public function resolve($root, $args)
    {
        return SellPrice::all();
    }
}
