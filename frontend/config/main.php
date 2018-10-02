<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'authClientCollection' => [
            'class'   => \yii\authclient\Collection::className(),
            'clients' => [
                'vkontakte' => [
                    'class'        => 'dektrium\user\clients\VKontakte',
                    'clientId'     => '5729753',
                    'clientSecret' => 'QISu2sOlCH7KKwHFuXeY',
                    'title' => '',
                ],
                'facebook' => [
                    'class'        => 'dektrium\user\clients\Facebook',
                    'clientId'     => '149642232489195',
                    'clientSecret' => 'ea5ff5e69311c24acee5cbd2ac557a69',
                    'title' => '',
                ],
                'twitter' => [
                    'class'          => 'dektrium\user\clients\Twitter',
                    'consumerKey'    => 'kMykWSokfmYUhNwCuRTAPQUpO',
                    'consumerSecret' => 'vvAFL8lpYugctQ5IiRV5ohGNXs7ojK0IAZNCDTJiodZPNciY2M',
                    'title'          => '',
                ],
                'google' => [
                    'class'        => 'dektrium\user\clients\Google',
                    'clientId'     => '153414607886-k1ddcest7dkg37fjvg8a3m0d2c0plmkk.apps.googleusercontent.com',
                    'clientSecret' => 'hHKvstkOUgHmfzazEsETTSxk',
                    'title'          => '',
                ],
            ],
        ],
        'view' => [
            'theme' => [
                'pathMap' => [
                    '@dektrium/user/views' => '@app/views/user',
                ],
            ],
        ],
        'request' => [
            'csrfParam' => '_csrf-frontend',
            'baseUrl' => '',
        ],
        'user' => [
            'identityClass' => 'dektrium\user\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'backendUrlManager' => require __DIR__ . '/../../backend/config/urlManager.php',
        'frontendUrlManager' => require __DIR__ . '/urlManager.php',
        'urlManager' => function () {
            return Yii::$app->get('frontendUrlManager');
        },
    ],
    'modules' => [
    ],
    'params' => $params,
];
