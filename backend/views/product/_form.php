<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\elfinder\InputFile;
use mihaildev\elfinder\ElFinder;
use mihaildev\ckeditor\CKEditor;
use yii\web\JsExpression;
/* @var $this yii\web\View */
/* @var $model common\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="box-body product-form">

    <?php $form = ActiveForm::begin(); ?>
	<div class="row">
	<div class="col-lg-9">
		<?= $form->field($model, 'category_id')->dropDownList($parent_id) ?>

		<?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

		<?= $form->field($model, 'slug')->textInput(['maxlength' => true]) ?>
		
		<?= $form->field($model, 'image')->widget(InputFile::className(), [
        'language'      => 'en',
        'controller'    => 'elfinder',
        'path' => 'image',
        'filter'        => 'image',
        'template'      => '<div class="input-group">{input}<span class="input-group-btn">{button}</span></div>',
        'options'       => ['class' => 'form-control'],
        'buttonOptions' => ['class' => 'btn btn-success'],
        'multiple'      => false
        ]) ?>
		<?= $form->field($model, 'summary')->widget(CKEditor::className(), [
				'editorOptions' => elFinder::ckeditorOptions(
					['elfinder'],
					['preset' => 'basic', 'entities' => false]
				),
			]) ?>

		<?= $form->field($model, 'content')->widget(CKEditor::className(), [
				'editorOptions' => elFinder::ckeditorOptions(
					['elfinder'],
					['preset' => 'full', 'entities' => false]
				),
			]) ?>
			
		<?= $form->field($model, 'meta_title')->textInput(['maxlength' => true]) ?>
		<?= $form->field($model, 'meta_keywords')->textInput(['maxlength' => true]) ?>
		<?= $form->field($model, 'meta_description')->textInput(['maxlength' => true]) ?>
	</div>
	<div class="col-lg-3">
		<?= $form->field($model, 'sku')->textInput(['maxlength' => true]) ?>

		<?= $form->field($model, 'price')->textInput() ?>
		<?= $form->field($model, 'hotline')->dropDownList($hotline) ?>
		<?= $form->field($model, 'in_stock')->dropDownList($statestock) ?>
		<?= $form->field($model, 'is_hot')->dropDownList($state) ?>
		<?= $form->field($model, 'is_front')->dropDownList($state) ?>
		<?= $form->field($model, 'is_featured')->dropDownList($state) ?>
		<?= $form->field($model, 'status')->dropDownList($state) ?>
		<div class="form-group">
			<?= Html::submitButton($model->isNewRecord ? Yii::t('backend', 'Create') : Yii::t('backend', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
		</div>
	</div>
	</div>
    <?php ActiveForm::end(); ?>

</div>
