<?php

// app/graphql/mutations/SellPrice/DeleteCostPriceMutation 

namespace App\GraphQL\Mutations\SellPrice;

use App\Models\SellPrice;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Mutation;

class DeleteSellPriceMutation extends Mutation
{
    protected $attributes = [
        'name' => 'deleteSellPrice',
        'description' => 'Deletes a SellPrice'
    ];

    public function type(): Type
    {
        return Type::boolean();
    }

    public function args(): array
    {
        return [
            '_id' => [
                'name' => '_id',
                'type' => Type::nonNull(Type::string()),
                'rules' => ['exists:CostPrices']
            ]
        ];
    }

    public function resolve($root, $args)
    {
        $SellPrice = SellPrice::findOrFail($args['_id']);

        return  $SellPrice->delete() ? true : false;
    }
}