<?php
/**
 * User model config
 */
return array(
    'title' => 'Салбарын зураг',
    'single' => 'Салбарын зураг',
    'model' => 'App\SalbarImage',
    /**
     * The display columns
     */
    'columns' => array(
        'id',
        'name',
        'image' => array(
            'title' => 'Image',
            'output' => '<img src="/assets/salbar/thumbs/(:value)" height="100" />',
        ),
        'salbar' => array(
            'relationship' => 'salbar',
            'title' => 'Хамааралтай бүтээгдэхүүн',
            'select' => '(:table).title', //what column or accessor on the other table you want to use to represent this object
        ),
        'position',
    ),
    /**
     * The filter set
     */
    'filters' => array(
        'salbar' => array(
            'type' => 'relationship',
            'title' => 'Хамааралтай салбар',
            'name_field' => 'title', //what column or accessor on the other table you want to use to represent this object
        ),
    ),
    /**
     * The editable fields
     */
    'edit_fields' => array(
        'name'  => array(
            'title' => 'Зургийн нэр',
            'type'  => 'text',
        ),
        'position' => array(
            'title' => 'Байрлал',
            'type'  => 'number',
        ),
        'salbar' => array(
            'type' => 'relationship',
            'title' => 'Хамааралтай бүтээгдэхүүн',
            'name_field' => 'title', //what column or accessor on the other table you want to use to represent this object
        ),    
        'image' => array(
            'title' => 'Image 1920x1080',
            'type' => 'image',
            'location' => public_path() . '/assets/salbar/',
            'naming' => 'random',
            'length' => 20,
            'size_limit' => 2,
            'sizes' => array(
                array(1920, 1080, 'crop', public_path() . '/assets/salbar/', 100),
                array(180, 105, 'crop', public_path() . '/assets/salbar/thumbs/', 100)

            )
        )
    ),

);