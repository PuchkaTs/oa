<?php
/**
 * User model config
 */
return array(
    'title' => 'Бүтээгдэхүүн',
    'single' => 'Бүтээгдэхүүн',
    'model' => 'App\Product',
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
        'title' => array(
            'title' => 'Гарчиг',
            'type' => 'text',
        ),   
        'position' => array(
            'title' => 'Байрлал',
            'type' => 'number',
        ),
        'body' => array(
            'title' => 'Агуулга',
            'type' => 'wysiwyg',
        ),
    ),

   
);