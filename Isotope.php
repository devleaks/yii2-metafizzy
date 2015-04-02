<?php

namespace devleaks\metafizzy;

use yii\base\InvalidConfigException;
use yii\helpers\Html;
use yii\helpers\Json;
use yii\base\Widget;

/**
 * Asset Widget based to load Isotope JavaScript library {@link http://isotope.metafizzy.co)
 * @package devleaks\metafizzy
 *
 * @author Pierre M <devleaks.be@gmail.com>
 */
class Isotope extends Widget {
    /**
     * @var array the HTML attributes for the div tag.
     * @see \yii\helpers\Html::renderTagAttributes() for details on how attributes are being rendered.
     */
    public $options = [];

    /**
     * @var array Plugin options
     */
    public $pluginOptions = [
        'itemSelector' => '.item',
        'layoutMode'  => 'fitRows'
	];

    /**
     * Initializes the object.
     * This method is invoked at the end of the constructor after the object is initialized with the
     * given configuration.
     */
    public function init()
    {
        //checks for the element id
        if (!isset($this->options['id'])) {
            $this->options['id'] = $this->getId();
        }
        parent::init();
    }

    /**
     * Render chosen select
     * @return string|void
     */
    public function run()
    {
        echo Html::beginTag('div', $this->options); //opens the container
        echo Html::endTag('div'); //closes the container, opened on init
        $this->registerAssets();
    }

    /**
     * Register client assets
     */
    protected function registerAssets()
    {
        $view = $this->getView();
        IsotopeAsset::register($view);
        $js = '$("#' . $this->options['id'] . '").isotope(' . $this->getPluginOptions() . ');';
        $view->registerJs($js, $view::POS_END);
    }

    /**
     * Return plugin options in json format
     * @return string
     */
    public function getPluginOptions()
    {
        return Json::encode($this->pluginOptions);
    }
}