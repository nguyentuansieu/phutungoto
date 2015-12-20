<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Post */

$this->title = Yii::t('backend', 'Create Post');
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Posts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box post-create">
    <?= $this->render('_form', [
        'model' => $model,
        'parent_id' => $parent_id,
    ]) ?>
</div>
