<?php

use yii\helpers\Html;
?>
<div class="container">
  <div class="partner_bottom">
    <?php foreach($nodes as $node): ?>
      <?=HTML::img($node->image, ['height' => 95]); ?>
    <?php endforeach; ?>
  </div>
<?php
//  $js = '
//    (function($) {
//        $(function() {
//            $("#partner_bottom").simplyScroll({orientation:\'horizontal\',customClass:\'vert\'});
//        });
//    })(jQuery);
//  ';
//  $this->registerJs($js, 3);
?>
</div>

