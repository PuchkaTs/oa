<?php
/**
 * User model config
 */
return array(
    'title' => 'Бүтээгдэхүүний зураг',
    'single' => 'Бүтээгдэхүүний зураг',
    'model' => 'App\ProductImage',
    /**
     * The display columns
     */
    'columns' => array(
        'id',
        'name',
        'image' => array(
            'title' => 'Image',
            'output' => '<img src="/assets/products/thumbs/(:value)" height="100" />',
        ),
        'product' => array(
            'relationship' => 'product',
            'title' => 'Хамааралтай бүтээгдэхүүн',
            'select' => '(:table).title', //what column or accessor on the other table you want to use to represent this object
        ),
        'position',
    ),
    /**
     * The filter set
     */
    'filters' => array(
        'product' => array(
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
        'product' => array(
            'type' => 'relationship',
            'title' => 'Хамааралтай бүтээгдэхүүн',
            'name_field' => 'title', //what column or accessor on the other table you want to use to represent this object
        ),    
        'image' => array(
            'title' => 'Image 1920x1080',
            'type' => 'image',
            'location' => public_path() . '/assets/products/',
            'naming' => 'random',
            'length' => 20,
            'size_limit' => 2,
            'sizes' => array(
                array(1920, 1080, 'crop', public_path() . '/assets/products/', 100),
                array(210, 120, 'crop', public_path() . '/assets/products/thumbs/', 100)

            )
        )
    ),

);