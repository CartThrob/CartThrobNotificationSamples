<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

use ExpressionEngine\Service\Addon\Extension;

class Cartthrob_notification_sample_ext extends Extension
{
    public $settings = [];

    protected $addon_name = 'cartthrob_notification_sample';

    public function activate_extension()
    {
        ee()->db->insert('extensions', [
            'class' => __CLASS__,
            'method' => 'cartthrob_boot',
            'hook' => 'cartthrob_boot',
            'settings' => serialize($this->settings),
            'priority' => 10,
            'version' => CARTTHROB_NOTIFICATION_SAMPLE_VERSION,
            'enabled' => 'y',
        ]);
    }

    /**
     * @param string $current
     * @return bool
     */
    public function update_extension($current = '')
    {
        if ($current == '' or $current == CARTTHROB_NOTIFICATION_SAMPLE_VERSION) {
            return false;
        }

        ee()->db->where('class', __CLASS__);
        ee()->db->update('extensions', ['version' => CARTTHROB_NOTIFICATION_SAMPLE_VERSION]);
    }

    /**
     * Disable extension
     */
    public function disable_extension()
    {
        ee()->db->where('class', __CLASS__);
        ee()->db->delete('extensions');
    }
}
