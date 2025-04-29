<?php

namespace App\Mail;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class InvoiceMail extends Mailable
{
    use Queueable, SerializesModels;

    public $order;
    public $product;
    public $quantity;

    public function __construct(Order $order, Product $product, $quantity)
    {
        $this->order = $order;
        $this->product = $product;
        $this->quantity = $quantity;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Invoice Pembelian - ' . $this->order->order_code,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'user.invoiceCustomer', //diarahakn ke folder user
            with: [
                'order' => $this->order,
                'product' => $this->product,
                'quantity' => $this->quantity,
                'user' => $this->order->user,
                'is_email'=> true,
            ],
        );
    }

    /**
     * Get the attachments for the message.
     */
    public function attachments(): array
    {
        return [];
    }
}
