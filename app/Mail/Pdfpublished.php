<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\invoice;
use App\Customer;
use App\product;

class Pdfpublished extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;
    protected $invoice;
    protected $customer;
    protected $product;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(invoice $invoice,Customer $customer,product $product )
    {
        $this->invoice = $invoice;
        $this->customer = $customer;
        $this->product=$product;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->from(env('MAIL_FROM_ADDRESS'),env('MAIL_FROM_NAME'))
            ->subject('a new blog is published')
            ->view('emails.emails')
            ->with([
                'invoice'   =>$this->invoice,
                'customer'  =>$this->customer,
                'product'   =>$this->product,
            ]);
        return $this;
    }
}
