<?php
/**
 * User model config
 */
return array(
    'title' => 'Галерейн зураг',
    'single' => 'Галерейн зураг',
    'model' => 'App\GalleryImage',
    /**
     * The display columns
     */
    'columns' => array(
        'id',
        'name',
        'image' => array(
            'title' => 'Image',
            'output' => '<img src="/assets/gallery/thumbs/(:value)" height="100" />',
        ),
        'gallery' => array(
            'relationship' => 'gallery',
            'title' => 'Хамааралтай бүтээгдэхүүн',
            'select' => '(:table).title', //what column or accessor on the other table you want to use to represent this object
        ),
        'position',
    ),
    /**
     * The filter set
     */
    'filters' => array(
        'gallery' => array(
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
        'gallery' => array(
            'type' => 'relationship',
            'title' => 'Хамааралтай бүтээгдэхүүн',
            'name_field' => 'title', //what column or accessor on the other table you want to use to represent this object
        ),    
        'image' => array(
            'title' => 'Image 1920x1080',
            'type' => 'image',
            'location' => public_path() . '/assets/gallery/',
            'naming' => 'random',
            'length' => 20,
            'size_limit' => 2,
            'sizes' => array(
                array(1920, 1080, 'crop', public_path() . '/assets/gallery/', 100),
                array(210, 120, 'crop', public_path() . '/assets/gallery/thumbs/', 100)

            )
        )
    ),

);