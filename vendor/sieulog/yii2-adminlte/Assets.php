<?php
namespace sieulog\adminlte;

use yii\web\AssetBundle;

/**
 * @author Nguyen Tuan Sieu <tuan@sieulog.com>
 * @since 1.0
 */
class Assets extends AssetBundle
{
    public $sourcePath = '@bower/admin-lte';
    public $js = [
        'dist/js/app.min.js',
    ];
    public $css = [
        'dist/css/AdminLTE.css',
        'dist/css/skins/_all-skins.min.css',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'sieulog\adminlte\FontAwesomeAssets',
        'sieulog\adminlte\IoniconAssets'
    ];
}
