<?php
/**
 * User model config
 */
return array(
    'title' => 'Сургалт',
    'single' => 'Сургалт',
    'model' => 'App\Surgalt',
    /**
     * The display columns
     */
    'columns' => array(
        'id',
        'title',
        'price',
        'image' => array(
            'title' => 'Зураг',
            'output' => '<img src="/assets/surgalt/thumbs/(:value)" height="100" />',
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
        'price' => array(
            'title' => 'Үнэ',
            'type' => 'number',
        ),
        'video' => array(
            'title' => 'Видео ID',
            'type' => 'text',
        ),
        'salbaruud' => array(
            'type' => 'relationship',
            'title' => 'Салбар сонгох',
            'name_field' => 'title', //what column or accessor on the other table you want to use to represent this object
        ),
        'surgaltType' => array(
            'type' => 'relationship',
            'title' => 'Сургалтын төрөл',
            'name_field' => 'title', //what column or accessor on the other table you want to use to represent this object
        ),
        'grade' => array(
            'type' => 'relationship',
            'title' => 'Хамрах анги',
            'name_field' => 'title', //what column or accessor on the other table you want to use to represent this object
        ),
        'level' => array(
            'type' => 'relationship',
            'title' => 'Шат',
            'name_field' => 'title', //what column or accessor on the other table you want to use to represent this object
        ),
        'start_at' => array(
            'type' => 'date',
            'title' => 'Эхлэх огноо',
            'date_format' => 'yy-mm-dd', //optional, will default to this value
        ),
        'end_at' => array(
            'type' => 'date',
            'title' => 'Дуусах огноо',
            'date_format' => 'yy-mm-dd', //optional, will default to this value
        ),
        'days' => array(
            'title' => 'Үргэлжлэх хоног',
            'type' => 'number',
        ),
        'seats' => array(
            'title' => 'Суудал',
            'type' => 'number',
        ),
        'time' => array(
            'title' => 'Цаг',
            'type' => 'text',
        ),
        'image' => array(
            'title' => 'Зураг 600x300',
            'type' => 'image',
            'location' => public_path() . '/assets/surgalt/',
            'naming' => 'random',
            'length' => 20,
            'size_limit' => 2,
            'sizes' => array(
                array(300, 150, 'crop', public_path() . '/assets/surgalt/thumbs/', 100),
                array(600, 300, 'crop', public_path() . '/assets/surgalt/', 100),

            )
        ), 
        'description' => array(
            'title' =>'Тухай',
            'type' =>'wysiwyg',
        ), 
    ),

  
);