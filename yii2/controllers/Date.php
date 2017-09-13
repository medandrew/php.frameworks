<?php


namespace app\controllers;


use yii\base\Widget;

class Date extends Widget
{
    public $params;

    public function run()
    {
        return date($this->params);
    }
}
