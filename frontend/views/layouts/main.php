<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\web\View;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
  <header class="header">
    <div class="container">
		<div class="row">
			<div class="col-lg-3">
			  <?= HTML::a(HTML::img('/img/logo.png', ['height' => '80']), ['site/index'], ['title' => 'Phụ tùng máy xây dựng']); ?>
			</div>
			<div class="col-lg-3">
			  <div class="phone"><i class="fa fa-phone-square"></i>
				<div class="phone-box"><strong>Hỗ trợ phụ tùng xe ô tô con</strong><br><span>0981 553 639</span></div>
			  </div>
			</div>
			<div class="col-lg-3">
			  <div class="phone"><i class="fa fa-phone-square"></i>
				<div class="phone-box"><strong>Hỗ trợ phụ tùng xe ô tô tải</strong><br><span>0975 555 529</span></div>
			  </div>
			</div>
			<div class="col-lg-3">
			  <div class="phone"><i class="fa fa-phone-square"></i>
				<div class="phone-box"><strong>Hỗ trợ phụ tùng máy xây dựng</strong><br><span>0913 580 191 - 0985 163 667</span></div>
			  </div>
			</div>
		</div>
		<div class="row">
          <marquee scrollamount="2" behavior="alternate" direction="right" onmouseover="this.stop();" onmouseout="this.start();">
            <h4 class="greeting">Chuyên kinh doanh và phân phối phụ tùng ô tô, máy xây dựng nhập khẩu chính hãng xuất xứ Nhật Bản tại Việt Nam</h4>
          </marquee>
		</div>
    </div>
  </header>
  <nav class="navigation navbar navbar-inverse navbar-static-top">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header hidden-lg hidden-md">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <?= HTML::a('TDN Co.,JSC', ['site/index'], ['title' => 'Phụ tùng máy xây dựng', 'class'=>'navbar-brand']); ?>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="active"><?= HTML::a('Trang chủ', ['site/index'], ['title' => 'Phụ tùng máy xây dựng']); ?></li>
          <li><?= HTML::a('Giới thiệu', ['page/view', 'slug'=>'gioi-thieu'], ['title' => 'Phụ tùng máy xây dựng']); ?></li>
          <li><?= HTML::a('Dịch vụ', ['category/view', 'slug'=>'dich-vu'], ['title' => 'Phụ tùng máy xây dựng']); ?></li>
          <li class="dropdown">
            <?= HTML::a('Sản phẩm', ['site/index'], ['title' => 'Phụ tùng máy xây dựng', 'class'=>'dropdown-toggle', 'data-toggle'=>'dropdown', 'role'=>'button', 'aria-haspopup'=>'true','aria-expanded'=>'false']); ?>
            <ul class="dropdown-menu">
              <li><?= HTML::a('Phụ tùng ô tô con hãng TSK, TBK', ['/category/view', 'slug' => 'phu-tung-o-to-con-hang-tsk-tbk'], ['title' => 'Phụ tùng máy xây dựng']); ?></li>
              <li><?= HTML::a('Phụ tùng ô tô con hãng MIYACO', ['/category/view', 'slug' => 'phu-tung-o-to-con-hang-miyaco'], ['title' => 'Phụ tùng máy xây dựng']); ?></li>
              <li><?= HTML::a('Phụ tùng ô tô con hãng CTR', ['/category/view', 'slug' => 'phu-tung-o-to-con-hang-ctr'], ['title' => 'Phụ tùng máy xây dựng']); ?></li>
              <li role="separator" class="divider"></li>
              <li><?= HTML::a('Phụ tùng ô tô tải hãng TSK, TBK', ['/category/view', 'slug' => 'phu-tung-o-to-tai-hang-tsk-tbk'], ['title' => 'Phụ tùng máy xây dựng']); ?></li>
              <li><?= HTML::a('Phụ tùng ô tô tải hãng KYB', ['/category/view', 'slug' => 'phu-tung-o-to-tai-hang-kyb'], ['title' => 'Phụ tùng máy xây dựng']); ?></li>
              <li><?= HTML::a('Phụ tùng ô tô tải hãng MIYACO', ['/category/view', 'slug' => 'phu-tung-o-to-tai-hang-miyaco'], ['title' => 'Phụ tùng máy xây dựng']); ?></li>
              <li role="separator" class="divider"></li>
              <li><?= HTML::a('Phụ tùng máy xây dựng hãng TEIKOKU(TPR)', ['/category/view', 'slug' => 'phu-tung-may-xay-dung-hang-teikokutpr'], ['title' => 'Phụ tùng máy xây dựng']); ?></li>
              <li><?= HTML::a('Phụ tùng máy xây dựng hãng NIKKO', ['/category/view', 'slug' => 'phu-tung-may-xay-dung-hang-nikko'], ['title' => 'Phụ tùng máy xây dựng']); ?></li>
              <li><?= HTML::a('Phụ tùng máy xây dựng hãng KOMATSU', ['/category/view', 'slug' => 'phu-tung-may-xay-dung-hang-komatsu'], ['title' => 'Phụ tùng máy xây dựng']); ?></li>
              <li><?= HTML::a('Phụ tùng máy xây dựng hãng KAWASAKI', ['/category/view', 'slug' => 'phu-tung-may-xay-dung-hang-kawasaki'], ['title' => 'Phụ tùng máy xây dựng']); ?></li>
            </ul>
          </li>
          <li><?= HTML::a('Đối tác', ['category/view', 'slug'=>'doi-tac'], ['options' => ['title' => 'Phụ tùng máy xây dựng']]); ?></li>
          <li><?= HTML::a('Tin tức', ['category/view', 'slug'=>'tin-tuc'], ['options' => ['title' => 'Phụ tùng máy xây dựng']]); ?></li>
          <li><?= HTML::a('Chứng nhận độc quyền', ['page/view', 'slug'=>'chung-nhan-doc-quyen'], ['options' => ['title' => 'Chứng nhận độc quyền']]); ?></li>
          <li><?= HTML::a('Liên hệ', ['page/view', 'slug'=>'lien-he'], ['options' => ['title' => 'Phụ tùng máy xây dựng']]); ?></li>
        </ul>
        <div class="navbar-form navbar-right">
          <div class="input-group">
              <form action="<?=\yii\helpers\Url::to('/tim-kiem'); ?>" method="get">
                <input type="text" class="form-control" placeholder="Tìm kiểm sản phẩm" name="q">
                <span class="input-group-btn">
                  <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                </span>
              </form>
          </div><!-- /input-group -->
        </div>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
  <section class="container">
    <div class="row">
      <div class="col-lg-3">
        <div class="panel panel-primary">
          <div class="panel-heading">Danh mục sản phẩm</div>
          <div class="panel-body">
            <div class="row">
            <ul class="list-unstyled category-block">
              <li><?= HTML::a('Phụ tùng ô tô con hãng TSK, TBK', ['/category/view', 'slug' => 'phu-tung-o-to-con-hang-tsk-tbk'], ['title' => 'Phụ tùng máy xây dựng']); ?></li>
              <li><?= HTML::a('Phụ tùng ô tô con hãng MIYACO', ['/category/view', 'slug' => 'phu-tung-o-to-con-hang-miyaco'], ['title' => 'Phụ tùng máy xây dựng']); ?></li>
              <li><?= HTML::a('Phụ tùng ô tô con hãng CTR', ['/category/view', 'slug' => 'phu-tung-o-to-con-hang-ctr'], ['title' => 'Phụ tùng máy xây dựng']); ?></li>
              <li><?= HTML::a('Phụ tùng ô tô tải hãng TSK, TBK', ['/category/view', 'slug' => 'phu-tung-o-to-tai-hang-tsk-tbk'], ['title' => 'Phụ tùng máy xây dựng']); ?></li>
              <li><?= HTML::a('Phụ tùng ô tô tải hãng KYB', ['/category/view', 'slug' => 'phu-tung-o-to-tai-hang-kyb'], ['title' => 'Phụ tùng máy xây dựng']); ?></li>
              <li><?= HTML::a('Phụ tùng ô tô tải hãng MIYACO', ['/category/view', 'slug' => 'phu-tung-o-to-tai-hang-miyaco'], ['title' => 'Phụ tùng máy xây dựng']); ?></li>
              <li><?= HTML::a('Phụ tùng máy xây dựng hãng TEIKOKU(TPR)', ['/category/view', 'slug' => 'phu-tung-may-xay-dung-hang-teikokutpr'], ['title' => 'Phụ tùng máy xây dựng']); ?></li>
              <li><?= HTML::a('Phụ tùng máy xây dựng hãng NIKKO', ['/category/view', 'slug' => 'phu-tung-may-xay-dung-hang-nikko'], ['title' => 'Phụ tùng máy xây dựng']); ?></li>
              <li><?= HTML::a('Phụ tùng máy xây dựng hãng KOMATSU', ['/category/view', 'slug' => 'phu-tung-may-xay-dung-hang-komatsu'], ['title' => 'Phụ tùng máy xây dựng']); ?></li>
              <li><?= HTML::a('Phụ tùng máy xây dựng hãng KAWASAKI', ['/category/view', 'slug' => 'phu-tung-may-xay-dung-hang-kawasaki'], ['title' => 'Phụ tùng máy xây dựng']); ?></li>
            </ul>
            </div>
          </div>
        </div>
        <iframe width="262" height="148" src="https://www.youtube.com/embed/_nmHWsbQgf8?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
        <?= HTML::a(Yii::$app->imageCache->thumb('/uploads/chung-nhan-doc-quyen.png', 'docquyen'), [
            'page/view', 'slug'=> 'chung-nhan-doc-quyen'
        ]); ?>
		<p></p>
		<div class="panel panel-primary">
			<div class="panel-heading">Sản phẩm bán chạy</div>
			<div class="panel-body">
				<?php $productsHot = frontend\controllers\FrontendController::getProductByHot(); ?>
				<div id="product_hot">
				<?php foreach ($productsHot as $node): ?>
					<div class="thumbnail">
                      <?= HTML::a(Yii::$app->imageCache->thumb($node->image, 'post'), [
                          'product/view', 'slug'=> $node->slug
                      ]); ?>
                    </div>
                    <h5 class="grid-product-title"><?=HTML::a($node->title, [
                          'product/view', 'slug' => $node->slug
                      ]); ?>
                    </h5>
				<?php endforeach; ?>
				</div>
				<?php
				$js = '
				(function($) {
					$(function() {
						$("#product_hot").simplyScroll({orientation:\'vertical\',customClass:\'vert\'});
					});
				})(jQuery);
				';
				$this->registerJs($js, 3);
				?>
			</div>
		</div>
      </div>
      <div class="col-lg-9">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
      </div>
    </div>
  </section>
</div>
<?=\common\onecms\PartnerWidget::widget();?>
<footer class="footer">
    <div class="container">
        <p class="pull-left">
          <strong>Công ty Cổ phần vật tư thiết bị và phụ tùng TDN</strong><br />
  <strong>Địa chỉ VPGD:</strong> phòng 506 - Toà nhà A3, Khu đô thị Mỹ đình I, Đường Hàm nghi, P. Cầu diễn, Q. Nam từ Liêm Hà Nội.<br />
  <strong>Địa chỉ:</strong> Số 5/45/58 - Phố Trần Bình, P. Mai Dịch, Q. Cầu Giấy, Hà Nội.<br />
  <strong>Điện thoại:</strong> 04.22213811 - <strong>Fax:</strong> 04.62875711<br />
        </p>

        <p class="pull-right">Copyright © 2015 , TDN JSC</p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
