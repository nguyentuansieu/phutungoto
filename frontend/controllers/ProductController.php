<?php

namespace frontend\controllers;

use common\models\Product;

class ProductController extends \frontend\controllers\FrontendController
{
    public function actionView($slug)
    {
        $productModel = new Product();
        $productData = $productModel->findOne(['slug' => $slug]);
        $relatedProduct = $productModel->find()->where([
                'category_id' => $productData->category_id,
                ])->andWhere(['<>', 'id', $productData->id])
                ->limit(9)
                ->orderBy(['id' => SORT_ASC])
                ->all();
        return $this->render('view', [
            'node' => $productData,
            'relateNodes' => $relatedProduct,
        ]);
    }
}
