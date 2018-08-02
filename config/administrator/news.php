<?php
/**
 * User model config
 */
return array(
    'title' => 'Мэдээлэл',
    'single' => 'Мэдээлэл',
    'model' => 'App\News',
    /**
     * The display columns
     */
    'columns' => array(
        'id',
        'title',
        'image' => array(
            'title' => 'Зураг',
            'output' => '<img src="/assets/news/thumbs/(:value)" height="100" />',
        ),
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
        'title' => array(
            'title' => 'Гарчиг',
            'type' => 'text',
        ),     
        'body' => array(
            'title' => 'Агуулга',
            'type' => 'wysiwyg',
        ),
        'image' => array(
            'title' => 'Зураг 1200x800',
            'type' => 'image',
            'location' => public_path() . '/assets/news/',
            'naming' => 'random',
            'length' => 20,
            'size_limit' => 2,
            'sizes' => array(
                array(300, 200, 'crop', public_path() . '/assets/news/thumbs/', 100),
                array(1200, 800, 'crop', public_path() . '/assets/news/', 100),

            )
        ), 
    ),

   
);