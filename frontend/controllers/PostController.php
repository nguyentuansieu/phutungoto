<?php

namespace frontend\controllers;

use common\models\Post;

class PostController extends \frontend\controllers\FrontendController
{
    public function actionView($slug)
    {
        $postModel = new Post();
        $postData = $postModel->findOne(['slug' => $slug]);
        return $this->render('view', [
            'node' => $postData,
        ]);
    }

    public function actionPartner() {
        return $this->render('partner');
    }

}
