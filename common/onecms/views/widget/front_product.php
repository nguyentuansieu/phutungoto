<?php
use yii\helpers\Html;
?>
<div class="clearfix">
  <?php $i=0; foreach ($nodes as $node) : ?>
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
<div class="text-center">
  <?=HTML::a(HTML::img('img/icon-xem-them.png'), ['category/view', 'slug' => $category_slug]); ?>
</div>