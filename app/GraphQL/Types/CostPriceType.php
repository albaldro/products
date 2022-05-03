<?php


namespace App\GraphQL\Types;

use App\Models\CostPrice;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Type as GraphQLType;

class CostPriceType extends GraphQLType
{
    protected $attributes = [
        'name' => 'CostPrice',
        'description' => 'Collection of CostPrice',
        'model' => CostPrice::class
    ];

    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'ID of CostPrice'
            ],
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
                'description' => 'id of product'
            ],
            'product' => [
                'type' => GraphQL::type('Product'),
                'description' => 'name of product'
            ]
        ];
    }
}
