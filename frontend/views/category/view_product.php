<?php

use yii\helpers\Html;
use yii\helpers\BaseStringHelper;
$this->title = $category_title;
?>
<div class="panel">
<div class="panel-body">
<h1 class="n-title"><?=$category_title ?></h1>
<div class="post-list">
    <div class="row">
        <?php $i = 0; foreach ($nodes as $node) : ?>
            <?php if ($i !=0 && $i%3==0): ?>
            </div><div class="row">
            <?php endif; ?>
            <div class="col-lg-4">
				<div class="thumbnail">
                <?= HTML::a(Yii::$app->imageCache->thumb($node->image, 'post', ['class'=>'img-responsive']), [
                    'product/view', 'slug'=> $node->slug
                ]); ?>
				</div>
                <h5 class="grid-product-title"><?=HTML::a($node->title, [
                    'product/view', 'slug' => $node->slug
                ]); ?></h5>
            </div>
        <?php $i++; endforeach; ?>
    </div>
</div>
<div class="pagi">
    <?php echo \yii\widgets\LinkPager::widget([
        'pagination' => $pagination,
        'options' => ['class' => 'pagination small']
    ]); ?>
</div>
</div>
</div>