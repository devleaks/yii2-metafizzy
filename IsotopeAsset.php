<?php

namespace devleaks\metafizzy;

use yii\web\AssetBundle;

/**
 * @author Pierre M <devleaks.be@gmail.com>
 * @since 1.0
 */
class IsotopeAsset extends AssetBundle
{
    public $sourcePath = '@vendor/bower/isotope/dist/';

    public $js = [
        'isotope.pkgd.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
