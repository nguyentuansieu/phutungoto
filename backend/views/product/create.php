<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Product */

$this->title = Yii::t('backend', 'Create Product');
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Products'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box product-create">
    <?= $this->render('_form', [
        'model' => $model,
        'parent_id' => $parent_id,
		'statestock' => $statestock,
		'hotline' => $hotline,
		'state' => $state,
    ]) ?>
</div>
