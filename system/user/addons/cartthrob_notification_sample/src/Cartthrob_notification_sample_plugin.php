<?php

use CartThrob\Plugins\Notification\NotificationPlugin;

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
     * @param mixed $message
     * @return bool
     */
    public function deliver(mixed $message): bool
    {
        // go on my friend
        return true;
    }
}