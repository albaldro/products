<?php

// app/graphql/mutations/category/CreateCategoryMutation 

namespace App\GraphQL\Mutations\CostPrice;

use App\Models\CostPrice;
use Rebing\GraphQL\Support\Mutation;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;

class CreateCostPriceMutation extends Mutation
{
    protected $attributes = [
        'name' => 'createCostPrice',
        'description' => 'Creates a CostPrice'
    ];

    public function type(): Type
    {
        return GraphQL::type('CostPrice');
    }

    public function args(): array
    {
        return [
            'quantity' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'quantity of CostPrice'
            ],
            'cost' => [
                'type' => Type::nonNull(Type::float()),
                'description' => 'cost of CostPrice'
            ],
            'id_product' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'id of product',
                'rules' => ['exists:products,_id']
            ]
        ];
    }

    public function resolve($root, $args)
    {
        $CostPrice = new CostPrice();
        $CostPrice->fill($args);
        $CostPrice->save();

        return $CostPrice;
    }
}
