<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Category */

$this->title = Yii::t('backend', 'Create Category');
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Categories'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box box-success category-create">
    <?= $this->render('_form', [
        'model' => $model,
        'module' => $module,
        'parent_id' => $parent_id,
    ]) ?>
</div>
