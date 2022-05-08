<?php

// app/graphql/mutations/Provider/DeleteProviderMutation 

namespace App\GraphQL\Mutations\Provider;

use App\Models\Provider;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Mutation;

class RestoreProviderMutation extends Mutation
{
    protected $attributes = [
        'name' => 'restoreProvider',
        'description' => 'Restores a deleted Provider'
    ];

    public function type(): Type
    {
        return Type::boolean();
    }

    public function args(): array
    {
        return [
            'id' => [
                'name' => 'id',
                'type' => Type::nonNull(Type::string()),
                'rules' => ['required']
            ]
        ];
    }

    public function resolve($root, $args)
    {
        $provider = Provider::withTrashed()->findOrFail($args['id']);

        return  $provider->restore() ? true : false;
    }
}