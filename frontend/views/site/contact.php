<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

<<<<<<< HEAD
$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.
    </p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                <?= $form->field($model, 'name') ?>

                <?= $form->field($model, 'email') ?>

                <?= $form->field($model, 'subject') ?>

                <?= $form->field($model, 'body')->textArea(['rows' => 6]) ?>

                <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                    'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                ]) ?>

                <div class="form-group">
                    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
=======
$this->title = 'Liên hệ';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel site-contact">
    <div class="panel-body">

    <h1 class="n-title"><?= Html::encode($this->title) ?></h1>

    <div class="row">
        <div class="col-lg-4">
            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                <?= $form->field($model, 'name') ?>
                <?= $form->field($model, 'phone') ?>
                <?= $form->field($model, 'email') ?>
                <?= $form->field($model, 'content')->textArea(['rows' => 6]) ?>
                <div class="form-group">
                    <?= Html::submitButton('Gửi liên hệ', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
>>>>>>> 7a8b7d089007b8e390152c511b7569359845b627
                </div>

            <?php ActiveForm::end(); ?>
        </div>
<<<<<<< HEAD
    </div>

=======
        <div class="col-lg-8">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1861.9684593120685!2d105.76482969999996!3d21.035209900000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1442773995586" width="535" height="340" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
    </div>
>>>>>>> 7a8b7d089007b8e390152c511b7569359845b627
</div>
