<?php
/**
 * User model config
 */
return array(
    'title' => 'Аймаг',
    'single' => 'Аймаг',
    'model' => 'App\Aimag',
    /**
     * The display columns
     */
    'columns' => array(
        'id',
        'title',
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
        'mail' => array(
            'title' => 'И-мэйл',
            'type' => 'text',
        ),
        'address' => array(
            'title' => 'Хаяг',
            'type' => 'text',
        ),
        'body' => array(
            'title' => 'Хаяг',
            'type' => 'wysiwyg',
        ),
    ),

   
);