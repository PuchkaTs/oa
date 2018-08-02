<?php
/**
 * User model config
 */
return array(
    'title' => 'Галерей',
    'single' => 'Галерей',
    'model' => 'App\Gallery',
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
        'subtitle' => array(
            'title' => 'Дэд Гарчиг',
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