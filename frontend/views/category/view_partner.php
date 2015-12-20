<?php

use yii\helpers\Html;
use yii\helpers\BaseStringHelper;

$this->title = $category_title;

?>
<div class="panel">
<div class="panel-body">
<h1 class="n-title"><?=$category_title ?></h1>

<?php foreach ($nodes as $node) : ?>
<div class="col-lg-25 partner-item">
<?= HTML::a(Yii::$app->imageCache->thumb($node->image, 'post', ['class'=>'img-responsive']),
            ['post/view', 'slug'=> $node->slug]); ?>
<h4 class="partner-item-heading"><?=HTML::a($node->title, ['post/view', 'slug' => $node->slug]); ?></h4>
    <?= BaseStringHelper::truncateWords($node->content, 50); ?>	
</div>
<?php endforeach; ?>

<div class="pagi">
    <?php echo \yii\widgets\LinkPager::widget([
        'pagination' => $pagination,
        'options' => ['class' => 'pagination small']
    ]); ?>
</div>
</div>
</div>