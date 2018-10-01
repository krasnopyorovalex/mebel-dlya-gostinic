<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

/**
 * Class PluginSended
 * @package App\Mail
 */
class PluginSended extends Mailable
{
    use Queueable, SerializesModels;

    private $data;

    /**
     * PluginSended constructor.
     * @param $data
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('sanya-sliver@yandex.ru')
            ->subject('Форма: плагин-опросник')
            ->view('emails.plugin', [
                'data' => $this->data
            ]);
    }
}
