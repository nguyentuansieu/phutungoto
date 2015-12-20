<?php

namespace frontend\controllers;
use common\models\Category;
use common\models\Post;
use common\models\Product;
use yii\data\Pagination;
class CategoryController extends \frontend\controllers\FrontendController
{
    public function actionView($slug)
    {
        $categoryModel = new Category();
        $categoryData = $categoryModel->findOne(['slug' => $slug]);
        if ($categoryData) {
            $module = strtolower($categoryData->module);
            $categoryID = $categoryData->id;
            $categoryTitle = $categoryData->title;
            switch ($module) {
                case 'product':
                    $data = $this->getProduct($categoryID);
                    return $this->render('view_product', [
                        'nodes' => $data['nodes'],
                        'pagination' => $data['pagination'],
                        'category_title' => $categoryTitle,
                    ]);
                    break;
                    case 'post':
                    default:
                        $data = $this->getPost($categoryID);
						$views = $categoryData['views'];
                    return $this->render($views, [
                        'nodes' => $data['nodes'],
                        'pagination' => $data['pagination'],
                        'category_title' => $categoryTitle,
                    ]);
                    break;
            }
        }
    }

    private static function getPost($categoryID)
    {
        $postModel = Post::find()->where(['category_id' => $categoryID]);
        $count = $postModel->count();
        $pagination = new Pagination(['totalCount' => $count]);
        $nodes = $postModel->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        return [
            'nodes' => $nodes,
            'pagination' => $pagination
        ];
    }

    private static function getProduct($categoryID)
    {
        $productModel = Product::find()->where(['category_id' => $categoryID]);
        $count = $productModel->count();
        $pagination = new Pagination(['totalCount' => $count]);
        $nodes = $productModel->offset($pagination->offset)
            ->limit(18)
            ->orderBy(['id' => SORT_DESC])
            ->all();
        return [
            'nodes' => $nodes,
            'pagination' => $pagination
        ];
    }
}
