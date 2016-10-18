# Yii2 BlockUI

***
[![Latest Stable Version](https://poser.pugx.org/ayrozjlc/yii2-blockui/v/stable)](https://packagist.org/packages/ayrozjlc/yii2-blockui)
[![Total Downloads](https://poser.pugx.org/ayrozjlc/yii2-blockui/downloads)](https://packagist.org/packages/ayrozjlc/yii2-blockui)
[![Latest Unstable Version](https://poser.pugx.org/ayrozjlc/yii2-blockui/v/unstable)](https://packagist.org/packages/ayrozjlc/yii2-blockui)
[![License](https://poser.pugx.org/ayrozjlc/yii2-blockui/license)](https://packagist.org/packages/ayrozjlc/yii2-blockui)
***
AssetBundle for jQuery BlockUI Plugin http://jquery.malsup.com/block/

## Installation

####Composer

```
composer require --prefer-dist "ayrozjlc/yii2-blockui:*"
```

or add

```
"ayrozjlc/yii2-blockui": "dev-master"
```

to the ```require``` section of your `composer.json` file.

## Usage

in view (for example: ```@app/views/layouts/main.php```)

```php
// ...
use ayrozjlc\blockui\BlockUiAsset;
// ...
BlockUiAsset::register($this);
```

or add to your ```assets/AppAsset.php```

```php
public $depends = [
    // ...
    '\ayrozjlc\blockui\BlockUiAsset',
];
```
