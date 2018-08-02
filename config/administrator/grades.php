<?php
/**
 * User model config
 */
return array(
    'title' => 'Хамрах анги',
    'single' => 'Хамрах анги',
    'model' => 'App\Grade',
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
            'title' => 'Хамрах анги',
            'type' => 'text',
        )
    ),

   
);