<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\resources;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class LoginAsset extends AssetBundle
{
    // public $sourcePath = '@app/resources/assetFiles'; //para sa temporary folder creation
    public $basePath = '@webroot';
    public $baseUrl = '@web/resources/backend';
    public $css = [
        'css/bootstrap.min.css',
        'font-awesome/css/font-awesome.css',
        'css/animate.css',
        'css/style.css', 
        'css/jquery-ui.css',                
        'css/custom.css',
    ];
    public $js = [ 
        'js/bootstrap.min.js',
        'js/jquery-ui.js' ,                
        'js/custom.js', 
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
