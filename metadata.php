<?php
/**
 * Metadata version
 */

$sMetadataVersion = '2.0';

/**
 * Module information
 */
$aModule = array(
    'id' => 'kulka_oxlearn',
    'title' => [
        'de' => 'Module learn DE',
        'en' => 'Module learn EN',
    ],
    'description' => [
        'de' => 'Description DE',
        'en' => 'Description EN',
    ],
    'thumbnail' => 'out/pictures/thumb.png',
    'version' => '0.10.0',
    'author' => 'Karol',

    'extend' => [
        \OxidEsales\Eshop\Application\Model\Basket::class => Kulka\OxLearn\Model\KulkaBasket::class,
        OxidEsales\Eshop\Application\Controller\BasketController::class => Kulka\OxLearn\Controller\KulkaBasketController::class,
        OxidEsales\Eshop\Application\Model\Article::class => Kulka\OxLearn\Model\KulkaArticle::class,
    ],

    'controllers' => [
      'kulka_oxlearn_random_article' => Kulka\OxLearn\Controller\KulkaRandomArticle::class
    ],


    'settings' => [
        [
            'group' => 'main',
            'name' => 'kulkaOxlearnTestSettings',
            'type' => 'str',
            'value' => 'wartosc domyslna'
        ]
    ],

    'templates' => [
        'kulka_random_article.tpl' => 'kulka/oxlearn/views/tpl/kulka_random_article.tpl',
    ],

    'blocks' => [
        [
            'template' => 'widget/minibasket/minibasket.tpl',
            'block'    => 'widget_minibasket',
            'file'     => '/views/blocks/minibasket_widget_minibasket.tpl',
        ],
    ],


);
