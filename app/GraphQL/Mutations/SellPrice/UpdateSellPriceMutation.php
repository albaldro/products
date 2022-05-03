<?php

// app/graphql/mutations/category/UpdateCategoryMutation 

namespace App\GraphQL\Mutations\SellPrice;

use App\Models\SellPrice;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Mutation;

class UpdateSellPriceMutation extends Mutation
{
    protected $attributes = [
        'name' => 'updateSellPrice',
        'description' => 'Updates a SellPrice'
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
                'type' =>  Type::nonNull(Type::string()),
            ],
            'quantity' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'quantity of CostPrice'
            ],
            'cost' => [
                'type' => Type::nonNull(Type::float()),
                'description' => 'cost of CostPrice'
            ]
        ];
    }

    public function resolve($root, $args)
    {
        $SellPrice = SellPrice::findOrFail($args['_id']);
        $SellPrice->fill($args);
        $SellPrice->save();

        return $SellPrice;
    }
}
