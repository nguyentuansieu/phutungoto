<?php

use yii\helpers\Html;

$this->title = $node->title;
?>
<div class="panel">
<div class="panel-body">
<h1 class="n-title"><?php echo $node->title; ?></h1>
<div class="n-description">
    <?php echo $node->content; ?>
</div>
</div>
</div>