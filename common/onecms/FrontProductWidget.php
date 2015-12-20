<?php

namespace common\onecms;

use common\models\Category;
use common\models\Product;
use yii\base\Widget;

class FrontProductWidget extends Widget
{
  public $category_id;
  public $limit = 6;
  public function init() {
    parent::init(); // TODO: Change the autogenerated stub
  }

  public function run() {
    parent::run(); // TODO: Change the autogenerated stub
    $category = new Category();
    $product = new Product();
    $parent_category = $category->findOne(['id' => $this->category_id]);
    $categoriesData = $category->findAll(['parent_id' => $this->category_id]);
    $category_slug = $parent_category->slug;
    $categoryIDs = [];
    if($categoriesData) {
      foreach ($categoriesData as $categoryData) :
        $categoryIDs[] = $categoryData->id;
      endforeach;
      $products = $product->find()->where([
        'status' => 10,
        'is_featured' => 10
      ])->andWhere(['in', 'category_id', $categoryIDs])->limit($this->limit)->all();
    } else {
      $products = $product->find()->where([
        'status' => 10,
        'is_front' => 10,
        'category_id' => $this->category_id
      ])->limit($this->limit)->all();
    }
    return $this->render('widget/front_product', [
      'nodes' => $products,
      'category_slug' => $category_slug,
    ]);
  }
}