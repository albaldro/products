<?php

// app/graphql/queries/quest/QuestsQuery 

namespace App\GraphQL\Queries\Provider;

use App\Models\Provider;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Query;

class ProvidersQuery extends Query
{
    protected $attributes = [
        'name' => 'providers',
    ];

    public function type(): Type
    {
        return Type::listOf(GraphQL::type('Provider'));
    }

    public function resolve($root, $args)
    {
        return Provider::all();
    }
}