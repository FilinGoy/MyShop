<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class OrderInfo extends Mailable
{
    use Queueable, SerializesModels;

    protected $order;
    protected $products;
    protected $payment;
    protected $number;

    /**
     * Create a new message instance.
     */
    public function __construct($order, $products, $payment, $number)
    {
        $this->order = $order;
        $this->products = $products;
        $this->payment = $payment;
        $this->number = $number;

    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Новый заказ в интернет-магазине Дом Вкуса #'.$this->order->id,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.order',
            with: ['order' => $this->order, 'products' => $this->products,
                    'payment' => $this->payment, 'number' => $this->number]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
