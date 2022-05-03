<?php

// app/graphql/mutations/category/DeleteCategoryMutation 

namespace App\GraphQL\Mutations\Provider;

use App\Models\Provider;
use Rebing\GraphQL\Support\Mutation;
use GraphQL\Type\Definition\Type;

class DeleteProviderMutation extends Mutation
{
    protected $attributes = [
        'name' => 'deleteProvider',
        'description' => 'deletes a provider'
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
                'type' => Type::string(),
                'rules' => ['required']
            ]
        ];
    }

    public function resolve($root, $args)
    {
        $provider = Provider::findOrFail($args['id']);

        return  $provider->delete() ? true : false;
    }
}
