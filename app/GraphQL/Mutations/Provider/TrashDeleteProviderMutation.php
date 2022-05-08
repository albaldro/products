<?php

// app/graphql/mutations/Product/DeleteProductMutation 

namespace App\GraphQL\Mutations\Provider;

use App\Models\Provider;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Mutation;

class TrashDeleteProviderMutation extends Mutation
{
    protected $attributes = [
        'name' => 'trashdeleteProvider',
        'description' => 'Deletes permanently a Provider'
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
        $provider = Provider::findOrFail($args['id']);

        return  $provider->forceDelete() ? true : false;
    }
}