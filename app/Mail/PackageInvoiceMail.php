<?php

namespace App\Mail;

use App\Models\PackageOrder;
use App\Models\Invoice;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class PackageInvoiceMail extends Mailable
{
    use Queueable, SerializesModels;

    public $order;
    public $invoice;
    public $pdfContent;

    /**
     * Create a new message instance.
     */
    public function __construct(PackageOrder $order, Invoice $invoice, $pdfContent = null)
    {
        $this->order = $order;
        $this->invoice = $invoice;
        $this->pdfContent = $pdfContent;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Invoice for Your Order: ' . $this->order->order_number,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'emails.package-invoice',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, Attachment>
     */
    public function attachments(): array
    {
        $attachments = [];

        if ($this->pdfContent) {
            $attachments[] = Attachment::fromData(fn () => $this->pdfContent, 'invoice-' . $this->invoice->invoice_number . '.pdf')
                ->withMime('application/pdf');
        }

        return $attachments;
    }
}
