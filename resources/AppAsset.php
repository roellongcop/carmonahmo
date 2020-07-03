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
class AppAsset extends AssetBundle
{
    // public $sourcePath = '@app/resources/assetFiles'; //para sa temporary folder creation
    public $basePath = '@webroot';
    public $baseUrl = '@web/resources/backend';
    public $css = [
        'css/bootstrap.min.css',
        'font-awesome/css/font-awesome.css',
        'css/plugins/iCheck/custom.css',
        'css/jquery-ui.css',            
        'css/select2.min.css',
        'css/plugins/morris/morris-0.4.3.min.css',
        'css/plugins/dataTables/dataTables.bootstrap.css',
        'css/plugins/dataTables/dataTables.responsive.css',
        'css/plugins/dataTables/dataTables.tableTools.min.css',
        'css/plugins/daterangepicker/daterangepicker-bs3.css',
        'css/plugins/sweetalert/sweetalert.css',
        'css/plugins/footable/footable.core.css',
        'css/animate.css',
        'css/style.css',
    ];
    public $js = [ 
        // 'js/jquery.min.js',
        'js/bootstrap.min.js',

        'js/plugins/metisMenu/jquery.metisMenu.js',
        'js/plugins/slimscroll/jquery.slimscroll.min.js',
        'js/plugins/sparkline/jquery.sparkline.min.js',
        'js/plugins/dataTables/jquery.dataTables.js',
        'js/plugins/dataTables/dataTables.bootstrap.js',
        'js/plugins/dataTables/dataTables.responsive.js',
        'js/plugins/dataTables/dataTables.tableTools.min.js',
        
        'js/plugins/flot/jquery.flot.js',
        'js/plugins/flot/jquery.flot.tooltip.min.js',
        'js/plugins/flot/jquery.flot.resize.js',
        'js/plugins/flot/jquery.flot.pie.js',
        'js/plugins/flot/jquery.flot.time.js',
        // 'js/demo/flot-demo.js',
        'js/plugins/morris/raphael-2.1.0.min.js',
        'js/plugins/morris/morris.js',
        // 'js/demo/morris-demo.js',

        'js/vue.min.js',

        // ChartJS
        'js/plugins/chartJs/Chart.min.js',
        // 'js/demo/chartjs-demo.js',
        'js/select2.full.min.js',
        'js/jquery-ui.js' ,                

        'js/plugins/fullcalendar/moment.min.js',
        'js/plugins/daterangepicker/daterangepicker.js',
        'js/plugins/footable/footable.all.min.js',
        'js/inspinia.js',
        'js/plugins/pace/pace.min.js',
        'js/plugins/iCheck/icheck.min.js',
        // 'js/plugins/jquery-ui/jquery-ui.min.js',
        'js/plugins/sweetalert/sweetalert.min.js',
        'js/printThis.js',
        // 'js/date.js',
        'js/custom.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
