<?php

// app/graphql/mutations/category/UpdateCategoryMutation 

namespace App\GraphQL\Mutations\CostPrice;

use App\Models\CostPrice;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Mutation;

class UpdateCostPriceMutation extends Mutation
{
    protected $attributes = [
        'name' => 'updateCostPrice',
        'description' => 'Updates a CostPrice'
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
        $CostPrice = CostPrice::findOrFail($args['_id']);
        $CostPrice->fill($args);
        $CostPrice->save();

        return $CostPrice;
    }
}
