<?php

// app/graphql/queries/quest/QuestsQuery 

namespace App\GraphQL\Queries\Product;

use App\Models\Product;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Query;

class ProductsQuery extends Query
{
    protected $attributes = [
        'name' => 'products',
    ];

    public function type(): Type
    {
        return Type::listOf(GraphQL::type('Product'));
    }

    public function args(): array
    {
        return [
            'name' => [
                'name' => 'name',
                'type' => Type::string(),
            ]
        ];
    }

    public function resolve($root, $args)
    {
        return Product::where('name', 'like', $args['name'].'%')->get();
    }
}