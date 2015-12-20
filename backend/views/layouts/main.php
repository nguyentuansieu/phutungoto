<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

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
<body class="skin-purple-light layout-top-nav">
  <?php $this->beginBody() ?>

  <div class="wrapper">
    <header class="main-header">
    <?php
    NavBar::begin([
      'brandLabel' => 'Bio CMS',
      'brandUrl' => Yii::$app->homeUrl,
      'options' => [
        'class' => 'navbar navbar-fixed-top',
      ],
    ]);
    $menuItems = [
      ['label' => 'Trang chủ', 'url' => ['/site/index']],
    ];
    if (Yii::$app->user->isGuest) {
      $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
      if(common\models\User::ROLE_ADMIN === Yii::$app->user->identity->role) {
        $menuItems[] = ['label' => 'Nội dung', 'url' => ['/post/index'], 'items' => [
          ['label' => 'Danh mục', 'url' => ['/category/index', 'module' => 'post']],
          ['label' => 'Bài viết', 'url' => ['/post/index']],
          ['label' => 'Trang cố định', 'url' => ['/page/index']],
        ]];
        $menuItems[] = ['label' => 'Sản phẩm', 'url' => ['/product/index'], 'items' => [
          ['label' => 'Danh mục', 'url' => ['/category/index', 'module' => 'product']],
          ['label' => 'Sản phẩm', 'url' => ['/product/index']],
        ]];
        $menuItems[] = ['label' => 'Quảng cáo', 'url' => ['/site/login']];
        $menuItems[] = ['label' => 'Cấu hình', 'url' => ['/site/login']];
      }
      $menuItems[] = [
        'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
        'url' => ['/site/logout'],
        'linkOptions' => ['data-method' => 'post']
      ];
    }
    echo Nav::widget([
      'options' => ['class' => 'navbar-nav navbar-right'],
      'activateItems'=>'true',
      'activateParents'=>'true',
      'items' => $menuItems,
    ]);
    NavBar::end();
    ?>
  </header>
    <div class="container">
      <section class="content-header">
      <h1><?= Html::encode($this->title) ?></h1>
      <?= Breadcrumbs::widget([
        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
      </section>
      <section class="content">
        <?= Alert::widget() ?>
        <?= $content ?>
      </div>
      </div>
    </div>

    <footer class="footer">
      <div class="container">
        <p class="pull-left">&copy; BioCMS <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
      </div>
    </footer>

    <?php $this->endBody() ?>
  </body>
  </html>
  <?php $this->endPage() ?>
