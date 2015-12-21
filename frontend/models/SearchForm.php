<?php

namespace frontend\models;

use common\models\Product;
use yii\base\Model;

class SearchForm extends Model
{
    public $keywords;

    public function rules()
    {
        return [
            [['keywords'], 'string']
        ];
    }

    public function attributeLabels()
    {
        return [
          'keywords' => 'Tìm kiếm sản phẩm'
        ];
    }

    public function searchProducts($keywords)
    {
        $query = new Product();
        $nodes = $query->find()->select(['title', 'image', 'slug'])->filterWhere(['like', 'title', $keywords]);
        return $nodes;
    }
}