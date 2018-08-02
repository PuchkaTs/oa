<?php
/**
 * Message model config
 */
return array(
    'title' => 'Захиа',
    'single' => 'Захиа',
    'model' => 'App\Message',
    /**
     * The display columns
     */
    'columns' => array(
        'id',
        'name',
        'contact',
        'text'
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
        'name' => array(
            'title' => 'Нэр',
            'type' => 'text',
        ),
        'contact' => array(
            'title' => 'Утас, Мэйл',
            'type' => 'text',
        ),
        'text' => array(
            'title' => 'Тайлбар',
            'type' => 'wysiwyg',
        ),
    ),

  
);