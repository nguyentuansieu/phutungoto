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
            <?php $otoCon = FrontendController::getProductByCategory(3); ?>
            <div class="clearfix">
                <?php $i=0; foreach ($otoCon as $node) : ?>
                <?php if($i!=0 && $i%3 == 0): ?>
                    </div><div class="clearfix">
                <?php endif; ?>
                <div class="col-lg-4">
                    <div class="thumbnail">
                      <?= HTML::a(Yii::$app->imageCache->thumb($node->image, 'post'), [
                          'product/view', 'slug'=> $node->slug
                      ]); ?>
                    </div>
                    <h5 class="grid-product-title"><?=HTML::a($node->title, [
                          'product/view', 'slug' => $node->slug
                      ]); ?>
                    </h5>
                </div><!--One Item-->
                <?php $i++; endforeach; ?>
            </div>
        </div>
            <!-- Oto con tsk-tbk -->
          <div role="tabpanel" class="tab-pane fade" id="oto-con-tsk-tbk">
              <?php $otoCon = FrontendController::getProductByCategory(4); ?>
              <div class="clearfix">
                  <?php $i=0; foreach ($otoCon as $node) : ?>
                  <?php if($i!=0 && $i%3 == 0): ?>
                      </div><div class="clearfix">
                  <?php endif; ?>
                  <div class="col-lg-4">
                      <div class="thumbnail">
                        <?= HTML::a(Yii::$app->imageCache->thumb($node->image, 'post'), [
                            'product/view', 'slug'=> $node->slug
                        ]); ?>
                      </div>
                      <h5 class="grid-product-title"><?=HTML::a($node->title, [
                            'product/view', 'slug' => $node->slug
                        ]); ?>
                      </h5>
                  </div><!--One Item-->
                  <?php $i++; endforeach; ?>
              </div>
          </div>
          <!-- Oto con miyaco -->
        <div role="tabpanel" class="tab-pane fade" id="oto-con-miyaco">
            <?php $otoCon = FrontendController::getProductByCategory(5); ?>
            <div class="clearfix">
                <?php $i=0; foreach ($otoCon as $node) : ?>
                <?php if($i!=0 && $i%3 == 0): ?>
                    </div><div class="clearfix">
                <?php endif; ?>
                <div class="col-lg-4">
                    <div class="thumbnail">
                      <?= HTML::a(Yii::$app->imageCache->thumb($node->image, 'post'), [
                          'product/view', 'slug'=> $node->slug
                      ]); ?>
                    </div>
                    <h5 class="grid-product-title"><?=HTML::a($node->title, [
                          'product/view', 'slug' => $node->slug
                      ]); ?>
                    </h5>
                </div><!--One Item-->
                <?php $i++; endforeach; ?>
            </div>
        </div>
        <!-- Oto con oto-con-ctr -->
          <div role="tabpanel" class="tab-pane fade" id="oto-con-ctr">
              <?php $otoCon = FrontendController::getProductByCategory(6); ?>
              <div class="clearfix">
                  <?php $i=0; foreach ($otoCon as $node) : ?>
                  <?php if($i!=0 && $i%3 == 0): ?>
                      </div><div class="clearfix">
                  <?php endif; ?>
                  <div class="col-lg-4">
                      <div class="thumbnail">
                        <?= HTML::a(Yii::$app->imageCache->thumb($node->image, 'post'), [
                            'product/view', 'slug'=> $node->slug
                        ]); ?>
                      </div>
                      <h5 class="grid-product-title"><?=HTML::a($node->title, [
                            'product/view', 'slug' => $node->slug
                        ]); ?>
                      </h5>
                  </div><!--One Item-->
                  <?php $i++; endforeach; ?>
              </div>
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
              <?php $otoCon = FrontendController::getProductByCategory(7); ?>
              <div class="clearfix">
                  <?php $i=0; foreach ($otoCon as $node) : ?>
                  <?php if($i!=0 && $i%3 == 0): ?>
                      </div><div class="clearfix">
                  <?php endif; ?>
                  <div class="col-lg-4">
                      <div class="thumbnail">
                        <?= HTML::a(Yii::$app->imageCache->thumb($node->image, 'post'), [
                            'product/view', 'slug'=> $node->slug
                        ]); ?>
                      </div>
                      <h5 class="grid-product-title"><?=HTML::a($node->title, [
                            'product/view', 'slug' => $node->slug
                        ]); ?>
                      </h5>
                  </div><!--One Item-->
                  <?php $i++; endforeach; ?>
              </div>
          </div>
          <!-- Oto tai tsk,tsb -->
          <div role="tabpanel" class="tab-pane fade" id="oto-tai-tsk">
              <?php $otoCon = FrontendController::getProductByCategory(8); ?>
              <div class="clearfix">
                  <?php $i=0; foreach ($otoCon as $node) : ?>
                  <?php if($i!=0 && $i%3 == 0): ?>
                      </div><div class="clearfix">
                  <?php endif; ?>
                  <div class="col-lg-4">
                      <div class="thumbnail">
                        <?= HTML::a(Yii::$app->imageCache->thumb($node->image, 'post'), [
                            'product/view', 'slug'=> $node->slug
                        ]); ?>
                      </div>
                      <h5 class="grid-product-title"><?=HTML::a($node->title, [
                            'product/view', 'slug' => $node->slug
                        ]); ?>
                      </h5>
                  </div><!--One Item-->
                  <?php $i++; endforeach; ?>
              </div>
          </div>
          <!-- Oto tai tsk,tsb -->
          <div role="tabpanel" class="tab-pane fade" id="oto-tai-kyb">
              <?php $otoCon = FrontendController::getProductByCategory(9); ?>
              <div class="clearfix">
                  <?php $i=0; foreach ($otoCon as $node) : ?>
                  <?php if($i!=0 && $i%3 == 0): ?>
                      </div><div class="clearfix">
                  <?php endif; ?>
                  <div class="col-lg-4">
                      <div class="thumbnail">
                        <?= HTML::a(Yii::$app->imageCache->thumb($node->image, 'post'), [
                            'product/view', 'slug'=> $node->slug
                        ]); ?>
                      </div>
                      <h5 class="grid-product-title"><?=HTML::a($node->title, [
                            'product/view', 'slug' => $node->slug
                        ]); ?>
                      </h5>
                  </div><!--One Item-->
                  <?php $i++; endforeach; ?>
              </div>
          </div>
          <!-- Oto tai miyaco -->
          <div role="tabpanel" class="tab-pane fade" id="oto-tai-miyaco">
              <?php $otoCon = FrontendController::getProductByCategory(10); ?>
              <div class="clearfix">
                  <?php $i=0; foreach ($otoCon as $node) : ?>
                  <?php if($i!=0 && $i%3 == 0): ?>
                      </div><div class="clearfix">
                  <?php endif; ?>
                  <div class="col-lg-4">
                      <div class="thumbnail">
                        <?= HTML::a(Yii::$app->imageCache->thumb($node->image, 'post'), [
                            'product/view', 'slug'=> $node->slug
                        ]); ?>
                      </div>
                      <h5 class="grid-product-title"><?=HTML::a($node->title, [
                            'product/view', 'slug' => $node->slug
                        ]); ?>
                      </h5>
                  </div><!--One Item-->
                  <?php $i++; endforeach; ?>
              </div>
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
                  <?php $otoCon = FrontendController::getProductByCategory(12); ?>
                  <div class="clearfix">
                      <?php $i=0; foreach ($otoCon as $node) : ?>
                      <?php if($i!=0 && $i%3 == 0): ?>
                          </div><div class="clearfix">
                      <?php endif; ?>
                      <div class="col-lg-4">
                          <div class="thumbnail">
                            <?= HTML::a(Yii::$app->imageCache->thumb($node->image, 'post'), [
                                'product/view', 'slug'=> $node->slug
                            ]); ?>
                          </div>
                          <h5 class="grid-product-title"><?=HTML::a($node->title, [
                                'product/view', 'slug' => $node->slug
                            ]); ?>
                          </h5>
                      </div><!--One Item-->
                      <?php $i++; endforeach; ?>
                  </div>
                </div>
                <!-- Oto tai miyaco -->
                <div role="tabpanel" class="tab-pane fade" id="may-xay-dung-teikoku">
                  <?php $otoCon = FrontendController::getProductByCategory(11); ?>
                  <div class="clearfix">
                      <?php $i=0; foreach ($otoCon as $node) : ?>
                      <?php if($i!=0 && $i%3 == 0): ?>
                          </div><div class="clearfix">
                      <?php endif; ?>
                      <div class="col-lg-4">
                          <div class="thumbnail">
                            <?= HTML::a(Yii::$app->imageCache->thumb($node->image, 'post'), [
                                'product/view', 'slug'=> $node->slug
                            ]); ?>
                          </div>
                          <h5 class="grid-product-title"><?=HTML::a($node->title, [
                                'product/view', 'slug' => $node->slug
                            ]); ?>
                          </h5>
                      </div><!--One Item-->
                      <?php $i++; endforeach; ?>
                  </div>
                </div>
                <!-- Oto tai miyaco -->
                <div role="tabpanel" class="tab-pane fade" id="may-xay-dung-nikko">
                  <?php $otoCon = FrontendController::getProductByCategory(13); ?>
                  <div class="clearfix">
                      <?php $i=0; foreach ($otoCon as $node) : ?>
                      <?php if($i!=0 && $i%3 == 0): ?>
                          </div><div class="clearfix">
                      <?php endif; ?>
                      <div class="col-lg-4">
                          <div class="thumbnail">
                            <?= HTML::a(Yii::$app->imageCache->thumb($node->image, 'post'), [
                                'product/view', 'slug'=> $node->slug
                            ]); ?>
                          </div>
                          <h5 class="grid-product-title"><?=HTML::a($node->title, [
                                'product/view', 'slug' => $node->slug
                            ]); ?>
                          </h5>
                      </div><!--One Item-->
                      <?php $i++; endforeach; ?>
                  </div>
                </div>
                <!-- Oto tai miyaco -->
                <div role="tabpanel" class="tab-pane fade" id="may-xay-dung-komatsu">
                  <?php $otoCon = FrontendController::getProductByCategory(14); ?>
                  <div class="clearfix">
                      <?php $i=0; foreach ($otoCon as $node) : ?>
                      <?php if($i!=0 && $i%3 == 0): ?>
                          </div><div class="clearfix">
                      <?php endif; ?>
                      <div class="col-lg-4">
                          <div class="thumbnail">
                            <?= HTML::a(Yii::$app->imageCache->thumb($node->image, 'post'), [
                                'product/view', 'slug'=> $node->slug
                            ]); ?>
                          </div>
                          <h5 class="grid-product-title"><?=HTML::a($node->title, [
                                'product/view', 'slug' => $node->slug
                            ]); ?>
                          </h5>
                      </div><!--One Item-->
                      <?php $i++; endforeach; ?>
                  </div>
                </div>
                <!-- Oto tai miyaco -->
                <div role="tabpanel" class="tab-pane fade" id="may-xay-dung-kawasaki">
                  <?php $otoCon = FrontendController::getProductByCategory(15); ?>
                  <div class="clearfix">
                      <?php $i=0; foreach ($otoCon as $node) : ?>
                      <?php if($i!=0 && $i%3 == 0): ?>
                          </div><div class="clearfix">
                      <?php endif; ?>
                      <div class="col-lg-4">
                          <div class="thumbnail">
                            <?= HTML::a(Yii::$app->imageCache->thumb($node->image, 'post'), [
                                'product/view', 'slug'=> $node->slug
                            ]); ?>
                          </div>
                          <h5 class="grid-product-title"><?=HTML::a($node->title, [
                                'product/view', 'slug' => $node->slug
                            ]); ?>
                          </h5>
                      </div><!--One Item-->
                      <?php $i++; endforeach; ?>
                  </div>
                </div>
          </div>
      </div>
    </div>
  </div>
</div>
