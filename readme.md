# FontAwesome asset bundle for Yii 2.0 Framework #

<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <a href="https::/fontawesome.io">
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5f/Font_Awesome_logomark_blue.svg/768px-Font_Awesome_logomark_blue.svg.png?20220809042108" width="100px">
    </a>
</p>

## Installation #

___

The preferred way to install this extension is through [composer ](http://getcomposer.org/download/)

Either run:

`composer require mylistryx/yii2-fontawesome-free`  or add `"mylistryx/yii2-font-awesome": "~2.0.0"` into your `composer.json` file. 

Then register assets in your view file:

`FontAwesomeAsset::register($this)` OR `FontAwesomeCdnAsset::register($this)` to use CDN files.

and use:

`<?= FA::icon('name') ?>`

`<?= FA::icon('pencil') ?>`

`<?= FA::icon('gear') ?>`

... and so on. Full list of free icons see on fontawesome home page:  https://fontawesome.com/icons

Some animations are represented:

`<?= FAS::i('gear')->animate((new Beat(3.0))) ?>`

`<?= FAS::i('gear')->animate((new Shake())) ?>`

`<?= FAS::i('gear')->animate((new Spin())) ?>`

`<?= FAS::i('gear')->animate((new Flip())) ?>`

`<?= FAS::i('gear')->animate((new Bounce())) ?>`

see source files for more.