<?php

// app/graphql/mutations/category/UpdateCategoryMutation 

namespace App\GraphQL\Mutations\Provider;

use App\Models\Provider;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Mutation;

class UpdateProviderMutation extends Mutation
{
    protected $attributes = [
        'name' => 'updateProvider',
        'description' => 'Updates a provider'
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
                'type' =>  Type::nonNull(Type::string()),
            ],
            'name' => [
                'name' => 'name',
                'type' =>  Type::nonNull(Type::string()),
            ],
        ];
    }

    public function resolve($root, $args)
    {
        $provider = Provider::findOrFail($args['id']);
        $provider->fill($args);
        $provider->save();

        return $provider;
    }
}
