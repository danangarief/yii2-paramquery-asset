<?php
namespace danangarief\web;

use yii\base\Exception;
use yii\web\AssetBundle;

/**
 * AdminLte AssetBundle
 * @since 0.1
 */
class ParamQueryAsset extends AssetBundle
{
    // public $sourcePath = '@vendor/almasaeed2010/adminlte/dist';
    public $sourcePath = '@vendor/bower/pqgrid';
    public $css = [
        'pqgrid.min.css',
    ];
    public $js = [
        'pqgrid.min.js'
    ];
    public $depends = [
        // 'rmrevin\yii\fontawesome\AssetBundle',
        'yii\web\YiiAsset',
        // 'yii\bootstrap\BootstrapAsset',
        // 'yii\bootstrap\BootstrapPluginAsset',
    ];

}
