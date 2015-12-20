<?php

namespace frontend\controllers;

use common\models\Page;

class PageController extends \frontend\controllers\FrontendController
{
    public function actionView($slug)
    {
        $pageModel = new Page();
        $pageData = $pageModel->findOne(['slug' => $slug]);
        return $this->render($pageData->views, [
            'node' => $pageData
        ]);
    }
}
