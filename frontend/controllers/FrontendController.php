<?php

namespace frontend\controllers;

use common\models\Product;
use common\models\Category;
class FrontendController extends \common\controllers\BaseController
{
    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'thumb' => 'iutbay\yii2imagecache\ThumbAction',
        ];
    }

    public static function getProductByCategory($category_id, $limit = 6)
    {
		$category = new Category();
		$product = new Product();
		$categoriesData = $category->findAll(['parent_id' => $category_id]);
		$categoryIDs = [];
		if($categoriesData) {
			foreach ($categoriesData as $categoryData) :
				$categoryIDs[] = $categoryData->id;
			endforeach;
			$products = $product->find()->where([
			'status' => 10,
			'is_featured' => 10
            ])->andWhere(['in', 'category_id', $categoryIDs])->limit($limit)->all();
		} else {
			$products = $product->find()->where([
			'status' => 10,
			'is_front' => 10,
			'category_id' => $category_id
            ])->limit($limit)->all();
		}
        return $products;
    }
	
	public static function getProductByHot($limit = 30)
    {
		$product = new Product();
		$products = $product->find()->where([
			'status' => 10,
			'is_hot' => 10,
		])->limit($limit)->all();
        return $products;
    }
}
