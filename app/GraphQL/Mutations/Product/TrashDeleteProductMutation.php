<?php

// app/graphql/mutations/Product/DeleteProductMutation 

namespace App\GraphQL\Mutations\Product;

use App\Models\Product;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Mutation;

class TrashDeleteProductMutation extends Mutation
{
    protected $attributes = [
        'name' => 'trashdeleteProduct',
        'description' => 'Deletes permanently a Product'
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
        $product = Product::findOrFail($args['id']);

        return  $product->forceDelete() ? true : false;
    }
}