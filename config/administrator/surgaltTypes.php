<?php
/**
 * User model config
 */
return array(
    'title' => 'Сургалтын төрөл',
    'single' => 'Сургалтын төрөл',
    'model' => 'App\SurgaltType',
    /**
     * The display columns
     */
    'columns' => array(
        'id',
        'title',
        'position',
        'icon' => array(
            'title' => 'Айкон',
            'output' => '<img src="/assets/surgalt_type/(:value)" height="30" />',
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
            'title' => 'Нэр',
            'type' => 'text',
        ),
        'position' => array(
            'title' => 'Байрлал',
            'type' => 'number',
        ),

        'icon' => array(
            'title' => 'File',
            'type' => 'file',
            'location' => public_path() . '/assets/surgalt_type/',
            'naming' => 'random',
            'length' => 20,
            'size_limit' => 2,
            'display_raw_value' => false,
            'mimes' => 'svg',
        ) 
    ),

   
);