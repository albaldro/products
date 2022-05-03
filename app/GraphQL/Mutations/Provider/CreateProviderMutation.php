<?php

// app/graphql/mutations/category/CreateCategoryMutation 

namespace App\GraphQL\Mutations\Provider;

use App\Models\Provider;
use Rebing\GraphQL\Support\Mutation;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;

class CreateProviderMutation extends Mutation
{
    protected $attributes = [
        'name' => 'createProvider',
        'description' => 'Creates a provider'
    ];

    public function type(): Type
    {
        return GraphQL::type('Provider');
    }

    public function args(): array
    {
        return [
            'name' => [
                'name' => 'name',
                'type' =>  Type::nonNull(Type::string()),
            ],
        ];
    }

    public function resolve($root, $args)
    {
        $provider = new Provider();
        $provider->fill($args);
        $provider->save();

        return $provider;
    }
}
