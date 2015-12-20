<?php
namespace sieulog\adminlte;

use yii\web\AssetBundle;

/**
 * @author Nguyen Tuan Sieu <tuan@sieulog.com>
 * @since 1.0
 */
class IoniconAssets extends AssetBundle
{
    public $sourcePath = '@bower/ionicons';
    public $js = [];
    public $css = [
        'css/ionicons.min.css',
    ];
    public $depends = [];
}
