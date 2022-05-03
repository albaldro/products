<?php

// app/graphql/types/CategoryType 

namespace App\GraphQL\Types;

use App\Models\SellPrice;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Type as GraphQLType;

class SellPriceType extends GraphQLType
{
    protected $attributes = [
        'name' => 'SellPrice',
        'description' => 'Collection of sell prices',
        'model' => SellPrice::class
    ];

    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'ID of a sell price'
            ],
            'id_product' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'ID of the product'
            ],
            'quantity' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'Quantity of that product',
            ],
            'price' => [
                'type' => Type::nonNull(Type::float()),
                'description' => 'The price of that product',
            ],
            'product' => [
                'type' => GraphQL::type('Product'),
                'description' => 'name of product'
            ]
        ];
    }
}