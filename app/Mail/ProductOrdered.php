<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ProductOrdered extends Mailable
{
    use Queueable, SerializesModels;

    private $data;

    /**
     * ProductOrdered constructor.
     * @param array $data
     */
    public function __construct(array $data)
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
            ->subject('Форма запроса стоимости')
            ->view('emails.product', [
                'data' => $this->data
            ]);
    }
}
