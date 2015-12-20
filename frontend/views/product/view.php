<?php

use yii\helpers\Html;
use yii\web\View;

$this->title = $node->title;
?>
<div class="panel">
<div class="panel-body">
<div class="row">
    <div class="col-lg-5">
        <?=Yii::$app->imageCache->thumb($node->image, 'product_detail', ['class' => 'img-responsive']); ?>
		<div id="share"></div>
        <?php
        $this->registerJs('
        $("#share").jsSocials({
            showCount: true,
            showLabel: false,
            shares: [
                "twitter",
                "facebook",
                "googleplus",
            ]
        });
        ', View::POS_READY);
        ?>
    </div>
    <div class="col-lg-7">
        <h1 class="n-title"><?php echo $node->title; ?></h1>
        <p><strong>Mã sản phẩm: </strong><?=$node->sku;?></p>
		<p><strong>Trong kho: </strong>
		<?php
			switch($node->in_stock) {
				case 10:
				default:
					echo "Còn hàng";
					break;
				case 20:
					echo "Hết hàng";
					break;
				case 30:
					echo "Hàng sắp về";
					break;
			}
		?>
		</p>
		<p><strong>Mô tả ngắn:</strong><br /><?=$node->summary; ?></p>
		<p class="tuvan"><strong><?=$node->hotline;?></strong> (<small>Tư vấn sản phẩm</small>)</p>
    </div>
</div>
<hr />
<div class="n-description clearfix">
    <?php echo $node->content; ?>
</div>
<h2>Các sản phẩm khác</h2>
<div class="row">
<?php $j = 0; foreach ($relateNodes as $node): ?>
    <?php if ($j !=0 && $j%3==0): ?>
        </div><div class="row">
    <?php endif; ?>
    <div class="col-lg-4">
        <?= HTML::a(Yii::$app->imageCache->thumb($node->image, 'post', ['class' => 'img-responsive']), [
            'product/view', 'slug'=> $node->slug
        ]); ?>
        <h5 class="grid-product-title"><?=HTML::a($node->title, [
            'product/view', 'slug' => $node->slug
        ]); ?></h5>
    </div>
<?php $j++;
 endforeach; ?>
</div>
</div>
</div>
