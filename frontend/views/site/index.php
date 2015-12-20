<?php

use yii\helpers\Html;
use frontend\controllers\FrontendController;
/* @var $this yii\web\View */

$this->title = 'Phụ tùng ô tô tải | Phụ tùng ô tô con | Phụ tùng máy xây dựng';
?>
<div class="site-index">
  <div class="slideshow">
    <div class="cycle-slideshow">
      <?=HTML::img('/uploads/demo/slideshow/1.jpg', ['class'=>'img-responsive']); ?>
      <?=HTML::img('/uploads/demo/slideshow/2.jpg', ['class'=>'img-responsive']); ?>
      <?=HTML::img('/uploads/demo/slideshow/3.jpg', ['class'=>'img-responsive']); ?>
      <?=HTML::img('/uploads/demo/slideshow/4.jpg', ['class'=>'img-responsive']); ?>
      <?=HTML::img('/uploads/demo/slideshow/5.jpg', ['class'=>'img-responsive']); ?>
      <?=HTML::img('/uploads/demo/slideshow/6.jpg', ['class'=>'img-responsive']); ?>
    </div>
  </div>
  <hr />
  <div class="site-index-products">
    <ul class="nav nav-tabs" role="tablist">
      <li role="presentation" class="active"><a href="#oto-con" aria-controls="oto-con" role="tab" data-toggle="tab">Phụ tùng ô tô con</a></li>
      <li role="presentation"><a href="#oto-con-tsk-tbk" aria-controls="oto-con-tsk-tbk" role="tab" data-toggle="tab">Hãng TSK, TBK</a></li>
      <li role="presentation"><a href="#oto-con-miyaco" aria-controls="oto-con-miyaco" role="tab" data-toggle="tab">Hãng MIYACO</a></li>
      <li role="presentation"><a href="#oto-con-ctr" aria-controls="oto-con-ctr" role="tab" data-toggle="tab">Hãng CTR</a></li>
    </ul>

    <div class="panel panel-body">
      <div class="row tab-content">
          <!-- Oto con -->
        <div role="tabpanel" class="tab-pane fade in active" id="oto-con">
          <?=\common\onecms\FrontProductWidget::widget(['category_id' => 3]); ?>
        </div>
            <!-- Oto con tsk-tbk -->
          <div role="tabpanel" class="tab-pane fade" id="oto-con-tsk-tbk">
            <?=\common\onecms\FrontProductWidget::widget(['category_id' => 4]); ?>
          </div>
          <!-- Oto con miyaco -->
        <div role="tabpanel" class="tab-pane fade" id="oto-con-miyaco">
          <?=\common\onecms\FrontProductWidget::widget(['category_id' => 5]); ?>
        </div>
        <!-- Oto con oto-con-ctr -->
          <div role="tabpanel" class="tab-pane fade" id="oto-con-ctr">
            <?=\common\onecms\FrontProductWidget::widget(['category_id' => 6]); ?>
          </div>
      </div>
    </div>
  </div>
  <div class="site-index-products">
    <ul class="nav nav-tabs" role="tablist">
      <li role="presentation" class="active"><a href="#oto-tai" aria-controls="oto-tai" role="tab" data-toggle="tab">Phụ tùng ô tô tải</a></li>
      <li role="presentation"><a href="#oto-tai-tsk" aria-controls="oto-tai-tsk" role="tab" data-toggle="tab">Hãng TSK, TBK</a></li>
      <li role="presentation"><a href="#oto-tai-kyb" aria-controls="oto-tai-kyb" role="tab" data-toggle="tab">Hãng KYB</a></li>
      <li role="presentation"><a href="#oto-tai-miyaco" aria-controls="oto-tai-miyaco" role="tab" data-toggle="tab">Hãng MIYACO</a></li>
    </ul>
    <div class="panel panel-body">
      <div class="row tab-content">
          <!-- Oto tai -->
          <div role="tabpanel" class="tab-pane fade in active" id="oto-tai">
            <?=\common\onecms\FrontProductWidget::widget(['category_id' => 7]); ?>
          </div>
          <!-- Oto tai tsk,tsb -->
          <div role="tabpanel" class="tab-pane fade" id="oto-tai-tsk">
            <?=\common\onecms\FrontProductWidget::widget(['category_id' => 8]); ?>
          </div>
          <!-- Oto tai tsk,tsb -->
          <div role="tabpanel" class="tab-pane fade" id="oto-tai-kyb">
            <?=\common\onecms\FrontProductWidget::widget(['category_id' => 9]); ?>
          </div>
          <!-- Oto tai miyaco -->
          <div role="tabpanel" class="tab-pane fade" id="oto-tai-miyaco">
            <?=\common\onecms\FrontProductWidget::widget(['category_id' => 10]); ?>
          </div>
      </div>
    </div>
  </div>
  <div class="site-index-products">
    <ul class="nav nav-tabs" role="tablist">
      <li role="presentation" class="active"><a href="#may-xay-dung" aria-controls="may-xay-dung" role="tab" data-toggle="tab">Phụ tùng máy xây dựng</a></li>
      <li role="presentation"><a href="#may-xay-dung-teikoku" aria-controls="may-xay-dung-teikoku" role="tab" data-toggle="tab">Hãng TEIKOKU</a></li>
      <li role="presentation"><a href="#may-xay-dung-nikko" aria-controls="may-xay-dung-nikko" role="tab" data-toggle="tab">Hãng NIKKO</a></li>
      <li role="presentation"><a href="#may-xay-dung-komatsu" aria-controls="may-xay-dung-komatsu" role="tab" data-toggle="tab">Hãng KOMATSU</a></li>
      <li role="presentation"><a href="#may-xay-dung-kawasaki" aria-controls="may-xay-dung-kawasaki" role="tab" data-toggle="tab">Hãng KAWASAKI</a></li>
    </ul>
    <div class="panel panel-body">
      <div class="row tab-content">
                <!-- Oto tai miyaco -->
                <div role="tabpanel" class="tab-pane fade in active" id="may-xay-dung">
                  <?=\common\onecms\FrontProductWidget::widget(['category_id' => 12]); ?>
                </div>
                <!-- Oto tai miyaco -->
                <div role="tabpanel" class="tab-pane fade" id="may-xay-dung-teikoku">
                  <?=\common\onecms\FrontProductWidget::widget(['category_id' => 11]); ?>
                </div>
                <!-- Oto tai miyaco -->
                <div role="tabpanel" class="tab-pane fade" id="may-xay-dung-nikko">
                  <?=\common\onecms\FrontProductWidget::widget(['category_id' => 13]); ?>
                </div>
                <!-- Oto tai miyaco -->
                <div role="tabpanel" class="tab-pane fade" id="may-xay-dung-komatsu">
                  <?=\common\onecms\FrontProductWidget::widget(['category_id' => 14]); ?>
                </div>
                <!-- Oto tai miyaco -->
                <div role="tabpanel" class="tab-pane fade" id="may-xay-dung-kawasaki">
                  <?=\common\onecms\FrontProductWidget::widget(['category_id' => 15]); ?>
                </div>
          </div>
      </div>
    </div>
  </div>
</div>
