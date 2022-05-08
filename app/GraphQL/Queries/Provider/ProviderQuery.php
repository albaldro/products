<?php

// app/graphql/queries/quest/QuestQuery 

namespace App\GraphQL\Queries\Provider;

use App\Models\Provider;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Query;

class ProviderQuery extends Query
{
    protected $attributes = [
        'name' => 'provider',
    ];

    public function type(): Type
    {
        return GraphQL::type('Provider');
    }

    public function args(): array
    {
        return [
            'id' => [
                'name' => 'id',
                'type' => Type::string(),
                'rules' => ['required']
            ],

            'name' => [
                'name' => 'name',
                'type' => Type::string(),
            ],
        ];
    }

    public function resolve($root, $args)
    {
        return Provider::findOrFail($args['id']);
    }
}