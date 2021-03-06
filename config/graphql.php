<?php
declare(strict_types = 1);

return [
    'route' => [
        // The prefix for routes; do NOT use a leading slash!
        'prefix' => 'graphql',

        // The controller/method to use in GraphQL request.
        'controller' => \Rebing\GraphQL\GraphQLController::class . '@query',

        // Any middleware for the graphql route group
        // This middleware will apply to all schemas
        'middleware' => [],

        // Additional route group attributes
        //
        // Example:
        //
        // 'group_attributes' => ['guard' => 'api']
        //
        'group_attributes' => [],
    ],

    // The name of the default schema
    // Used when the route group is directly accessed
    'default_schema' => 'default',

    'batching' => [
        // Whether to support GraphQL batching or not.
        // See e.g. https://www.apollographql.com/blog/batching-client-graphql-queries-a685f5bcd41b/
        // for pro and con
        'enable' => true,
    ],

    // The schemas for query and/or mutation. It expects an array of schemas to provide
    // both the 'query' fields and the 'mutation' fields.
    //
    // You can also provide a middleware that will only apply to the given schema
    //
    // Example:
    //
    //  'schemas' => [
    //      'default' => [
    //          'controller' => MyController::class . '@method',
    //          'query' => [
    //              App\GraphQL\Queries\UsersQuery::class,
    //          ],
    //          'mutation' => [
    //
    //          ]
    //      ],
    //      'user' => [
    //          'query' => [
    //              App\GraphQL\Queries\ProfileQuery::class,
    //          ],
    //          'mutation' => [
    //
    //          ],
    //          'middleware' => ['auth'],
    //      ],
    //      'user/me' => [
    //          'query' => [
    //              App\GraphQL\Queries\MyProfileQuery::class,
    //          ],
    //          'mutation' => [
    //
    //          ],
    //          'middleware' => ['auth'],
    //      ],
    //  ]
    //
    'schemas' => [
        'default' => [
            'query' => [
                'product' => \App\GraphQL\Queries\Product\ProductQuery::class,
                'products' => \App\GraphQL\Queries\Product\ProductsQuery::class,

                'provider' => \App\GraphQL\Queries\Provider\ProviderQuery::class,
                'providers' => \App\GraphQL\Queries\Provider\ProvidersQuery::class,

                'costPrice' => \App\GraphQL\Queries\CostPrice\CostPriceQuery::class,
                'costPrices' => \App\GraphQL\Queries\CostPrice\CostPricesQuery::class,

                'sellPrice' => \App\GraphQL\Queries\SellPrice\SellPriceQuery::class,
                'sellPrices' => \App\GraphQL\Queries\SellPrice\SellPricesQuery::class,

            ],
            'mutation' => [
                // ExampleMutation::class,
                'createProvider' => \App\GraphQL\Mutations\Provider\CreateProviderMutation::class,
                'createProduct' => \App\GraphQL\Mutations\Product\CreateProductMutation::class,
                'createCostPrice' => \App\GraphQL\Mutations\CostPrice\CreateCostPriceMutation::class,
                'createSellPrice' => \App\GraphQL\Mutations\SellPrice\CreateSellPriceMutation::class,

                'updateProvider' => \App\GraphQL\Mutations\Provider\UpdateProviderMutation::class,
                'updateProduct' => \App\GraphQL\Mutations\Product\UpdateProductMutation::class,
                'updateCostPrice' => \App\GraphQL\Mutations\CostPrice\UpdateCostPriceMutation::class,
                'updateSellPrice' => \App\GraphQL\Mutations\SellPrice\UpdateSellPriceMutation::class,

                'deleteProvider' => \App\GraphQL\Mutations\Provider\DeleteProviderMutation::class,
                'trashdeleteProvider' =>\App\GraphQL\Mutations\Provider\TrashDeleteProviderMutation::class,
                'restoreProvider' => \App\GraphQL\Mutations\Provider\RestoreProviderMutation::class,
                'deleteProduct' => \App\GraphQL\Mutations\Product\DeleteProductMutation::class,

                'trashdeleteProduct' => \App\GraphQL\Mutations\Product\TrashDeleteProductMutation::class,
                'restoreProduct' => \App\GraphQL\Mutations\Product\RestoreProductMutation::class,
                'deleteCostPrice' => \App\GraphQL\Mutations\CostPrice\DeleteCostPriceMutation::class,
                'deleteSellPrice' => \App\GraphQL\Mutations\SellPrice\DeleteSellPriceMutation::class,

            ],
            // The types only available in this schema
            'types' => [
                // ExampleType::class,
                'Product' => \App\GraphQL\Types\ProductType::class,
                'Provider' => \App\GraphQL\Types\ProviderType::class,
                'SellPrice' => \App\GraphQL\Types\SellPriceType::class,
                'CostPrice' => \App\GraphQL\Types\CostPriceType::class,
            ],

            // Laravel HTTP middleware
            'middleware' => null,

            // Which HTTP methods to support; must be given in UPPERCASE!
            'method' => ['GET', 'POST'],

            // An array of middlewares, overrides the global ones
            'execution_middleware' => null,
        ],
        'secret' => [
            'query' => [
                'product' => \App\GraphQL\Queries\Product\ProductQuery::class,
                'products' => \App\GraphQL\Queries\Product\ProductsQuery::class,

                'provider' => \App\GraphQL\Queries\Provider\ProviderQuery::class,
                'providers' => \App\GraphQL\Queries\Provider\ProvidersQuery::class,

                'costPrice' => \App\GraphQL\Queries\CostPrice\CostPriceQuery::class,
                'costPrices' => \App\GraphQL\Queries\CostPrice\CostPricesQuery::class,

                'sellPrice' => \App\GraphQL\Queries\SellPrice\SellPriceQuery::class,
                'sellPrices' => \App\GraphQL\Queries\SellPrice\SellPricesQuery::class,

            ],
            'mutation' => [
                // ExampleMutation::class,
                'createProvider' => \App\GraphQL\Mutations\Provider\CreateProviderMutation::class,
                'createProduct' => \App\GraphQL\Mutations\Product\CreateProductMutation::class,
                'createCostPrice' => \App\GraphQL\Mutations\CostPrice\CreateCostPriceMutation::class,
                'createSellPrice' => \App\GraphQL\Mutations\SellPrice\CreateSellPriceMutation::class,

                'updateProvider' => \App\GraphQL\Mutations\Provider\UpdateProviderMutation::class,
                'updateProduct' => \App\GraphQL\Mutations\Product\UpdateProductMutation::class,
                'updateCostPrice' => \App\GraphQL\Mutations\CostPrice\UpdateCostPriceMutation::class,
                'updateSellPrice' => \App\GraphQL\Mutations\SellPrice\UpdateSellPriceMutation::class,

                'deleteProvider' => \App\GraphQL\Mutations\Provider\DeleteProviderMutation::class,
                'trashdeleteProvider' =>\App\GraphQL\Mutations\Provider\TrashDeleteProviderMutation::class,
                'restoreProvider' => \App\GraphQL\Mutations\Provider\RestoreProviderMutation::class,
                'deleteProduct' => \App\GraphQL\Mutations\Product\DeleteProductMutation::class,

                'trashdeleteProduct' => \App\GraphQL\Mutations\Product\TrashDeleteProductMutation::class,
                'restoreProduct' => \App\GraphQL\Mutations\Product\RestoreProductMutation::class,
                'deleteCostPrice' => \App\GraphQL\Mutations\CostPrice\DeleteCostPriceMutation::class,
                'deleteSellPrice' => \App\GraphQL\Mutations\SellPrice\DeleteSellPriceMutation::class,

            ],
             'types' => [
                // ExampleType::class,
                'Product' => \App\GraphQL\Types\ProductType::class,
                'Provider' => \App\GraphQL\Types\ProviderType::class,
                'SellPrice' => \App\GraphQL\Types\SellPriceType::class,
                'CostPrice' => \App\GraphQL\Types\CostPriceType::class,
            ],

            // Laravel HTTP middleware
            'middleware' => null,

            // Which HTTP methods to support; must be given in UPPERCASE!
            'method' => ['GET', 'POST'],
        ],
    ],

    'middleware_schema' => [
        'default' => [],
        'secret' => ['auth:api'],
    ],

    // The global types available to all schemas.
    // You can then access it from the facade like this: GraphQL::type('user')
    //
    // Example:
    //
    // 'types' => [
    //     App\GraphQL\Types\UserType::class
    // ]
    //
    'types' => [
        // ExampleType::class,
        // ExampleRelationType::class,
        // \Rebing\GraphQL\Support\UploadType::class,
    ],

    // The types will be loaded on demand. Default is to load all types on each request
    // Can increase performance on schemes with many types
    // Presupposes the config type key to match the type class name property
    'lazyload_types' => true,

    // This callable will be passed the Error object for each errors GraphQL catch.
    // The method should return an array representing the error.
    // Typically:
    // [
    //     'message' => '',
    //     'locations' => []
    // ]
    'error_formatter' => [\Rebing\GraphQL\GraphQL::class, 'formatError'],

    /*
     * Custom Error Handling
     *
     * Expected handler signature is: function (array $errors, callable $formatter): array
     *
     * The default handler will pass exceptions to laravel Error Handling mechanism
     */
    'errors_handler' => [\Rebing\GraphQL\GraphQL::class, 'handleErrors'],

    /*
     * Options to limit the query complexity and depth. See the doc
     * @ https://webonyx.github.io/graphql-php/security
     * for details. Disabled by default.
     */
    'security' => [
        'query_max_complexity' => null,
        'query_max_depth' => null,
        'disable_introspection' => false,
    ],

    /*
     * You can define your own pagination type.
     * Reference \Rebing\GraphQL\Support\PaginationType::class
     */
    'pagination_type' => \Rebing\GraphQL\Support\PaginationType::class,

    /*
     * You can define your own simple pagination type.
     * Reference \Rebing\GraphQL\Support\SimplePaginationType::class
     */
    'simple_pagination_type' => \Rebing\GraphQL\Support\SimplePaginationType::class,

    /*
     * Config for GraphiQL (see (https://github.com/graphql/graphiql).
     */
    'graphiql' => [
        'prefix' => 'graphiql', // Do NOT use a leading slash
        'controller' => \Rebing\GraphQL\GraphQLController::class . '@graphiql',
        'middleware' => [],
        'view' => 'graphql::graphiql',
        'display' => env('ENABLE_GRAPHIQL', true),
    ],

    /*
     * Overrides the default field resolver
     * See http://webonyx.github.io/graphql-php/data-fetching/#default-field-resolver
     *
     * Example:
     *
     * ```php
     * 'defaultFieldResolver' => function ($root, $args, $context, $info) {
     * },
     * ```
     * or
     * ```php
     * 'defaultFieldResolver' => [SomeKlass::class, 'someMethod'],
     * ```
     */
    'defaultFieldResolver' => null,

    /*
     * Any headers that will be added to the response returned by the default controller
     */
    'headers' => [],

    /*
     * Any JSON encoding options when returning a response from the default controller
     * See http://php.net/manual/function.json-encode.php for the full list of options
     */
    'json_encoding_options' => 0,

    /*
     * Automatic Persisted Queries (APQ)
     * See https://www.apollographql.com/docs/apollo-server/performance/apq/
     *
     * Note 1: this requires the `AutomaticPersistedQueriesMiddleware` being enabled
     *
     * Note 2: even if APQ is disabled per configuration and, according to the "APQ specs" (see above),
     *         to return a correct response in case it's not enabled, the middleware needs to be active.
     *         Of course if you know you do not have a need for APQ, feel free to remove the middleware completely.
     */
    'apq' => [
        // Enable/Disable APQ - See https://www.apollographql.com/docs/apollo-server/performance/apq/#disabling-apq
        'enable' => env('GRAPHQL_APQ_ENABLE', false),

        // The cache driver used for APQ
        'cache_driver' => env('GRAPHQL_APQ_CACHE_DRIVER', config('cache.default')),

        // The cache prefix
        'cache_prefix' => config('cache.prefix') . ':graphql.apq',

        // The cache ttl in seconds - See https://www.apollographql.com/docs/apollo-server/performance/apq/#adjusting-cache-time-to-live-ttl
        'cache_ttl' => 300,
    ],

    /*
     * Execution middlewares
     */
    'execution_middleware' => [
        \Rebing\GraphQL\Support\ExecutionMiddleware\ValidateOperationParamsMiddleware::class,
        // AutomaticPersistedQueriesMiddleware listed even if APQ is disabled, see the docs for the `'apq'` configuration
        \Rebing\GraphQL\Support\ExecutionMiddleware\AutomaticPersistedQueriesMiddleware::class,
        \Rebing\GraphQL\Support\ExecutionMiddleware\AddAuthUserContextValueMiddleware::class,
        // \Rebing\GraphQL\Support\ExecutionMiddleware\UnusedVariablesMiddleware::class,
    ],
];
