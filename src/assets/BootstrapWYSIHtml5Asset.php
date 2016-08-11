<?php
/**
 * BootstrapWYSIHtml5Asset class file
 * @package AdminLTE\assets
 * @author Ahmad Priatama <ahmad.priatama@gmail.com>
 * @since 2016.08.17
 */

namespace AdminLTE\assets;

/**
 * Class BootstrapWYSIHtml5Asset
 * @package AdminLTE\assets
 * @author Ahmad Priatama <ahmad.priatama@gmail.com>
 * @since 2016.08.17
 */
class BootstrapWYSIHtml5Asset extends \yii\web\AssetBundle
{
    /**
     * @var string
     */
    public $sourcePath = '@bower/bootstrap-wysihtml5/dist';

    /**
     * @var array
     */
    public $css = [
        'bootstrap-wysihtml5-0.0.2.css',
    ];

    /**
     * @var array
     */
    public $js = [
        'bootstrap-wysihtml5-0.0.2.js',
    ];
}
