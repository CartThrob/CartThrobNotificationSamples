<?php

require_once __DIR__ . '/vendor/autoload.php';

define('CARTTHROB_NOTIFICATION_SAMPLE_NAME', 'CartThrob Sample Notification Plugin');
define('CARTTHROB_NOTIFICATION_SAMPLE_VERSION', '0.0.1');
define('CARTTHROB_NOTIFICATION_SAMPLE_DESC', 'An example implementation of a Notification Plugin for CartThrob');

return [
    'name' => CARTTHROB_NOTIFICATION_SAMPLE_NAME,
    'description' => CARTTHROB_NOTIFICATION_SAMPLE_DESC,
    'version' => CARTTHROB_NOTIFICATION_SAMPLE_VERSION,
    'author' => 'CartThrob',
    'author_url' => 'https://cartthrob.com',
    'namespace' => 'CartThrob\CartthrobNotificationSample',
    'settings_exist' => false,
];
