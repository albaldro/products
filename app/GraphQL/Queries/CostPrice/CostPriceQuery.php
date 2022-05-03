<?php

// app/graphql/queries/quest/QuestQuery 

namespace App\GraphQL\Queries\CostPrice;

use App\Models\CostPrice;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Query;

class CostPriceQuery extends Query
{
    protected $attributes = [
        'name' => 'costPrice',
    ];

    public function type(): Type
    {
        return GraphQL::type('CostPrice');
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
        return CostPrice::findOrFail($args['id']);
    }
}