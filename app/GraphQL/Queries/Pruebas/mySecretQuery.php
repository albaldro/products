<?php

// app/graphql/queries/quest/QuestsQuery 

namespace App\GraphQL\Queries\Pruebas;

use App\Models\Products;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Query;

class mySecretQuery extends Query
{
    protected $attributes = [
        'name' => 'mySecret',
    ];

    public function type(): Type
    {
        return Type::listOf(GraphQL::type('Products'));
    }

    public function resolve($root, $args)
    {
        return Product::all();
    }
}