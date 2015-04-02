Metafizzy Asset Bundle
======================
Yii2 asset bundle wrapper around David DeSandro javascript libraries masonry, isotope, packery, and draggabilly.

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist devleaks/yii2-metafizzy "*"
```

or add

```
"devleaks/yii2-metafizzy": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code :

(You use Isotope, Masonry, Packery, or Draggabilly the same way.)

```php
<?php

use devleaks\metafizzy\Isotope;

?>
<div id="isotope-container">
	<div class="item">...</div>
	<div class="item w2">...</div>
	<div class="item">...</div>
	...
</div>

<?= Isopote::widget([
	'options' => [
		'id' => 'isotope-container'
	],
	'clientOptions' => [
        'itemSelector' => '.item',
        'layoutMode'  => 'fitRows'
	]
]) ?>
