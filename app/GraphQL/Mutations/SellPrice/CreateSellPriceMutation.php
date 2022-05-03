<?php

// app/graphql/mutations/quest/CreateQuestMutation 

namespace App\GraphQL\Mutations\SellPrice;

use App\Models\SellPrice;
use Rebing\GraphQL\Support\Mutation;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;

class CreateSellPriceMutation extends Mutation
{
    protected $attributes = [
        'name' => 'createSellPrice',
        'description' => 'Creates a SellPrice'
    ];

    public function type(): Type
    {
        return GraphQL::type('SellPrice');
    }

    public function args(): array
    {
        return [
            'quantity' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'quantity of CostPrice'
            ],
            'price' => [
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
        $sellPrice = new SellPrice();
        $sellPrice->fill($args);
        $sellPrice->save();

        return $sellPrice;
    }
}
