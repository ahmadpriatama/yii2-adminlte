<?php
/**
 * AdminLTEAsset class file
 * @package AdminLTE
 * @author Ahmad Priatama <ahmad.priatama@gmail.com>
 * @since 2016.08.11
 */

namespace AdminLTE\assets;

use p2made\assets\MomentAsset;

/**
 * Class AdminLTEAsset
 * @package AdminLTE
 * @author Ahmad Priatama <ahmad.priatama@gmail.com>
 * @since 2016.08.11
 */
class AdminLTEAsset extends \yii\web\AssetBundle
{
    /**
     * @var string
     */
    public $sourcePath = '@vendor/almasaeed2010/adminlte/';

    /**
     * @var array
     */
    public $css = [
        'dist/css/AdminLTE.css',
        'dist/css/skins/_all-skins.css',
//        'plugins/jvectormap/jquery-jvectormap-1.2.2.css',
//        'plugins/morris/morris.css',
    ];

    /**
     * @var array
     */
    public $js = [
//        'plugins/daterangepicker/daterangepicker.js',
//        'plugins/morris/morris.js',
//        'plugins/knob/jquery.knob.js',
//        'plugins/sparkline/jquery.sparkline.js',
//        'plugins/slimScroll/jquery.slimscroll.js',
//        'plugins/jvectormap/jquery-jvectormap-1.2.2.min.js',
//        'plugins/jvectormap/jquery-jvectormap-world-mill-en.js',

        'dist/js/app.js',
        'dist/js/pages/dashboard.js',
//        'dist/js/demo.js'
    ];

    public $depends = [
        \yii\web\YiiAsset::class,
//        JQueryUIAsset::class,
//        BootstrapWYSIHtml5Asset::class,
//        MomentAsset::class,
        \yii\bootstrap\BootstrapAsset::class,
        \yii\bootstrap\BootstrapPluginAsset::class,
        \p2made\assets\FontAwesomeAsset::class,
        \rmrevin\yii\ionicon\AssetBundle::class,
    ];
}