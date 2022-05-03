<?php

// app/graphql/mutations/CostPrice/DeleteCostPriceMutation 

namespace App\GraphQL\Mutations\CostPrice;

use App\Models\CostPrice;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Mutation;

class DeleteCostPriceMutation extends Mutation
{
    protected $attributes = [
        'name' => 'deleteCostPrice',
        'description' => 'Deletes a CostPrice'
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
        $CostPrice = CostPrice::findOrFail($args['_id']);

        return  $CostPrice->delete() ? true : false;
    }
}