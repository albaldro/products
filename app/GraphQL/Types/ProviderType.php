<?php

// app/graphql/types/CategoryType 

namespace App\GraphQL\Types;

use App\Models\Provider;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Type as GraphQLType;

class ProviderType extends GraphQLType
{
    protected $attributes = [
        'name' => 'Provider',
        'description' => 'Collection of providers',
        'model' => Provider::class
    ];

    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'ID of provider'
            ],
            'name' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'name of the provider'
            ],
            'products' => [
                'type' => Type::listOf(GraphQL::type('Product')),
                'description' => 'List of products'
            ]
        ];
    }
}