<?php

// app/graphql/queries/quest/QuestQuery 

namespace App\GraphQL\Queries\SellPrice;

use App\Models\SellPrice;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Query;

class SellPriceQuery extends Query
{
    protected $attributes = [
        'name' => 'sellPrice',
    ];

    public function type(): Type
    {
        return GraphQL::type('SellPrice');
    }

    public function args(): array
    {
        return [
            'id' => [
                'name' => 'id',
                'type' => Type::string(),
                'rules' => ['required']
            ]
        ];
    }

    public function resolve($root, $args)
    {
        return SellPrice::findOrFail($args['id']);
    }
}
