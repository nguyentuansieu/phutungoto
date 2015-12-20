<?php

namespace backend\controllers;

use Yii;
use common\models\Post;
use backend\models\PostSearch;
use backend\controllers\BackendController;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\models\Category;

/**
 * PostController implements the CRUD actions for Post model.
 */
class PostController extends BackendController
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
     * Lists all Post models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PostSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Post model.
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
     * Creates a new Post model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Post();
        $parents = [];
        $root = Category::findOne(['parent_id' => null, 'title' => 'post', 'module' => 'post']);
        if (empty($root)) {
            throw new NotFoundHttpException('Module không tồn tại');
        }
        $parents = $root->children()->all();
        $parent_id = $this->buildTree($parents);
        if ($model->load(Yii::$app->request->post())) {
            $model['slug'] =  $this->slugAlias($model);
            if ($model->save()) {
                return $this->redirect(['index']);
            }
        } else {
            return $this->render('create', [
                'model' => $model,
                'parent_id' => $parent_id,
            ]);
        }
    }

    /**
     * Updates an existing Post model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $parents = [];
        $root = Category::findOne(['parent_id' => null, 'title' => 'post', 'module' => 'post']);
        if (empty($root)) {
            throw new NotFoundHttpException('Module không tồn tại');
        }
        $parents = $root->children()->all();
        $parent_id = $this->buildTree($parents);
        if ($model->load(Yii::$app->request->post())) {
            $model['slug'] =  $this->slugAlias($model);
            if ($model->save()) {
                return $this->redirect(['index']);
            }
        } else {
            return $this->render('update', [
                'model' => $model,
                'parent_id' => $parent_id,
            ]);
        }
    }

    /**
     * Deletes an existing Post model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Post model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Post the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Post::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
