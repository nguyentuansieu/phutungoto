<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title = $node->title;
?>
<div class="row">
  <div class="col-lg-4">
    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field('fullname')->textInput(['maxlength' => true]) ?>
    <div class="form-group">
      <?= Html::submitButton(Yii::t('frontend', 'Gửi liên hệ'), ['class' => 'btn btn-success']) ?>
    </div>
    <?php ActiveForm::end(); ?>
  </div>
  <div class="col-lg-8">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1861.9684593120685!2d105.76482969999996!3d21.035209900000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1442773995586" width="535" height="340" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>
</div>