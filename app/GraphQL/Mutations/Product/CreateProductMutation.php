<?php

// app/graphql/mutations/category/CreateCategoryMutation 

namespace App\GraphQL\Mutations\Product;

use App\Models\Product;
use Rebing\GraphQL\Support\Mutation;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;

class CreateProductMutation extends Mutation
{
    protected $attributes = [
        'name' => 'createProduct',
        'description' => 'Creates a Product'
    ];

    public function type(): Type
    {
        return GraphQL::type('Product');
    }

    public function args(): array
    {
        return [
            'name' => [
                'name' => 'name',
                'type' =>  Type::nonNull(Type::string()),
            ],
            'reference_number' => [
                'name' => 'reference_number',
                'type' => Type::nonNull(Type::string()),
            ],
            'id_provider' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'id provider of product',
                'rules' => ['exists:providers,_id']
            ]
        ];
    }

    public function resolve($root, $args)
    {
        $Product = new Product();
        $Product->fill($args);
        $Product->save();

        return $Product;
    }
}
