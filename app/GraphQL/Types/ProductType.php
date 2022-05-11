<?php

// app/graphql/types/CategoryType 

namespace App\GraphQL\Types;

use App\Models\Product;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Type as GraphQLType;

class ProductType extends GraphQLType
{
    protected $attributes = [
        'name' => 'Product',
        'description' => 'Collection of products',
        'model' => Product::class
    ];

    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'ID of product'
            ],
            'name' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'name of the product'
            ],
            'reference_number' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'reference_number of product'
            ],
            'id_provider' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'id provider of product'
            ],
            
            'provider' => [
                'type' => GraphQL::type('Provider'),
                'description' => 'The provider of the product'
            ],
            'costPrices' => [
                'type' => Type::listOf(GraphQL::type('CostPrice')),
                'description' => 'The CostPrice of the product'
            ]

        ];
    }
}