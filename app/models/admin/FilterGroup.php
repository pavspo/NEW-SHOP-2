<?php

namespace app\models\admin;

use app\models\AppModel;

class FilterGroup extends AppModel{

    public $attributes = [
        'title' => '',
        'sort' => '',
    ];

    public $rules = [
        'required' => [
            ['title'],
        ],
    ];

}