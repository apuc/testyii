<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
    'modules' => [
        'rbac' => 'dektrium\rbac\RbacWebModule',
        'user' => [
            'class' => 'dektrium\user\Module',
            /*'controllerMap' => [
                'registration' => '\frontend\controllers\user\RegUserController',
                'recovery' => '\frontend\controllers\user\RecoveryController',
                'settings' => [
                    'class' => '\frontend\controllers\user\SettingController',
                    'layout' => '@frontend/views/layouts/personal_area',
                ],
                'security' => [
                    'class' => \dektrium\user\controllers\SecurityController::className(),
                    'on ' . \dektrium\user\controllers\SecurityController::EVENT_BEFORE_LOGIN => function ($e) {
                        $cart = !\Yii::$app->cart->isEmpty() ? \Yii::$app->cart->getCart() : null;
                    },
                    'on ' . \dektrium\user\controllers\SecurityController::EVENT_AFTER_LOGIN => function ($e) {
                        if (!empty($cart)) \Yii::$app->cart->setCart($cart);
                    },
                    'on ' . \dektrium\user\controllers\SecurityController::EVENT_BEFORE_LOGOUT => function ($e) {
                        $cart = !\Yii::$app->cart->isEmpty() ? \Yii::$app->cart->getCart() : null;
                    },
                    'on ' . \dektrium\user\controllers\SecurityController::EVENT_AFTER_LOGOUT => function ($e) {
                        if (!empty($cart)) \Yii::$app->cart->setCart($cart);
                    },
                ],
            ],*/
            'modelMap' => [
                'RegistrationForm' => '\frontend\models\SignupForm',
                /*'RecoveryForm' => '\frontend\models\user\RecoveryForm',
                'ResendForm' => '\frontend\models\user\ResendForm',*/
                'User' => '\common\models\User',
            ],
            'enableUnconfirmedLogin' => true,
            'enableGeneratingPassword' => false,
            'enableConfirmation' => true,
            'enableFlashMessages' => false,
            'confirmWithin' => 86400,
            'cost' => 12,
            'admins' => ['admin'],
        ],
    ],
];
