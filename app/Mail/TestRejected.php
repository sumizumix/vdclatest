<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TestRejected extends Mailable
{
    use Queueable, SerializesModels;

    public $product;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($product)
    {
        $this->product = $product;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Test Collection Rejected')
                    ->view('emails.test_rejected');
    }
}
