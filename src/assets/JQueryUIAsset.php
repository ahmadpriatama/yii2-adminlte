<?php
/**
 * JQueryUIAsset class file
 * @package AdminLTE\assets\jqueryui
 * @author Ahmad Priatama <ahmad.priatama@gmail.com>
 * @since 2016.08.17
 */

namespace AdminLTE\assets;

/**
 * Class JQueryUIAsset
 * @package AdminLTE\assets\jqueryui
 * @author Ahmad Priatama <ahmad.priatama@gmail.com>
 * @since 2016.08.17
 */
class JQueryUIAsset extends \yii\web\AssetBundle
{
    /**
     * @var string
     */
    public $sourcePath = '@bower/jquery-ui';

    public $js = [
        'jquery-ui.js'
    ];
}