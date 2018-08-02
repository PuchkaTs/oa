<?php
/**
 * User model config
 */
return array(
    'title' => 'Салбар',
    'single' => 'Салбар',
    'model' => 'App\Salbar',
    /**
     * The display columns
     */
    'columns' => array(
        'id',
        'title',
        'id' => array(
            'title' => 'Edit on Map',
            'output' => '<a href="/salbar/edit/(:value)" target="_blank">Show map</a>',
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
            'title' => 'Салбар',
            'type' => 'text',
        ),
        'phone' => array(
            'title' => 'Утас',
            'type' => 'text',
        ),
        'address' => array(
            'title' => 'Утас',
            'type' => 'wysiwyg',
        ),
    ),

   
);