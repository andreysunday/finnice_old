<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Image Paths and Settings
    |--------------------------------------------------------------------------
    |
    |
    | We set the config here so that we can keep our controllers clean.
    | Configure each image type with an image path.
    |
    */

    'slides' => [

        'destinationFolder'     => '/imgs/slides/',
        'destinationThumbnail'  => '/imgs/slides/thumbnails/',
        'thumbPrefix'           => 'thumb-',
        'imagePath'             => '/imgs/slides/',
        'thumbnailPath'         => '/imgs/slides/thumbnails/thumb-',
        'thumbHeight'           => 60,
        'thumbWidth'            => 60,

    ],
    'arms' => [

        'destinationFolder'     => '/imgs/arms/',
        'destinationThumbnail'  => '/imgs/arms/thumbnails/',
        'thumbPrefix'           => 'thumb-',
        'imagePath'             => '/imgs/arms/',
        'thumbnailPath'         => '/imgs/arms/thumbnails/thumb-',
        'thumbHeight'           => 60,
        'thumbWidth'            => 60,

    ],


];