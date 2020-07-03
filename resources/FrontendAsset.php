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
class FrontendAsset extends AssetBundle
{
    
    // FOR ASSETS GENERATING FOLDER
    // public $sourcePath = '@app/resources/frontend';  
    // public $baseUrl = '@web';

    // FOR DIRECT FILE ASSETS ACCESSIBLE
    public $basePath = '@webroot';
    public $baseUrl = '@web/resources/frontend';
    public $css = [
        'https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700',
        'css/linearicons.css',
        'css/font-awesome.min.css',
        'css/bootstrap.css',
        'css/magnific-popup.css',
        'css/jquery-ui.css',                
        'css/nice-select.css',                          
        'css/animate.min.css',
        'css/owl.carousel.css',         
        'css/jquery-ui.css',            
        'css/main.css',
        'css/custom.css',
    ];
    public $js = [ 
        'js/popper.min.js',
        'js/vendor/bootstrap.min.js' ,         
        'https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA',
        'js/jquery-ui.js' ,                
        'js/easing.min.js' ,           
        'js/hoverIntent.js',
        'js/superfish.min.js' ,
        'js/jquery.ajaxchimp.min.js',
        'js/jquery.magnific-popup.min.js' ,
        'js/jquery.tabs.min.js'  ,                     
        'js/jquery.nice-select.min.js',    
        'js/owl.carousel.min.js',                                  
        'js/mail-script.js' ,  
        'js/main.js',
        'js/custom.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
