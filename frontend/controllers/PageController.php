<?php

namespace frontend\controllers;

use common\models\Page;

class PageController extends \frontend\controllers\FrontendController
{
    public function actionView($slug)
    {
        $pageModel = new Page();
        $pageData = $pageModel->findOne(['slug' => $slug]);
<<<<<<< HEAD
        return $this->render('view', [
=======
        return $this->render($pageData->views, [
>>>>>>> 7a8b7d089007b8e390152c511b7569359845b627
            'node' => $pageData
        ]);
    }
}
