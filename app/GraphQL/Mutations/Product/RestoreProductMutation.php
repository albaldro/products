<?php

// app/graphql/mutations/Product/DeleteProductMutation 

namespace App\GraphQL\Mutations\Product;

use App\Models\Product;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Mutation;

class RestoreProductMutation extends Mutation
{
    protected $attributes = [
        'name' => 'restoreProduct',
        'description' => 'Restores a deleted Product'
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
        $product = Product::withTrashed()->findOrFail($args['id']);

        return  $product->restore() ? true : false;
    }
}