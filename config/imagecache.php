<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Name of route
    |--------------------------------------------------------------------------
    |
    | Enter the routes name to enable dynamic imagecache manipulation.
    | This handle will define the first part of the URI:
    | 
    | {route}/{template}/{filename}
    | 
    | Examples: "images", "img/cache"
    |
    */
   
    'route' => 't',

    /*
    |--------------------------------------------------------------------------
    | Storage paths
    |--------------------------------------------------------------------------
    |
    | The following paths will be searched for the image filename, submited 
    | by URI. 
    | 
    | Define as many directories as you like.
    |
    */
    
    'paths' => array(
        public_path('files/images')
    ),

    /*
    |--------------------------------------------------------------------------
    | Manipulation templates
    |--------------------------------------------------------------------------
    |
    | Here you may specify your own manipulation callbacks.
    | The keys of this array will define which templates 
    | are available in the URI:
    |
    | {route}/{template}/{filename}
    |
    */
   
    'templates' => array(
        '120x120' => function($image) {
            return $image->fit(120, 120);
        },

        '110x70' => function($image) {
            return $image->fit(110, 70);
        },

        '320x220' => function($image) {
            return $image->fit(320, 220);
        },

        '130x80' => function($image) {
            return $image->fit(130, 80);
        },

        '274x174' => function($image) {
            return $image->fit(274, 174);
        },

        '60x60' => function($image) {
            return $image->fit(60, 60);
        },
        '303x130' => function($image) {
            return $image->fit(303, 130);
        }, 

        '320x180' => function($image) {
            return $image->fit(320, 180);
        },

        '140x140' => function($image) {
            return $image->fit(140, 140);
        },

    ),

    /*
    |--------------------------------------------------------------------------
    | Image Cache Lifetime
    |--------------------------------------------------------------------------
    |
    | Lifetime in minutes of the images handled by the imagecache route.
    |
    */
   
    'lifetime' => 43200,

);
