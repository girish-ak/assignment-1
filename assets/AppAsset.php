<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'https://www.flickcall.com',
        'https://fonts.gstatic.com',
        'https://fonts.googleapis.com/css2?family=Fredoka+One&family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,400&display=swap',
        ''
    ];
    public $js = [
        'assets\js\lib.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
