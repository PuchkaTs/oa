<?php
/**
 * User model config
 */
return array(
    'title' => 'Үйл явдал',
    'single' => 'Үйл явдал',
    'model' => 'App\Oaevent',
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
            'title' => 'Гарчиг',
            'type' => 'text',
        ),   
        'video' => array(
            'title' => 'Бичлэг ID',
            'type' => 'text',
        ),   
        'start_at' => array(
            'type' => 'date',
            'title' => 'Эхлэх огноо',
            'date_format' => 'yy-mm-dd', //optional, will default to this value
        ),  
        'body' => array(
            'title' => 'Агуулга',
            'type' => 'wysiwyg',
        ),
    ),

   
);