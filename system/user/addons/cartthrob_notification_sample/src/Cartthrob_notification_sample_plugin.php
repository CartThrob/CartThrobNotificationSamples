<?php

use CartThrob\Plugins\Notification\NotificationPlugin;
use ExpressionEngine\Service\Logger\File;

class Cartthrob_notification_sample_plugin extends NotificationPlugin
{
    /**
     * @var string
     */
    public $title = 'Sample Notification';

    /**
     * @var string
     */
    public $short_title = 'sample';

    /**
     * @var string
     */
    public string $type = 'sample';

    /**
     * @var
     */
    public $overview;

    /**
     * @var
     */
    public $note;

    /**
     * @var array
     */
    public $settings = [
        [
            'name' => 'dir_name',
            'short_name' => 'dir_name',
            'note' => 'ct.route.notification_sample.dir_name_note',
            'type' => 'text',
        ],
    ];

    /**
     * Custom validation rules
     * @var string[]
     */
    protected array $rules = [];

    /**
     * @param mixed $data
     * @return bool
     * @throws Exception
     */
    public function deliver(mixed $data): bool
    {
        $path = PATH_CACHE;
        if ($this->getSetting('dir_name')) {
            $path .= $this->getSetting('dir_name') . '/';
            if (!is_dir($path)) {
                mkdir($path);
            }
        }

        $file = new File($path . 'notification_' . $this->event . '_' . ee()->localize->now . '.log', ee('Filesystem'));
        $file->log(print_r($data, true));
        return true;
    }
}