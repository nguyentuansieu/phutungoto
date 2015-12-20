<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/jssocials.css',
        'css/jssocials-theme-flat.css',
		'css/jquery.simplyscroll.css',
        'css/site.css',
    ];
    public $js = [
      'js/jquery.cycle2.min.js',
	  'js/jquery.simplyscroll.min.js',
      'js/jssocials.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'sieulog\adminlte\FontAwesomeAssets',
        'sieulog\adminlte\IoniconAssets'
    ];
}
