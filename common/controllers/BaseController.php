<?php

namespace common\controllers;

class BaseController extends \yii\web\Controller
{
  public function debug($variable, $exit = true) {
    echo '<pre>';
    print_r($variable);
    echo '</pre>';
    
    if($exit) {
      exit();
    }
  }
}
