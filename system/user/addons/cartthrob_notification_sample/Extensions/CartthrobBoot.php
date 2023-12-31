<?php

namespace CartThrob\CartthrobNotificationSample\Extensions;

use ExpressionEngine\Service\Addon\Controllers\Extension\AbstractRoute;

class CartthrobBoot extends AbstractRoute
{
    public function process()
    {
        ee()->load->add_package_path('Cartthrob_notification_sample');
        ee()->lang->load('Cartthrob_notification_sample', $idiom = '', $return = false, $add_suffix = true, $alt_path = __DIR__ . '/../');
        ee('cartthrob:PluginService')->register(\Cartthrob_notification_sample_plugin::class);
    }
}
