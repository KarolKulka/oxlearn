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
        'de' => 'Nauka modulow DE',
        'en' => 'Nauka modulow EN',
    ],
    'description' => [
        'de' => 'To jest opis DE',
        'en' => 'To jest opis EN',
    ],
    'thumbnail' => 'out/pictures/thumb.png',
    'version' => '0.10.0',
    'author' => 'Karol',

    'extend' => [
        \OxidEsales\Eshop\Application\Model\Basket::class => Kulka\OxLearn\Model\KulkaBasket::class,

        OxidEsales\Eshop\Application\Controller\BasketController::class => Kulka\OxLearn\Controller\KulkaBasketController::class,
        //OxidEsales\Eshop\Application\Controller\FrontendController::class => Kulka\OxLearn\Controller\KulkaRandomArticle::class

    ],

    'controllers' => [
      'luckypicker' => Kulka\OxLearn\Controller\KulkaRandomArticle::class
    ],


    'settings' => [
        [
            'group' => 'main',
            'name' => 'kulkaOxlearnTestSettings',
            'type' => 'str',
            'value' => 'wartosc domyslna'
        ]
    ],

    'blocks' => [
        [
            'template' => 'widget/minibasket/minibasket.tpl',
            'block'    => 'widget_minibasket',
            'file'     => '/views/blocks/minibasket_widget_minibasket.tpl',
        ],
    ],


);
