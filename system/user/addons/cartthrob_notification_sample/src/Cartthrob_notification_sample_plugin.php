<?php

use CartThrob\Plugins\Notification\NotificationPlugin;
use ExpressionEngine\Service\Logger\File;

class Cartthrob_notification_sample_plugin extends NotificationPlugin
{
    /**
     * @var string
     */
    public $title = 'Notification Sample';

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
            'name' => 'file_path',
            'short_name' => 'file_path',
            'note' => 'ct.route.notification_sample.file_path_note',
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
        $file = new File(PATH_CACHE . 'notification_' . $this->event . '_' . ee()->localize->now . '.log', ee('Filesystem'));
        $file->log(print_r($data, true));
        return true;
    }
}