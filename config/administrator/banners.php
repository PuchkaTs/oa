<?php
/**
 * User model config
 */
return array(
    'title' => 'Баннер',
    'single' => 'Баннер',
    'model' => 'App\Banner',
    /**
     * The display columns
     */
    'columns' => array(
        'id',
        'title',
        'position',
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
        'title'  => array(
            'title' => 'Гарчиг',
            'type'  => 'text',
        ),
        'position' => array(
            'title' => 'Байрлал',
            'type'  => 'number',
        ), 
        'body' => array(
            'title' => 'Тайлбар',
            'type'  => 'text',
        ), 
        'link' => array(
            'title' => 'Link',
            'type'  => 'text',
        ), 
        'image' => array(
            'title' => 'Image 2100x700',
            'type' => 'image',
            'location' => public_path() . '/assets/banners/',
            'naming' => 'random',
            'length' => 20,
            'size_limit' => 2,
            'sizes' => array(
                array(2100, 700, 'crop', public_path() . '/assets/banners/', 100),
                array(300, 100, 'crop', public_path() . '/assets/banners/thumbs/', 100)

            )
        )
    ),

);