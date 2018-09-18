<?php

namespace App\Mail;

use Illuminate\Http\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RecallSended extends Mailable
{
    use Queueable, SerializesModels;

    private $data;

    /**
     * RecallSended constructor.
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
        return $this->from('sanya-sliver@yandex.ru', 'Melanogaster')
            ->subject('Форма: перезвоните мне')
            ->view('emails.recall', [
                'data' => $this->data
            ]);
    }
}
