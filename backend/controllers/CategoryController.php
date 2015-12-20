<?php

namespace backend\controllers;

use Yii;
use common\models\Category;
use backend\models\CategorySearch;
use backend\controllers\BackendController;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
* CategoryController implements the CRUD actions for Category model.
*/
class CategoryController extends BackendController
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
    * Lists all Category models.
    * @return mixed
    */
    public function actionIndex($module)
    {
        $searchModel = new CategorySearch(['module' => $module]);
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'module' => $module,
        ]);
    }

    /**
    * Displays a single Category model.
    * @param integer $id
    * @return mixed
    */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
    * Creates a new Category model.
    * If creation is successful, the browser will be redirected to the 'view' page.
    * @return mixed
    */
    public function actionCreate($module)
    {
        $model = new Category();
        $model['module'] = $module;
        $parents = [];
        $root = Category::findOne(['parent_id' => null, 'title' => $module, 'module' => $module]);
        if (empty($root)) {
            throw new NotFoundHttpException('Module không tồn tại');
        }
        $parents = $root->children()->all();
        $parent_id = $this->buildTree($parents);
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $parent_id = $model['parent_id'];
            $model['slug'] = $this->slugAlias($model);
            if (empty($parent_id)) {
                $model->appendTo($root);
            } else {
                $parent = Category::findOne(['id' => $parent_id, 'module' => $module]);
                $model->appendTo($parent);
            }
            if ($model->save()) {
                return $this->redirect(['index', 'module' => $module]);
            }
        } else {
            return $this->render('create', [
                'model' => $model,
                'module' => $module,
                'parent_id' => $parent_id,
            ]);
        }
    }

    /**
    * Updates an existing Category model.
    * If update is successful, the browser will be redirected to the 'view' page.
    * @param integer $id
    * @return mixed
    */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $module = $model['module'];
        $parents = [];
        $root = Category::findOne(['parent_id' => null, 'title' => $module, 'module' => $module]);
        if (empty($root)) {
            throw new NotFoundHttpException('Module không tồn tại');
        }
        $parents = $root->children()->all();
        $parent_id = $this->buildTree($parents);
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $parent_id = $model['parent_id'];
            $model['slug'] = $this->slugAlias($model);
            if (empty($parent_id)) {
                $model->appendTo($root);
            } else {
                $parent = Category::findOne(['id' => $parent_id, 'module' => $module]);
                $model->appendTo($parent);
            }
            if ($model->save()) {
                return $this->redirect(['index', 'module' => $module]);
            }
        } else {
            return $this->render('update', [
                'model' => $model,
                'module' => $module,
                'parent_id' => $parent_id,
            ]);
        }
    }

    /**
    * Deletes an existing Category model.
    * If deletion is successful, the browser will be redirected to the 'index' page.
    * @param integer $id
    * @return mixed
    */
    public function actionDelete($id)
    {
        $this->findModel($id)->deleteWithChildren();

        return $this->redirect(['index']);
    }

    /**
    * Finds the Category model based on its primary key value.
    * If the model is not found, a 404 HTTP exception will be thrown.
    * @param integer $id
    * @return Category the loaded model
    * @throws NotFoundHttpException if the model cannot be found
    */
    protected function findModel($id)
    {
        if (($model = Category::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    /**
    * Add module
    */
    public function actionModule()
    {
        $allow = true;
        if ($allow) {
            $modules = ['post', 'product'];
            foreach ($modules as $module) :
                $root = new Category(['title' => $module, 'slug' => $module, 'status' => 10, 'module' => $module]);
                $root->makeRoot();
            endforeach;
        }
    }
}
