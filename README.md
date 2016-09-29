# Yii2 BlockUI
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
