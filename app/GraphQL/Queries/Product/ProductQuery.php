<?php

// app/graphql/queries/quest/QuestQuery 

namespace App\GraphQL\Queries\Product;

use App\Models\Product;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Query;

class ProductQuery extends Query
{
    protected $attributes = [
        'name' => 'product',
    ];

    public function type(): Type
    {
        return GraphQL::type('Product');
    }

    public function args(): array
    {
        return [
            'id' => [
                'name' => 'id',
                'type' => Type::string(),
                
            ],
            'name' => [
                'name' => 'name',
                'type' => Type::string(),
                
            ],
            'reference_number' => [
                'name' => 'reference_number',
                'type' => Type::string(),
                
            ]
        ];
    }

    public function resolve($root, $args)
    {

        $result;

        if (isset($args['name']))
        {
            $result = Product::where('name', '=', $args['name'])->first();
        }

        else if (isset($args['reference_number']))
        {
            $result = Product::where('reference_number', '=', $args['reference_number'])->first();
        }

        else if (isset($args['id']))
        {
            $result = Product::findOrFail($args['id']);
        }

        return $result;

        
    }
}


/*
    
switch($args){
    case 'name':
        $result = Product::where('name', '=', $args['name'])->first();
    break;
    }

*/