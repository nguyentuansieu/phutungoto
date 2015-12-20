<?php
return [
  'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
  'components' => [
    'cache' => [
      'class' => 'yii\caching\FileCache',
    ],
    'i18n' => [
      'translations' => [
        'app*' => [
          'class' => 'yii\i18n\PhpMessageSource',
          'basePath' => '@common/messages',
          'sourceLanguage' => 'vi-VN',
          'fileMap' => [
            'app' => 'app.php',
            'backend' => 'backend.php',
            'frontend' => 'frontend.php',
            'app/error' => 'error.php',
          ],
        ],
        'frontend*' => [
          'class' => 'yii\i18n\PhpMessageSource',
          'basePath' => '@common/messages',
        ],
        'backend*' => [
          'class' => 'yii\i18n\PhpMessageSource',
          'basePath' => '@common/messages',
        ],
      ],
    ],
  ],
];
