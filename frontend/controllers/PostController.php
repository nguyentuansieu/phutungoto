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

<<<<<<< HEAD
=======
    public function actionPartner() {
        return $this->render('partner');
    }

>>>>>>> 7a8b7d089007b8e390152c511b7569359845b627
}
