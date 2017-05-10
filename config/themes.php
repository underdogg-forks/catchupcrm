<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Active Theme
    |--------------------------------------------------------------------------
    |
    | Assign the default active theme to be used if one is not set during
    | runtime. This is especially useful if you're developing a very basic
    | application that does not require dynamically changing the theme.
    |
    */

    'active' => env('ACTIVE_THEME', 'Flatly'),

    'public' => '_layouts.public',
    'front' => '_layouts.front',
    'back' => '_layouts.back',


    'manager' => '_layouts.manager',
    'agent' => '_layouts.agent',
    'client' => '_layouts.client',


    /*
    |--------------------------------------------------------------------------
    | Templating Engine
    |--------------------------------------------------------------------------
    |
    | Switch between using either Blade or Twig as youe templating engine. To
    | use Twig, be sure to install the twigbridge package and register its
    | service provider BEFORE the Caffeinated Themes service provider.
    |
    | Available Settings: "blade", "twig"
    |
    */

    'engine' => 'blade',


    /*
    |--------------------------------------------------------------------------
    | Theme Paths
    |--------------------------------------------------------------------------
    |
    */

    'paths' => [

        /*
        |----------------------------------------------------------------------
        | Absolute Path
        |----------------------------------------------------------------------
        |
        | Define the absolute path where you'd like to store your themes. Note
        | that if you choose a path that's outside of your public directory, you
        | will still need to store your assets within your public directory.
        |
        */

        'absolute' => base_path('Themes'),

        /*
        |----------------------------------------------------------------------
        | Base Path
        |----------------------------------------------------------------------
        |
        | Define the base path where your themes will be publically available.
        | This is used to generate the correct URL when utilizing both the
        | asset() and secureAsset() methods.
        |
        */

        'base' => base_path('Themes'),

        /*
        |----------------------------------------------------------------------
        | Assets Path
        |----------------------------------------------------------------------
        |
        | Define the path that will store all assets for each of your themes.
        | This is used to generate the correct URL when utilizing both the
        | asset() and secureAsset() methods.
        |
        */

        'assets' => 'assets',

    ]

];
