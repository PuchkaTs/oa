<?php
/**
 * User model config
 */
return array(
    'title' => 'Шат',
    'single' => 'Шат',
    'model' => 'App\Level',
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
            'title' => 'Шат',
            'type' => 'text',
        )
    ),

   
);