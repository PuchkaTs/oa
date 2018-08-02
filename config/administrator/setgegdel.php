<?php
/**
 * User model config
 */
return array(
    'title' => 'Сэтгэгдэл',
    'single' => 'Сэтгэгдэл',
    'model' => 'App\Setgegdel',
    /**
     * The display columns
     */
    'columns' => array(
        'id',
        'name',
    ),
    /**
     * The filter set
     */
    'filters' => array(
    ),
    /**
     * The editable fields
     */
    'edit_fields' => array(
        'name' => array(
            'title' => 'Гарчиг',
            'type' => 'text',
        ),     
        'body' => array(
            'title' => 'Агуулга',
            'type' => 'wysiwyg',
        ),
        'image1' => array(
            'title' => 'Зураг 500x500',
            'type' => 'image',
            'location' => public_path() . '/assets/setgegdel/',
            'naming' => 'random',
            'length' => 20,
            'size_limit' => 2,
            'sizes' => array(
                array(500, 500, 'crop', public_path() . '/assets/setgegdel/', 100),

            )
        ), 
        'image2' => array(
            'title' => 'Зураг 500x500',
            'type' => 'image',
            'location' => public_path() . '/assets/setgegdel/',
            'naming' => 'random',
            'length' => 20,
            'size_limit' => 2,
            'sizes' => array(
                array(500, 500, 'crop', public_path() . '/assets/setgegdel/', 100),

            )
        ), 
        'image3' => array(
            'title' => 'Зураг 500x500',
            'type' => 'image',
            'location' => public_path() . '/assets/setgegdel/',
            'naming' => 'random',
            'length' => 20,
            'size_limit' => 2,
            'sizes' => array(
                array(500, 500, 'crop', public_path() . '/assets/setgegdel/', 100),

            )
        ), 
        'image4' => array(
            'title' => 'Зураг 500x500',
            'type' => 'image',
            'location' => public_path() . '/assets/setgegdel/',
            'naming' => 'random',
            'length' => 20,
            'size_limit' => 2,
            'sizes' => array(
                array(500, 500, 'crop', public_path() . '/assets/setgegdel/', 100),

            )
        ), 
    ),

   
);